<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\HasMediaResource\RelationManagers;

use Filament\Forms\Form;
use Filament\Tables\Actions\Action;
<<<<<<< HEAD
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
=======
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\ActionGroup;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
>>>>>>> 184c6ec (.)

class MediaRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'media';

    protected static ?string $inverseRelationship = 'model';

<<<<<<< HEAD
    /**
     * @return array<string, Action|ActionGroup>
     */
    public function getTableHeaderActions(): array
    {
        return [
            'add_attachment' => AddAttachmentAction::make(),
=======




    protected function getTableHeaderActions(): array
    {
        return [
            AddAttachmentAction::make(),
>>>>>>> 184c6ec (.)
        ];
    }
}
