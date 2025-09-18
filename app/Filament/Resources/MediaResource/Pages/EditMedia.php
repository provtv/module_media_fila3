<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

use Filament\Actions\DeleteAction;
use Modules\Media\Filament\Resources\MediaResource;

class EditMedia extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = MediaResource::class;

    /**
     * @return DeleteAction[]
     *
     * @psalm-return list{DeleteAction}
     */
    protected function getHeaderActions(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<string, \Filament\Actions\Action> */
=======
>>>>>>> b94526c9b (.)
=======
>>>>>>> d9766aa8a (.)
=======
>>>>>>> 6b7c164a6 (.)
        return [
            DeleteAction::make(),
        ];
    }
}
