<?php

namespace App\Filament\Resources\UpvoteResource\Pages;

use App\Filament\Resources\UpvoteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageUpvotes extends ManageRecords
{
    protected static string $resource = UpvoteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
