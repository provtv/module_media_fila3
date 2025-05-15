# Modulo Media

<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> ffd5433 (.)
=======
>>>>>>> Stashed changes
> **Collegamento globale:** Per le strategie generali e le best practices sulla risoluzione dei conflitti git, vedi [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md).

## Informazioni Generali
- **Nome**: `laraxot/module_media_fila3`
- **Descrizione**: Modulo dedicato alla gestione di immagini e video
- **Namespace**: `Modules\Media`
- **Repository**: https://github.com/laraxot/module_media_fila3.git

## Service Providers
1. `Modules\Media\Providers\MediaServiceProvider`
2. `Modules\Media\Providers\Filament\AdminPanelProvider`

## Struttura
```
app/
├── Filament/       # Componenti Filament
├── Http/           # Controllers e Middleware
├── Models/         # Modelli del dominio
├── Providers/      # Service Providers
└── Services/       # Servizi media
```

## Aggiornamenti Recenti

### Risoluzione Conflitti Git

Sono stati risolti importanti conflitti di merge in diversi file critici del modulo:

- **app/Actions/Image/Merge.php**: Risolti conflitti nelle importazioni e nella struttura del codice per la fusione di immagini
- **app/Actions/Video/ConvertVideoAction.php**: Risolti conflitti di formattazione e corretto l'utilizzo del metodo Storage::disk()->path()
- **app/Services/SubtitleService.php**: Risolti conflitti nel metodo `upateModel()`
- **app/View/Components/_components.json**: Mantenuta versione con componente `video-player`
- **app/Http/Livewire/_components.json**: Scelta formattazione più leggibile e strutturata
- **app/Console/Commands/_components.json**: Uniformata formattazione con gli altri file di componenti

La risoluzione ha puntato a mantenere la coerenza del codice, evitando duplicazioni e garantendo il corretto funzionamento delle funzionalità di gestione media e del sistema di registrazione componenti.

Per maggiori dettagli, consultare la [documentazione locale sulla risoluzione dei conflitti](./conflitti_merge_risolti.md) e la [documentazione globale](../../../../docs/git_conflict_resolution.md).
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
=======
Per maggiori dettagli, consultare il [Rapporto sulla Risoluzione dei Conflitti](/docs/risoluzione_conflitti_merge_update.md).


### Versione Incoming
=======
>>>>>>> Stashed changes

## Dipendenze
### Pacchetti Required
- PHP ^8.2
- `pbmedia/laravel-ffmpeg`: ^8.5
- `intervention/image`: *

### Moduli Required
- User
- Tenant
- UI
- Xot

## Database
### Factories
Namespace: `Modules\Media\Database\Factories`

### Seeders
Namespace: `Modules\Media\Database\Seeders`

### Tests
Namespace: `Modules\Media\Tests`

## Testing
Comandi disponibili:
```bash
composer test           # Esegue i test
composer test-coverage  # Genera report di copertura
composer analyse       # Analisi statica del codice
composer format        # Formatta il codice
```

## Funzionalità
- Gestione immagini
  - Upload
  - Ridimensionamento
  - Ottimizzazione
  - Watermark
- Gestione video
  - Conversione formati
  - Streaming
  - Thumbnails
- Integrazione con Filament
- Sistema di cache media

## Configurazione
### FFmpeg
- Richiede FFmpeg installato nel sistema
- Configurazione in `config/media.php`

### Intervention Image
- Configurazione driver (GD o Imagick)
- Ottimizzazione cache

## Best Practices
1. Seguire le convenzioni di naming Laravel
2. Documentare tutte le classi e i metodi pubblici
3. Mantenere la copertura dei test
4. Utilizzare il type hinting
5. Seguire i principi SOLID
6. Ottimizzare le risorse media
7. Implementare gestione cache

## Troubleshooting
### Problemi Comuni
1. **Errori FFmpeg**
   - Verificare installazione FFmpeg
   - Controllare permessi di esecuzione
   - Verificare supporto codec

2. **Problemi di Upload**
   - Controllare limiti PHP (upload_max_filesize, post_max_size)
   - Verificare permessi directory
   - Controllare configurazione storage

3. **Errori di Processamento**
   - Verificare memoria disponibile
   - Controllare log di sistema
   - Verificare supporto GD/Imagick

## Changelog
<<<<<<< Updated upstream
### Versione HEAD

Le modifiche vengono tracciate nel repository GitHub.
=======


>>>>>>> 5770259 (.)
## Changelog
Le modifiche vengono tracciate nel repository GitHub. 

## Changelog
Le modifiche vengono tracciate nel repository GitHub. 
aurmich/dev

### Versione Incoming

## Changelog
Le modifiche vengono tracciate nel repository GitHub.

### Versione Incoming

# Modulo Media
=======
Il modulo Media è responsabile della gestione di file multimediali all'interno dell'applicazione, supportando caricamento, manipolazione e visualizzazione di immagini e video.

## Funzionalità principali

- Caricamento di file multimediali
- Manipolazione di immagini (ridimensionamento, ritaglio, filigrane)
- Conversione di formati video
- Gestione temporanea di caricamenti
- Relazioni media polimorfiche con altri modelli
- Interfaccia amministrativa tramite Filament

## Requisiti

Il modulo Media dipende dai seguenti pacchetti esterni:

- **pbmedia/laravel-ffmpeg**: Necessario per la conversione e manipolazione di file video
  - Versione minima supportata: ^8.5
  - Namespace utilizzato: `ProtoneMedia\LaravelFFMpeg`
- **intervention/image**: Utilizzato per la manipolazione di immagini

## Struttura del modulo

```
Media/
├── app/                   # Codice principale del modulo
│   ├── Actions/           # Azioni per manipolazione media
│   │   ├── Image/         # Azioni per manipolazione immagini
│   │   └── Video/         # Azioni per elaborazione video (conversione)
│   ├── Filament/          # Interfaccia amministrativa Filament
│   ├── Models/            # Modelli Eloquent
│   └── Providers/         # Service Providers
├── config/                # Configurazione
├── database/              # Migrazioni e seeder
├── docs/                  # Documentazione
│   ├── phpstan/           # Analisi PHPStan e correzioni
│   └── ...
├── resources/             # Risorse (views, assets)
└── tests/                 # Test
```

## Configurazione PHPStan

Il modulo Media include una configurazione PHPStan specifica (`phpstan.neon`) che risolve potenziali problemi con dipendenze esterne, in particolare con il pacchetto `pbmedia/laravel-ffmpeg`. La configurazione:

- Include i file principali del pacchetto FFMpeg nella scansione
- Esclude cartelle non pertinenti come `vendor`, `tests` e `app_old`
- Configura parametri per una corretta analisi statica

Questa configurazione è particolarmente importante per l'analisi PHPStan, poiché risolve problemi di riconoscimento del namespace `ProtoneMedia\LaravelFFMpeg` utilizzato nel codice.

## Conversione video

La conversione video è gestita attraverso la classe `ConvertVideoAction` che utilizza il pacchetto FFMpeg. 

**Importante:** Sebbene il pacchetto sia referenziato come `pbmedia/laravel-ffmpeg` nel `composer.json`, il codice utilizza il namespace `ProtoneMedia\LaravelFFMpeg`. Questa è una peculiarità del pacchetto che mantiene il namespace originale per ragioni di compatibilità.

### Processo di conversione

1. Il video viene caricato tramite l'interfaccia Filament o programmaticamente
2. `ConvertVideoAction` apre il file utilizzando la libreria FFMpeg
3. Viene applicato il formato desiderato (per esempio X264 per MP4)
4. Il file viene salvato nella destinazione finale
5. I metadati della conversione vengono salvati nel database
**Approfondimento:** [Guida integrazione FFmpeg](ffmpeg_integration.md)

## Relazioni polimorfica

Il modulo implementa relazioni polimorche tramite il tratto `HasMedia`, che può essere utilizzato da qualsiasi modello che necessiti di allegare media. La relazione polimorfica permette di associare media a diversi tipi di entità (articoli, prodotti, utenti, etc.).

## Collegamenti

- [Documentazione PHPStan](phpstan/level_1.md) - Analisi e soluzioni per problemi PHPStan
- [Documentazione pacchetto Laravel FFMpeg](https://github.com/protonemedia/laravel-ffmpeg) - Documentazione ufficiale del pacchetto FFMpeg
- [Documentazione principale del progetto](../../../docs/phpstan_media_analisi.md) - Analisi PHPStan completa del modulo
>>>>>>> e876fa3 (.)

## Informazioni Generali
- **Nome**: `laraxot/module_media_fila3`
- **Descrizione**: Modulo dedicato alla gestione di immagini e video
- **Namespace**: `Modules\Media`
- **Repository**: https://github.com/laraxot/module_media_fila3.git

## Service Providers
1. `Modules\Media\Providers\MediaServiceProvider`
2. `Modules\Media\Providers\Filament\AdminPanelProvider`

## Struttura
```
app/
├── Filament/       # Componenti Filament
├── Http/           # Controllers e Middleware
├── Models/         # Modelli del dominio
├── Providers/      # Service Providers
└── Services/       # Servizi media
```
<<<<<<< HEAD
>>>>>>> 2f8e9ec (.)
=======
Per maggiori dettagli, consultare la [documentazione locale sulla risoluzione dei conflitti](./conflitti_merge_risolti.md) e la [documentazione globale](../../../../docs/git_conflict_resolution.md).
>>>>>>> Stashed changes
=======
>>>>>>> e876fa3 (.)
>>>>>>> ffd5433 (.)

## Dipendenze
### Pacchetti Required
- PHP ^8.2
- `pbmedia/laravel-ffmpeg`: ^8.5
- `intervention/image`: *

### Moduli Required
- User
- Tenant
- UI
- Xot

## Database
### Factories
Namespace: `Modules\Media\Database\Factories`

### Seeders
Namespace: `Modules\Media\Database\Seeders`

### Tests
Namespace: `Modules\Media\Tests`

## Testing
Comandi disponibili:
```bash
composer test           # Esegue i test
composer test-coverage  # Genera report di copertura
composer analyse       # Analisi statica del codice
composer format        # Formatta il codice
```

## Funzionalità
- Gestione immagini
  - Upload
  - Ridimensionamento
  - Ottimizzazione
  - Watermark
- Gestione video
  - Conversione formati
  - Streaming
  - Thumbnails
- Integrazione con Filament
- Sistema di cache media

## Configurazione
### FFmpeg
- Richiede FFmpeg installato nel sistema
- Configurazione in `config/media.php`

### Intervention Image
- Configurazione driver (GD o Imagick)
- Ottimizzazione cache

## Best Practices
1. Seguire le convenzioni di naming Laravel
2. Documentare tutte le classi e i metodi pubblici
3. Mantenere la copertura dei test
4. Utilizzare il type hinting
5. Seguire i principi SOLID
6. Ottimizzare le risorse media
7. Implementare gestione cache

## Troubleshooting
### Problemi Comuni
1. **Errori FFmpeg**
   - Verificare installazione FFmpeg
   - Controllare permessi di esecuzione
   - Verificare supporto codec

2. **Problemi di Upload**
   - Controllare limiti PHP (upload_max_filesize, post_max_size)
   - Verificare permessi directory
   - Controllare configurazione storage

3. **Errori di Processamento**
   - Verificare memoria disponibile
   - Controllare log di sistema
   - Verificare supporto GD/Imagick

<<<<<<< HEAD
## Changelog
Le modifiche vengono tracciate nel repository GitHub.

---

> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md).
<<<<<<< HEAD
=======
=======
Le modifiche vengono tracciate nel repository GitHub. 

---


=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
>>>>>>> 5770259 (.)
>>>>>>> 2f8e9ec (.)
=======
=======
>>>>>>> Stashed changes
Le modifiche vengono tracciate nel repository GitHub.

---

> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md).
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
## Analisi PHPStan
L'analisi statica del codice con PHPStan ha identificato diverse aree di miglioramento nel modulo:

### Principali problemi riscontrati
1. **Livello 1**: Problemi di ereditarietà in componenti Filament
   - Sovrascrittura di metodi `final`
   - Visibilità incoerente dei metodi
   - Metodi astratti non implementati
   
2. **Livello 10**: Problemi di typehinting e accesso a proprietà/metodi
   - Utilizzo non sicuro di variabili di tipo `mixed`
   - Accesso a proprietà senza controlli di tipo
   - Operazioni binarie su tipi non compatibili

### Report dettagliati
- [Analisi Livello 1](docs/phpstan/level_1.md)
- [Analisi Livello 10](docs/phpstan/level_10.md)

### Piano di miglioramento
1. Implementare type hinting rigoroso in tutte le classi
2. Correggere i problemi di ereditarietà nei componenti Filament
3. Implementare verifiche di tipo prima di operazioni su variabili mixed
4. Aggiungere documentazione PHPDoc completa
5. Migliorare la gestione degli errori

## Changelog
Le modifiche vengono tracciate nel repository GitHub. 
>>>>>>> e876fa3 (.)
>>>>>>> ffd5433 (.)
=======
>>>>>>> Stashed changes
