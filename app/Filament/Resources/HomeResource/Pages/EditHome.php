<?php

namespace App\Filament\Resources\HomeResource\Pages;

use App\Filament\Resources\HomeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Actions\Action;

class EditHome extends EditRecord
{
    protected static string $resource = HomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(), //Delete button
        ];
    }

    protected function getCancelFormAction(): Action
    {
        return Action::make('cancel')
            ->label(__('filament-panels::resources/pages/create-record.form.actions.cancel.label'))
            ->alpineClickHandler('location.reload()')
            ->color('gray');
    }
}
