<?php

namespace App\Filament\Resources\ShoesResource\Pages;

use App\Filament\Resources\ShoesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShoes extends EditRecord
{
    protected static string $resource = ShoesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
