<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Models\Contact;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;
    protected static bool $canCreateAnother = false;

    public function mount(): void
    {
        $contact = Contact::first();

        if ($contact) {
            redirect()->route('filament.admin.resources.contact.edit', ['record' => $contact->id]);
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
