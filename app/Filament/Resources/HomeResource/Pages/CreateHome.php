<?php

namespace App\Filament\Resources\HomeResource\Pages;

use App\Filament\Resources\HomeResource;
use App\Models\Home;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;

class CreateHome extends CreateRecord
{
    protected static string $resource = HomeResource::class;
    protected static bool $canCreateAnother = false;

    public function mount(): void
    {
        $home = Home::first();

        if ($home) {
            redirect()->route('filament.admin.resources.homes.edit', ['record' => $home->id]);
        }

        parent::mount();
    }

    protected function getCancelFormAction(): Action
    {
        return Action::make('cancel')
            ->label(__('filament-panels::resources/pages/create-record.form.actions.cancel.label'))
            ->alpineClickHandler('location.reload()')
            ->color('gray');
    }
}
