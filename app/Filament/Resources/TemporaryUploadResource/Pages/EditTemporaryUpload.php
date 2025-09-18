<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\TemporaryUploadResource\Pages;

use Filament\Actions\DeleteAction;
use Modules\Media\Filament\Resources\TemporaryUploadResource;

class EditTemporaryUpload extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = TemporaryUploadResource::class;

    /**
     * @return DeleteAction[]
     *
     * @psalm-return list{DeleteAction}
     */
    protected function getHeaderActions(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<string, \Filament\Actions\Action> */
=======
>>>>>>> b94526c9b (.)
=======
>>>>>>> d9766aa8a (.)
        return [
            DeleteAction::make(),
        ];
    }
}
