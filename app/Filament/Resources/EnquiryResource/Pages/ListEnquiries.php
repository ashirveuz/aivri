<?php

namespace App\Filament\Resources\EnquiryResource\Pages;

use App\Filament\Resources\EnquiryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\Enquiry;

class ListEnquiries extends ListRecords
{
    protected static string $resource = EnquiryResource::class;


    public function mount(): void
    {
        Enquiry::where('is_read', false)->update(['is_read' => true]);
    }

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
