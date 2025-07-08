<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;
use Filament\Forms\Components\Select; // <-- Add this import


class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    // protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationLabel = 'Products';
    protected static ?string $pluralModelLabel = 'Products';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Fieldset for Basic Product Info
                Fieldset::make('Basic Info')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('code')
                            ->label('Product Code')
                            ->unique(ignoreRecord: true)
                            ->disabled(fn($record) => $record !== null)
                            ->maxLength(20)
                            ->required(),
                    ])
                    ->columns(2),

                // Fieldset for Pricing Information
                Fieldset::make('Pricing Info')
                    ->schema([
                        TextInput::make('price')
                            ->numeric()
                            ->required()
                            ->prefix('$'),

                        TextInput::make('offer_percentage')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(100)
                            ->suffix('%')
                            ->label('Offer (%)')
                            ->hint('Leave blank if no discount'),
                    ])
                    ->columns(2),

                // Fieldset for Product Features
                Fieldset::make('Product Features')
                    ->schema([
                        Textarea::make('key_features')
                            ->label('Key Features')
                            ->rows(5)
                            ->placeholder('Enter product features like "Industry-leading noise cancellation", "30-hour battery life", etc.')
                            ->hint('Separate each feature with a newline or bullet point'),

                        Textarea::make('specifications')
                            ->label('Specifications')
                            ->rows(5)
                            ->placeholder('Enter specifications like "Lotion Type", "Care Instruction", etc.')
                            ->hint('Enter each specification in a new line'),

                        Textarea::make('about_item')
                            ->label('About this Item')
                            ->rows(5)
                            ->placeholder('Enter details about the item, such as "Lotion Type", "Use", etc.')
                            ->hint('Provide detailed information about this item'),
                    ])
                    ->columns(1),

                // Fieldset for Color and Size
                Fieldset::make('Color & Size')
                    ->schema([
                        Select::make('color')
                            ->label('Color')
                            ->options([
                                'red' => 'Red',
                                'blue' => 'Blue',
                                'green' => 'Green',
                                'black' => 'Black',
                                'white' => 'White',
                                // Add more colors as needed
                            ])
                            ->required(),

                        Select::make('size')
                            ->label('Size')
                            ->options([
                                'small' => 'Small',
                                'medium' => 'Medium',
                                'large' => 'Large',
                                'extra_large' => 'Extra Large',
                                // Add more sizes as needed
                            ])
                            ->required(),
                    ])
                    ->columns(2),

                // Fieldset for Description
                Fieldset::make('Description')
                    ->schema([
                        Textarea::make('description')
                            ->rows(4)
                            ->columnSpanFull(),
                    ]),

                // Fieldset for Image Uploads
                Fieldset::make('Images')
                    ->schema([
                        FileUpload::make('main_image')
                            ->label('Main Image')
                            ->directory('products/main')
                            ->image()
                            ->required()
                            ->imagePreviewHeight('150'),

                        FileUpload::make('gallery_images')
                            ->label('Gallery Images')
                            ->directory('products/gallery')
                            ->multiple()
                            ->reorderable()
                            ->image()
                            ->imagePreviewHeight('100')
                            ->maxFiles(6),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('main_image')
                    ->label('Image')
                    ->circular()
                    ->width(50)
                    ->height(50),

                TextColumn::make('name')->searchable()->sortable(),

                TextColumn::make('code')
                    ->label('Code')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('price')
                    ->money('usd', true)
                    ->sortable(),

                TextColumn::make('offer_percentage')
                    ->label('Offer')
                    ->formatStateUsing(fn($state) => $state ? "{$state}%" : '-')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
