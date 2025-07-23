<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EnquiryResource\Pages;
use App\Filament\Resources\EnquiryResource\RelationManagers;
use App\Models\Enquiry;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;

class EnquiryResource extends Resource
{
    protected static ?string $model = Enquiry::class;

    // protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationGroup = 'Contact';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('User Information')
                    ->schema([
                        TextInput::make('first_name')
                            ->label('First Name')
                            ->disabled(),
                        TextInput::make('last_name')
                            ->label('Last Name')
                            ->disabled(),
                        TextInput::make('email')
                            ->label('Email')
                            ->disabled(),
                    ])
                    ->columns(2),

                Fieldset::make('Message')
                    ->schema([
                        RichEditor::make('subject')
                            ->label('Subject')
                            ->disabled(),
                        RichEditor::make('message')
                            ->label('Message')
                            ->disabled(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->label('Full Name')
                    ->getStateUsing(function ($record) {
                        return $record->first_name . ' ' . $record->last_name;
                    })
                    ->searchable(),

                TextColumn::make('email')
                    ->copyable()
                    ->copyMessage('Email address copied')
                    ->copyMessageDuration(1500)
                    ->searchable(),
                TextColumn::make('subject')
                    ->searchable(),
                TextColumn::make('message')
                    ->searchable()
                    ->limit(50),
                TextColumn::make('created_at')
                    ->sortable()
                    ->label('Created At')
                    ->dateTime()
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
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
            'index' => Pages\ListEnquiries::route('/'),
            // 'create' => Pages\CreateEnquiry::route('/create'),
            // 'edit' => Pages\EditEnquiry::route('/{record}/edit'),
        ];
    }

    protected static ?string $navigationBadgeTooltip = 'New Enquiries';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('is_read', false)->count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return 'success';
    }
}
