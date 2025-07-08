<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
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
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('code')
                    ->label('Product Code')
                    ->unique(ignoreRecord: true)
                    ->disabled(fn($record) => $record !== null)
                    ->maxLength(20)
                    ->required(),

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

                Textarea::make('description')
                    ->rows(4)
                    ->columnSpanFull(),

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
