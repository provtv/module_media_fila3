# MediaRelationManager (Modulo Media)

Il `MediaRelationManager` è un componente specializzato del modulo Media per la gestione delle relazioni con i file multimediali, tipicamente tramite l'integrazione con [Spatie Media Library](https://spatie.be/docs/laravel-medialibrary/v10/introduction).

Questo `RelationManager` estende `Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager` e ne eredita tutte le funzionalità di base, incluse la gestione delle traduzioni, la configurazione di form e tabelle tramite `getFormSchema()` e `getCustomColumns()`, e le azioni standard.

**Per le linee guida complete sull'utilizzo e la personalizzazione dei `RelationManager` basati su `XotBaseRelationManager`, fare riferimento alla documentazione centrale:**
-   **[Linee Guida per RelationManager e Tabelle Personalizzate Xot in Filament](../../Xot/docs/filament_relationmanager_e_tabelle_xot.md)**

## Caratteristiche Specifiche di `MediaRelationManager`

-   **Integrazione con Spatie Media Library**: Progettato per lavorare con modelli che utilizzano il trait `HasMedia` di Spatie.
-   **Gestione Polimorfica**: Supporta la gestione polimorfica dei media.
-   **Upload Multipli**: Consente l'upload di più file contemporaneamente.

## Configurazione Principale

Nel tuo `RelationManager` che estende (o direttamente se usi `MediaRelationManager`):

```php
<?php

namespace Modules\YourModule\Filament\Resources\YourResource\RelationManagers;

use Modules\Media\Filament\Resources\HasMediaResource\RelationManagers\MediaRelationManager;

class CustomMediaRelationManager extends MediaRelationManager // O usi direttamente MediaRelationManager
{
    // Obbligatorio: Nome della relazione definita nel modello che usa HasMedia
    protected static string $relationship = 'media'; 

    // Opzionale: Nome della relazione inversa (dal media al modello proprietario)
    // protected static ?string $inverseRelationship = 'model'; 

    // Opzionale: Titolo del Relation Manager (verrà tradotto se la chiave esiste)
    // protected static ?string $title = 'media::messages.media_manager_title';

    // Opzionale: Attributo del modello Media da usare come titolo del record
    // protected static ?string $recordTitleAttribute = 'file_name'; 
}
```

## Azioni Disponibili

### Azioni Intestate Tabella (Header Actions)

-   `AddAttachmentAction`: Un'azione preconfigurata per aggiungere nuovi allegati.
    -   Apre una modale per l'upload dei file.
    -   Gestisce l'associazione dei media al modello corrente.

## Utilizzo Base

Per aggiungere il `MediaRelationManager` a una tua Risorsa Filament:

```php
<?php

namespace Modules\YourModule\Filament\Resources;

use Filament\Resources\Resource;
use Modules\Media\Filament\Resources\HasMediaResource\RelationManagers\MediaRelationManager;

class YourResource extends Resource // Idealmente estende XotBaseResource
{
    // ... altre configurazioni della risorsa

    public static function getRelations(): array
    {
        return [
            MediaRelationManager::class,
            // o la tua classe CustomMediaRelationManager se estesa
        ];
    }

    // ...
}
```
Assicurati che la Risorsa (`YourResource`) e il modello associato siano configurati correttamente per utilizzare Spatie Media Library.

## Personalizzazione

È possibile estendere `MediaRelationManager` per aggiungere funzionalità o modificare il comportamento esistente:

```php
<?php

namespace Modules\YourModule\Filament\Resources\YourResource\RelationManagers;

use Modules\Media\Filament\Resources\HasMediaResource\RelationManagers\MediaRelationManager;
use Filament\Tables\Actions\Action; // Esempio

class MyCustomMediaRelationManager extends MediaRelationManager
{
    protected static string $relationship = 'my_media_collection'; // Esempio se usi una collezione specifica

    // Override di getFormSchema per personalizzare i campi per l'upload
    public function getFormSchema(): array
    {
        $schema = parent::getFormSchema(); // Prende lo schema base per l'upload
        // Aggiungi o modifica campi qui, ad esempio per custom properties di Spatie
        // $schema[] = \Filament\Forms\Components\TextInput::make('custom_properties.alt_text');
        return $schema;
    }

    // Override di getCustomColumns per cambiare le colonne visualizzate
    protected function getCustomColumns(): array
    {
        $columns = parent::getCustomColumns(); // Prende le colonne base (es. anteprima, nome file)
        // Aggiungi o modifica colonne qui
        // $columns[] = \Filament\Tables\Columns\TextColumn::make('mime_type');
        return $columns;
    }
    
    // Esempio di aggiunta di un'azione personalizzata
    public function getTableActions(): array // Per azioni su singola riga
    {
        return array_merge(
            parent::getTableActions(), // Mantiene le azioni di XotBaseRelationManager (view, edit, delete etc.)
            [
                Action::make('custom_media_action')
                    ->label('Azione Media Custom')
                    ->action(function ($record) {
                        // Logica per l'azione custom sul record media
                    }),
            ]
        );
    }
}
```

### Punti Chiave per la Personalizzazione:

1.  **Estendi `MediaRelationManager`**: Crea la tua classe che estende `Modules\Media\Filament\Resources\HasMediaResource\RelationManagers\MediaRelationManager`.
2.  **Override Metodi**: Sovrascrivi metodi come `getFormSchema()`, `getCustomColumns()`, `getTableHeaderActions()`, `getTableActions()`, `getTableBulkActions()` secondo necessità.
3.  **Consulta `XotBaseRelationManager`**: Molte funzionalità sono ereditate da `XotBaseRelationManager` e dal trait `HasXotTable`. Fai riferimento alla [documentazione Xot](../../Xot/docs/filament_relationmanager_e_tabelle_xot.md) per dettagli su questi metodi.
4.  **Traduzioni**: Utilizza sempre il sistema di traduzione per etichette e messaggi, come descritto nella documentazione Xot.

## Note Importanti
- Assicurarsi che il modello associato alla risorsa utilizzi correttamente il trait `Spatie\MediaLibrary\HasMedia` e implementi `Spatie\MediaLibrary\HasMedia\HasMedia`.
- Le convenzioni di Laraxot e Xot per le traduzioni e la configurazione dei componenti Filament si applicano pienamente.
