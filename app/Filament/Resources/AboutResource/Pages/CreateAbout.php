<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use App\Models\About;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateAbout extends CreateRecord
{
    protected static string $resource = AboutResource::class;
    protected static bool $canCreateAnother = false;

    public function mount(): void
    {
        $about = About::first();

        if ($about) {
            redirect()->route('filament.admin.resources.about.edit', ['record' => $about->id]);
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
