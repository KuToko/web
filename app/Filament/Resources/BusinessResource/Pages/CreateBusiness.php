<?php

namespace App\Filament\Resources\BusinessResource\Pages;

use App\Filament\Resources\BusinessResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBusiness extends CreateRecord
{
    protected static string $resource = BusinessResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['claim_by'] = auth()->id();
        $data['created_by'] = auth()->id();

        return $data;
    }
}
