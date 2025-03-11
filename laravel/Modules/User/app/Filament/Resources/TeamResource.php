<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

use Filament\Forms\Components\TextInput;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Filament\Resources\XotBaseResource;

class TeamResource extends XotBaseResource
{
    public static function getModel(): string
    {
        $xot = XotData::make();

        return $xot->getTeamClass();
    }

    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required()
                ->maxLength(255),
            TextInput::make('display_name')
                ->maxLength(255),
            TextInput::make('description')
                ->maxLength(255),
        ];
    }
}
