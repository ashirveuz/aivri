<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeResource\Pages;
use App\Models\Home;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Support\Enums\IconPosition;
use Filament\Forms\Components\Textarea;

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;

    protected static ?string $navigationLabel = 'Home';
    protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';
    protected static ?string $pluralModelLabel = 'Home';
    protected static ?string $slug = 'home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Banner')
                            ->icon('heroicon-m-photo')
                            ->iconPosition(IconPosition::After)
                            ->schema([

                                Fieldset::make('Banner')
                                    ->schema([
                                        TextInput::make('banner_title')
                                            ->label('Title')
                                            ->required(),

                                        Textarea::make('banner_description')
                                            ->label('Description'),
                                    ])->columns(2),

                                Fieldset::make('Images')
                                    ->schema([
                                        FileUpload::make('banner_images')
                                            ->label('Upload Banner Images')
                                            ->directory('home')
                                            ->multiple()
                                            ->maxFiles(6)
                                            ->image()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->required()
                                            ->helperText('Upload up to 6 images for the banner.')
                                            ->imagePreviewHeight('80')
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                '3.66:1',
                                            ])
                                            // ->imageResizeMode('crop')
                                            // ->imageCropAspectRatio('3.66:1')
                                            // ->resize(50)
                                            ->optimize('webp')
                                            ->maxSize(5120),

                                        TextInput::make('image_alt')
                                            ->label('Image Alt Text'),

                                        // //Repeter code: inside schema add repeting input fields.
                                        // Repeater::make('banner_images')
                                        //     ->label('Banner Images')
                                        //     ->schema([
                                        //     ])
                                        //     ->columns(1)
                                        //     ->minItems(6) 
                                        //     ->maxItems(6)
                                        //     ->helperText('Add alt text for each image uploaded above.'),
                                    ])->columns(2),
                            ]),

                        Tabs\Tab::make('SEO')
                            ->icon('heroicon-m-magnifying-glass')
                            ->iconPosition(IconPosition::After)
                            ->schema([

                                Fieldset::make('SEO')
                                    ->schema([
                                        TextInput::make('meta_title')
                                            ->label('Meta Title'),

                                        TextInput::make('meta_keywords')
                                            ->label('Meta Keywords'),

                                        Textarea::make('meta_description')
                                            ->label('Meta Description'),
                                    ])->columns(2),

                            ]),
                    ])
                    ->contained(false)
                    ->columnSpanFull()
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\CreateHome::route('/'),
            // 'create' => Pages\CreateHome::route('/create'),
            'edit' => Pages\EditHome::route('/{record}/edit'),
        ];
    }
}
