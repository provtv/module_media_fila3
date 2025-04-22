<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\HasMediaResource\RelationManagers;

use Filament\Forms\Form;
use Filament\Tables\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2f7c4db (.)
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD

class MediaRelationManager extends XotBaseRelationManager
{
    

=======
=======
=======
>>>>>>> fa4eb21 (.)
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\ActionGroup;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;

class MediaRelationManager extends XotBaseRelationManager
{
>>>>>>> 2f7c4db (.)
    protected static string $relationship = 'media';

    protected static ?string $inverseRelationship = 'model';

<<<<<<< HEAD
<<<<<<< HEAD
    

    

=======
>>>>>>> 2f7c4db (.)
<<<<<<< HEAD
    /**
     * @return array<string, Action|ActionGroup>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * @return array<string, Action|ActionGroup>
     */
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
>>>>>>> 2f7c4db (.)
    public function getTableHeaderActions(): array
    {
        return [
            'add_attachment' => AddAttachmentAction::make(),
<<<<<<< HEAD
=======
=======




=======
>>>>>>> fa4eb21 (.)
    protected function getTableHeaderActions(): array
    {
        return [
            AddAttachmentAction::make(),
<<<<<<< HEAD
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
=======
>>>>>>> fa4eb21 (.)
        ];
    }
}
