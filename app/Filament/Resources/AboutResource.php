<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Models\About;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Support\Enums\IconPosition;
use Filament\Forms\Components\Textarea;


class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';
    protected static ?string $modelLabel = 'About';
    protected static ?string $pluralModelLabel = 'About';
    protected static ?string $slug = 'about';

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

                                Fieldset::make('Title')
                                    ->schema([
                                        TextInput::make('banner_heading')
                                            ->label('Heading')
                                            ->default('About Us')
                                            ->required(),

                                    ])->columns(2),

                                Fieldset::make('Image')
                                    ->schema([
                                        FileUpload::make('banner_image')
                                            ->label('Upload Banner Image')
                                            ->directory('about')
                                            ->image()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->required()
                                            ->imagePreviewHeight('80')
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                '5.21:1',
                                            ])
                                            ->panelAspectRatio('3:1')
                                            ->optimize('webp')
                                            ->maxSize(5120)
                                            ->panelLayout('integrated'),

                                        TextInput::make('banner_image_alt')
                                            ->label('Image Alt Text'),
                                    ])->columns(2),
                            ]),

                        Tabs\Tab::make('About Us')
                            ->icon('heroicon-m-identification')
                            ->iconPosition(IconPosition::After)
                            ->schema([

                                Fieldset::make('Content')
                                    ->schema([
                                        TextInput::make('heading')
                                            ->label('Heading')
                                            ->required(),

                                        Textarea::make('description')
                                            ->label('Description')
                                            ->required(),

                                    ])->columns(2),

                                Fieldset::make('Image')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->label('Upload Image')
                                            ->directory('about')
                                            ->image()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->required()
                                            ->imagePreviewHeight('80')
                                            ->imageEditor()
                                            ->imageEditorAspectRatios(['3:2'])
                                            ->panelAspectRatio('3:1')
                                            ->panelLayout('integrated')
                                            ->optimize('webp')
                                            ->maxSize(5120),

                                        TextInput::make('image_alt')
                                            ->label('Image Alt Text'),
                                    ])->columns(2),
                            ]),

                        Tabs\Tab::make('Our Commitment')
                            ->icon('heroicon-m-eye')
                            ->iconPosition(IconPosition::After)
                            ->schema([

                                Fieldset::make('Mission, Vision, & Values')
                                    ->schema([

                                        RichEditor::make('mission')
                                            ->label('Our Mission')
                                            ->required()
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
                                        RichEditor::make('vision')
                                            ->label('Our Vision')
                                            ->required()
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
                                        RichEditor::make('our_values')
                                            ->label('Our Values')
                                            ->required()
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

                                    ])->columns(2),
                            ]),

                        Tabs\Tab::make('Founder')
                            ->icon('heroicon-m-user')
                            ->iconPosition(IconPosition::After)
                            ->schema([

                                Fieldset::make('Our CEO')
                                    ->schema([
                                        TextInput::make('founder_name')
                                            ->label('Name')
                                            ->required(),

                                        TextInput::make('founder_professional_title')
                                            ->label('Professional Title')
                                            ->required(),

                                        Textarea::make('founder_description')
                                            ->label('Description')
                                            ->required(),

                                    ])->columns(2),

                                Fieldset::make('Image')
                                    ->schema([
                                        FileUpload::make('founder_image')
                                            ->label('Upload Image')
                                            ->directory('about')
                                            ->image()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->required()
                                            ->imagePreviewHeight('80')
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                '0.7:1',
                                            ])
                                            ->panelAspectRatio('3:1')
                                            ->panelLayout('integrated')
                                            ->optimize('webp')
                                            ->maxSize(5120),

                                        TextInput::make('image_alt')
                                            ->label('Image Alt Text'),
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
            'index' => Pages\CreateAbout::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
