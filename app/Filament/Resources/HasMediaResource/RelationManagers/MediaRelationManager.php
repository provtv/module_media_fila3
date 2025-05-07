<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\HasMediaResource\RelationManagers;

use Filament\Forms\Form;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Media\Filament\Resources\MediaResource;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class MediaRelationManager extends XotBaseRelationManager
{
    

=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

<<<<<<< HEAD
/**
 * Class MediaRelationManager
 * 
 * Gestisce le relazioni media nel sistema Filament seguendo le convenzioni Laraxot.
 */
=======
>>>>>>> origin/dev
class MediaRelationManager extends XotBaseRelationManager
{
>>>>>>> 83f472a (.)
    protected static string $relationship = 'media';

    protected static ?string $inverseRelationship = 'model';

<<<<<<< HEAD
    

    

    /**
=======
    /**
<<<<<<< HEAD
     * Restituisce le azioni dell'header della tabella.
     * 
=======
>>>>>>> origin/dev
>>>>>>> 83f472a (.)
     * @return array<string, Action|ActionGroup>
     */
    public function getTableHeaderActions(): array
    {
        return [
            'add_attachment' => AddAttachmentAction::make(),
        ];
    }
}
