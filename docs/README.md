# Modulo Media

## Panoramica
Il modulo Media gestisce tutti i file multimediali dell'applicazione, fornendo un sistema centralizzato per l'upload, la gestione e la distribuzione di immagini, video, documenti e altri file. Si integra con tutti gli altri moduli per garantire una gestione efficiente dei media.

## Collegamenti Principali

### Documentazione Core
- [Struttura del Modulo](structure.md)
- [Gestione File](files.md)
- [Conversioni](conversions.md)
- [Storage](storage.md)
- [Best Practices](BEST-PRACTICES.md)

### Integrazioni
- [Integrazione con User](../User/docs/README.md)
- [Integrazione con Xot](../Xot/docs/README.md)
- [Integrazione con Lang](../Lang/docs/README.md)

### Best Practices
- [Convenzioni Media](media-conventions.md)
- [Gestione Storage](storage-management.md)
- [PHPStan Fixes](phpstan-fixes.md)

### Testing e Qualità
- [PHPStan Level 9](PHPSTAN_LEVEL9_FIXES.md)
- [PHPStan Level 10](PHPSTAN_LEVEL10_FIXES.md)
- [Testing Best Practices](testing-best-practices.md)

## Struttura del Modulo

```
Modules/Media/
├── app/
│   ├── Models/
│   │   ├── Media.php
│   │   └── MediaConversion.php
│   ├── Providers/
│   │   ├── MediaServiceProvider.php
│   │   └── MediaBaseServiceProvider.php
│   ├── Filament/
│   │   ├── Resources/
│   │   │   └── MediaResource.php
│   │   ├── Widgets/
│   │   │   └── MediaStatsWidget.php
│   │   └── Pages/
│   │       └── MediaManager.php
│   └── Http/
│       └── Controllers/
│           └── MediaController.php
├── config/
│   └── media.php
├── database/
│   └── migrations/
│       ├── create_media_table.php
│       └── create_media_conversions_table.php
└── resources/
    └── views/
        └── media/
            ├── upload.blade.php
            └── manager.blade.php
```

## Gestione Media

### 1. Modello Media
```php
// app/Models/Media.php
namespace App\Models;

use Modules\Media\Models\XotBaseMedia;
use Modules\Lang\Facades\Lang;

class Media extends XotBaseMedia
{
    protected $fillable = [
        'name',
        'file_name',
        'mime_type',
        'size',
        'disk',
        'conversions'
    ];

    protected $casts = [
        'conversions' => 'array'
    ];

    public function getDisplayNameAttribute(): string
    {
        return Lang::get('media.name', ['name' => $this->name]);
    }
}
```

### 2. Trait HasMedia
```php
// ❌ NON FARE QUESTO
class User extends Model
{
    public function avatar()
    {
        return $this->hasOne(Media::class);
    }
}

// ✅ FARE QUESTO
use Modules\Media\Traits\HasMedia;

class User extends XotBaseModel
{
    use HasMedia;

    protected $fillable = [
        'name',
        'email'
    ];
}
```

### 3. Utilizzo in Filament
```php
// ❌ NON FARE QUESTO
use Filament\Forms\Components\FileUpload;

FileUpload::make('avatar')
    ->label('Avatar')

// ✅ FARE QUESTO
use Modules\Media\Filament\Components\XotBaseFileUpload;

XotBaseFileUpload::make('avatar')
    ->label(['label' => 'Avatar'])
```

## Best Practices

### 1. Upload
- Validare i file
- Generare nomi unici
- Gestire le conversioni
- Ottimizzare le immagini

### 2. Storage
```php
// ❌ NON FARE QUESTO
Storage::disk('public')->put($path, $file);

// ✅ FARE QUESTO
Media::upload($file, [
    'disk' => 'public',
    'conversions' => [
        'thumb' => [
            'width' => 100,
            'height' => 100
        ]
    ]
]);
```

### 3. Conversioni
```php
// ❌ NON FARE QUESTO
$image->resize(100, 100);

// ✅ FARE QUESTO
$media->convert('thumb', [
    'width' => 100,
    'height' => 100,
    'fit' => 'crop'
]);
```

## Dipendenze Principali

### Moduli
- **User**: Media utente
- **Xot**: Media base
- **Lang**: Traduzioni media

### Pacchetti
- Laravel Framework
- Filament
- Livewire
- Spatie Media Library

## Roadmap

### Prossime Feature
1. Nuovi tipi media
2. Miglioramento conversioni
3. Ottimizzazione storage

### Miglioramenti Pianificati
1. Refactoring media
2. Miglioramento UI
3. Ottimizzazione performance

## Contribuire

### Setup Sviluppo
1. Clona il repository
2. Installa le dipendenze
3. Configura l'ambiente
4. Esegui i test

### Convenzioni di Codice
- Seguire PSR-12
- Utilizzare type hints
- Documentare il codice
- Scrivere test unitari

### Processo di Pull Request
1. Crea un branch feature
2. Implementa le modifiche
3. Aggiungi i test
4. Aggiorna la documentazione
5. Crea la PR

## Troubleshooting

### Problemi Comuni
1. Upload fallito
2. Conversioni non funzionanti
3. Errori storage

### Soluzioni
1. Verifica configurazione
2. Controlla log
3. Consulta documentazione

## Riferimenti

### Documentazione
- [Laravel Storage](https://laravel.com/docs/12.x/filesystem)
- [Filament](https://filamentphp.com/docs)
- [Spatie Media Library](https://spatie.be/docs/laravel-medialibrary)

### Collegamenti Interni
- [User Module](../User/docs/README.md)
- [Xot Module](../Xot/docs/README.md)
- [Lang Module](../Lang/docs/README.md)

## Changelog

### [1.0.0] - 2024-03-20
#### Added
- Implementazione iniziale
- Sistema media
- Conversioni base
- Storage manager

#### Changed
- Miglioramento performance
- Ottimizzazione storage
- Refactoring codice

#### Fixed
- Bug upload
- Problemi conversioni
- Errori storage 