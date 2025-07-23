<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Support\Enums\IconPosition;
use Filament\Forms\Components\Textarea;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';
    protected static ?string $navigationLabel = 'Contact';
    protected static ?string $pluralModelLabel = 'Contact';
    protected static ?string $slug = 'contact';
    protected static ?string $navigationGroup = 'Contact Us';


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
                                        TextInput::make('banner_heading')
                                            ->required()
                                            ->label('Heading')
                                            ->default('Contat Us'),
                                    ])->columns(1),

                                Fieldset::make('Image')
                                    ->schema([
                                        FileUpload::make('banner_image')
                                            ->label('Upload Banner Image')
                                            ->directory('contact')
                                            ->image()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->required()
                                            ->imagePreviewHeight('80')
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                '5.21:1',
                                            ])
                                            ->optimize('webp')
                                            ->maxSize(5120),

                                        TextInput::make('image_alt')
                                            ->label('Image Alt Text'),
                                    ])->columns(2),
                            ]),

                        Tabs\Tab::make('Content')
                            ->icon('heroicon-m-document-chart-bar')
                            ->iconPosition(IconPosition::After)
                            ->schema([
                                Fieldset::make('Content')
                                    ->schema([
                                        RichEditor::make('description')
                                            ->label('Paragraph')
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
                                    ])->columns(1),
                            ]),

                        Tabs\Tab::make('Contact Us')
                            ->icon('heroicon-m-map-pin')
                            ->iconPosition(IconPosition::After)
                            ->schema([
                                Fieldset::make('Content')
                                    ->schema([
                                        TextInput::make('email')
                                            ->label('Email'),

                                        TextInput::make('phone')
                                            ->label('Phone Number'),

                                        Textarea::make('address')
                                            ->label('Address'),
                                    ])->columns(2),
                            ]),

                        Tabs\Tab::make('Social Media')
                            ->icon('heroicon-m-chat-bubble-left-right')
                            ->iconPosition(IconPosition::After)
                            ->schema([
                                Fieldset::make('Links')
                                    ->schema([
                                        TextInput::make('facebook')
                                            ->label('Facebook')
                                            ->placeholder('https://facebook.com')
                                            ->url()
                                            ->suffixIcon('heroicon-m-globe-alt'),

                                        TextInput::make('twitter')
                                            ->label('Twitter')
                                            ->url()
                                            ->placeholder('https://twitter.com')
                                            ->suffixIcon('heroicon-m-globe-alt'),

                                        TextInput::make('linkedin')
                                            ->label('Linkedin')
                                            ->url()
                                            ->placeholder('https://linkedin.com')
                                            ->suffixIcon('heroicon-m-globe-alt'),

                                        TextInput::make('instagram')
                                            ->label('Instagram')
                                            ->url()
                                            ->placeholder('https://instagram.com')
                                            ->suffixIcon('heroicon-m-globe-alt'),

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
            'index' => Pages\CreateContact::route('/'),
            // 'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
