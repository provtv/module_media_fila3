<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\HasMediaResource\RelationManagers;

use Filament\Forms\Form;
use Filament\Tables\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\ActionGroup;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;

class MediaRelationManager extends XotBaseRelationManager
{
=======
=======
=======
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
=======
<<<<<<< HEAD
>>>>>>> 2f7c4db (.)
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
>>>>>>> 2a62ef4 (.)
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class MediaRelationManager extends XotBaseRelationManager
{
    

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06dadfb (.)
=======
=======
=======
=======
>>>>>>> fa4eb21 (.)
=======
>>>>>>> 2a62ef4 (.)
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\ActionGroup;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;

class MediaRelationManager extends XotBaseRelationManager
{
<<<<<<< HEAD
>>>>>>> 2f7c4db (.)
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
>>>>>>> 2a62ef4 (.)
    protected static string $relationship = 'media';

    protected static ?string $inverseRelationship = 'model';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getTableHeaderActions(): array
    {
        return [
            AddAttachmentAction::make(),
=======
=======
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
=======
>>>>>>> 2a62ef4 (.)
    

    

    /**
     * @return array<string, Action|ActionGroup>
     */
    /**
     * @return array<string, Action|ActionGroup>
     */
    public function getTableHeaderActions(): array
    {
        return [
            'add_attachment' => AddAttachmentAction::make(),
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06dadfb (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 2a62ef4 (.)




    protected function getTableHeaderActions(): array
    {
        return [
            AddAttachmentAction::make(),
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
<<<<<<< HEAD
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
=======
>>>>>>> fa4eb21 (.)
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
=======
>>>>>>> 2a62ef4 (.)
        ];
    }
}
