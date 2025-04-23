<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\HasMediaResource\RelationManagers;

use Filament\Forms\Form;
use Filament\Tables\Actions\Action;
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
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class MediaRelationManager extends XotBaseRelationManager
{
    

>>>>>>> 06dadfb (.)
    protected static string $relationship = 'media';

    protected static ?string $inverseRelationship = 'model';

<<<<<<< HEAD
    protected function getTableHeaderActions(): array
    {
        return [
            AddAttachmentAction::make(),
=======
    

    

<<<<<<< HEAD
    /**
     * @return array<string, Action|ActionGroup>
     */
=======
<<<<<<< HEAD
    /**
     * @return array<string, Action|ActionGroup>
     */
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
    public function getTableHeaderActions(): array
    {
        return [
            'add_attachment' => AddAttachmentAction::make(),
>>>>>>> 06dadfb (.)
        ];
    }
}
