<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;


class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

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

                        RichEditor::make('description')
                            ->label('Product Description')
                            ->placeholder('Enter a detailed description of the product.')
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'heading',
                                'unorderedList',
                                'orderedList'
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                // Fieldset for Pricing Information
                Fieldset::make('Pricing Info')
                    ->schema([
                        TextInput::make('price')
                            ->numeric()
                            ->required()
                            ->prefix('₹'),

                        TextInput::make('offer_percentage')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(100)
                            ->suffix('%')
                            ->label('Offer (%)')
                            ->hint('Leave blank if no discount'),

                        TextInput::make('stock')
                            ->label('Stock Quantity')
                            ->numeric()
                            ->required()
                            ->minValue(0)
                            ->hint('Enter the current stock quantity')
                            ->prefix('Qty: '),
                    ])
                    ->columns(2),

                // Fieldset for colour and size
                Fieldset::make('Colour & Size')
                    ->schema([
                        ColorPicker::make('color')
                            ->label('Product Color')
                            ->regex('/^#([a-f0-9]{6}|[a-f0-9]{3})\b$/'),

                        TextInput::make('size')
                            ->numeric()
                            ->prefix('ml'),

                    ])
                    ->columns(2),

                // Fieldset for Product Features
                Fieldset::make('Product Features')
                    ->schema([
                        RichEditor::make('key_features')
                            ->label('Key Features')
                            ->placeholder('Enter product features like "Industry-leading noise cancellation", "30-hour battery life", etc.')
                            ->hint('Use bullet points for each feature.')
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'h2',
                                'h3',
                                'italic',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ]),

                        RichEditor::make('specifications')
                            ->label('Specifications')
                            ->placeholder('Enter specifications like "Lotion Type", "Care Instruction", etc.')
                            ->hint('Provide a detailed list of specifications.')
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'h2',
                                'h3',
                                'italic',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ]),
                    ])
                    ->columns(1),

                // Fieldset for Image Uploads
                Fieldset::make('Images')
                    ->schema([
                        FileUpload::make('featured_image')
                            ->label('Main Image')
                            ->directory('products/main')
                            ->image()
                            ->required()
                            ->imagePreviewHeight('150'),

                        FileUpload::make('additional_images')
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
                ImageColumn::make('featured_image')
                    ->label('')
                    ->circular()
                    ->width(50)
                    ->height(50)
                    ->getStateUsing(function ($record) {
                        return asset('storage/' . $record->featured_image);
                    }),

                TextColumn::make('name')
                    ->label('Product Name')
                    ->searchable(),

                TextColumn::make('code')
                    ->label('Product Code')
                    ->badge()
                    ->searchable(),

                TextColumn::make('price')
                    ->money('inr', true)
                    ->sortable()
                    ->searchable(),

                TextColumn::make('offer_percentage')
                    ->label('Offer')
                    ->formatStateUsing(fn($state) => $state ? "{$state}%" : '-')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('stock')
                    ->label('Available Stock')
                    ->searchable()
                    ->badge()
                    ->color(fn($state) => match (true) {
                        $state == 0 => 'danger',
                        $state < 5 => 'warning',
                        default => 'success',
                    })
                    ->sortable(),

                ToggleColumn::make('status')
                    ->label('Active')
                    ->sortable()
                    ->onColor('success')
                    ->offColor('danger')
                    ->toggleable(),
            ])
            ->filters([
                // Your filters can go here...
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ])->tooltip('Actions'),
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
