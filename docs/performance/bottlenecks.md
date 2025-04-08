<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Performance Bottlenecks Analysis

## Query Bottlenecks

### 1. Elaborazione Risposte nei Grafici
In `GetAnswersByQuestionChart::execute()`:

```php
// Problemi identificati:
- Query non ottimizzate su grandi dataset di risposte
- Mancanza di caching per risultati frequentemente richiesti
- Join multipli per recuperare dati correlati
```

**Soluzioni proposte:**
1. Implementare caching strategico:
   - Cache per risultati aggregati
   - Cache per query frequenti
   - Invalidazione cache intelligente

2. Ottimizzare query:
   - Utilizzare indici appropriati
   - Ridurre il numero di join
   - Implementare query chunks per grandi dataset

### 2. Filtri Dinamici
In `GetPieceQueryBySurveyIdAction::execute()`:

```php
// Problemi identificati:
- Costruzione dinamica di query complesse
- Filtri multipli che impattano le performance
- Mancanza di limiti nelle query
```

**Soluzioni proposte:**
1. Ottimizzare la costruzione delle query:
   - Utilizzare query builder più efficienti
   - Implementare limiti di paginazione
   - Creare indici per i campi di filtro comuni

2. Implementare caching per filtri comuni:
   - Cache dei risultati dei filtri più utilizzati
   - Invalidazione selettiva del cache

## Memory Bottlenecks

### 1. Elaborazione Dati dei Grafici
In `GetChartsDataByQuestionChart::doExecute()`:

```php
// Problemi identificati:
- Caricamento di grandi set di dati in memoria
- Trasformazione dati inefficiente
- Mancanza di gestione memoria per dataset grandi
```

**Soluzioni proposte:**
1. Implementare elaborazione a chunk:
   - Processare i dati in batch
   - Utilizzare generatori per grandi dataset
   - Implementare streaming di dati dove possibile

2. Ottimizzare strutture dati:
   - Ridurre duplicazione dati
   - Utilizzare tipi di dati più efficienti
   - Implementare garbage collection esplicito

### 2. Export Dati
In `AnswersCompleteExport`:

```php
// Problemi identificati:
- Export di grandi dataset in memoria
- Trasformazioni dati inefficienti
- Mancanza di progress tracking
```

**Soluzioni proposte:**
1. Implementare export incrementale:
   - Utilizzare queued exports
   - Implementare streaming per file grandi
   - Aggiungere progress tracking

2. Ottimizzare formato export:
   - Compressione dati
   - Format ottimizzati per grandi dataset
   - Export selettivo dei campi

## Concurrency Bottlenecks

### 1. Elaborazione Parallela
```php
// Problemi identificati:
- Operazioni sequenziali dove possibile parallelismo
- Lock non necessari su risorse condivise
- Mancanza di job queuing per operazioni pesanti
```

**Soluzioni proposte:**
1. Implementare elaborazione parallela:
   - Utilizzare job queue per operazioni pesanti
   - Implementare batch processing
   - Ottimizzare lock su risorse condivise

2. Migliorare gestione concorrenza:
   - Implementare locking ottimistico
   - Utilizzare cache distribuito
   - Aggiungere rate limiting dove necessario

## Frontend Bottlenecks

### 1. Rendering Grafici
In `QuestionCharts` Livewire component:

```php
// Problemi identificati:
- Caricamento dati non ottimizzato
- Rendering inefficiente di grandi dataset
- Mancanza di lazy loading
```

**Soluzioni proposte:**
1. Ottimizzare caricamento dati:
   - Implementare lazy loading
   - Utilizzare paginazione infinita
   - Caching lato client

2. Migliorare rendering:
   - Utilizzare virtual scrolling
   - Implementare rendering progressivo
   - Ottimizzare aggiornamenti DOM

## Monitoring e Profiling

### Strumenti Raccomandati
1. Query Monitoring:
   - Laravel Telescope per debug query
   - Query logging per identificare N+1 problems
   - Index Analyzer per ottimizzazione indici

2. Performance Profiling:
   - Xdebug per profiling PHP
   - Laravel Debug Bar per analisi runtime
   - Memory profiling per leak detection

### Metriche da Monitorare
1. Query Performance:
   - Tempo esecuzione query
   - Numero di query per request
   - Query cache hit rate

2. Memory Usage:
   - Peak memory usage
   - Memory growth over time
   - Garbage collection stats

3. Response Times:
   - Average response time
   - 95th percentile latency
   - Time to first byte

## Raccomandazioni Immediate

1. Implementazione Cache:
```php
// Esempio implementazione cache
public function execute(QuestionChart $q, ?AnswersFilterData $filter = null): array
{
    $cacheKey = $this->generateCacheKey($q, $filter);
    return Cache::remember($cacheKey, now()->addHours(1), function () use ($q, $filter) {
        return $this->doExecute($q, $filter);
    });
}
```

2. Query Optimization:
```php
// Esempio ottimizzazione query
public function getAnswers()
{
    return $this->query
        ->select(['id', 'question_id', 'answer']) // Select specifici
        ->with(['question:id,title']) // Eager loading ottimizzato
        ->chunk(1000, function ($answers) {
            // Process in chunks
        });
}
```

3. Memory Management:
```php
// Esempio gestione memoria
public function exportData()
{
    return LazyCollection::make(function () {
        // Yield results instead of loading all in memory
        yield from $this->getResults();
    })->chunk(1000);
}
```
=======
# Job Module Performance Bottlenecks

## Queue Management

### 1. Job Dispatching
File: `app/Services/JobDispatchService.php`

**Bottlenecks:**
- Dispatching non ottimizzato
- Code non bilanciate
- Priorità non gestite

**Soluzioni:**
```php
// 1. Dispatch intelligente
public function dispatchJob($job) {
    return $job->onQueue(
            $this->determineOptimalQueue($job)
        )->delay(
            $this->calculateDelay($job)
        );
}

// 2. Queue balancing
protected function balanceQueues() {
    return $this->queues
        ->sortByDesc('load')
        ->each(fn($queue) => 
            $this->redistributeJobs($queue)
=======
# Media Module Performance Bottlenecks

## File Upload and Processing

### 1. File Upload Management
File: `app/Services/FileUploadService.php`

**Bottlenecks:**
- Upload sincrono di file grandi
- Processamento immagini bloccante
- Memoria eccessiva durante upload multipli

**Soluzioni:**
```php
// 1. Upload asincrono
class ProcessMediaJob implements ShouldQueue {
    public function handle() {
        return Bus::chain([
            new ValidateMediaJob($this->file),
            new ProcessMediaJob($this->file),
            new OptimizeMediaJob($this->file),
        ])->dispatch();
    }
}

// 2. Chunked upload
public function handleChunkedUpload($file) {
    return $file->chunks(1024 * 1024)
        ->each(fn($chunk) => 
            $this->processChunk($chunk)
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
# GDPR Module Performance Bottlenecks

## Data Management

### 1. Personal Data Processing
File: `app/Services/PersonalDataService.php`

**Bottlenecks:**
- Scansione dati sincrona
- Query non ottimizzate per dati personali
- Export dati bloccante

**Soluzioni:**
```php
// 1. Scansione asincrona
class ScanPersonalDataJob implements ShouldQueue {
    public function handle() {
        return $this->tables
            ->chunk(10)
            ->each(fn($chunk) => 
                $this->scanTablesForPII($chunk)
            );
    }
}

// 2. Query ottimizzate
protected function findPersonalData($user) {
    return DB::tables($this->gdprTables)
        ->lazyById(1000)
        ->through(fn($record) => 
            $this->extractPersonalData($record)
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
        );
}
```

<<<<<<< HEAD
<<<<<<< HEAD
### 2. Job Processing
File: `app/Services/JobProcessingService.php`

**Bottlenecks:**
- Processing sincrono
- Memoria eccessiva
- Retry logic non ottimizzata
=======
### 2. Image Processing
File: `app/Services/ImageProcessingService.php`

**Bottlenecks:**
- Resize sincrono delle immagini
- Memoria insufficiente per immagini grandi
- Operazioni I/O bloccanti
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)

**Soluzioni:**
```php
// 1. Processing ottimizzato
<<<<<<< HEAD
class BatchJobProcessor implements ShouldQueue {
    public function handle() {
        return $this->jobs
            ->chunk(100)
            ->each(fn($chunk) => 
                $this->processJobChunk($chunk)
            );
    }
}

// 2. Retry intelligente
protected function handleFailedJob($job) {
    return retry(3, function() use ($job) {
        return $this->processJob($job);
    }, $this->calculateBackoff($job));
}
```

## Job Monitoring

### 1. Job Tracking
File: `app/Services/JobTrackingService.php`

**Bottlenecks:**
- Tracking continuo
- Storage inefficiente
- Query non ottimizzate

**Soluzioni:**
```php
// 1. Tracking ottimizzato
public function trackJob($job) {
    return Cache::tags(['job_tracking'])
        ->remember("job_{$job->id}", 
            now()->addMinutes(30),
            fn() => $this->getJobStatus($job)
        );
}

// 2. Storage efficiente
protected function storeJobMetrics($metrics) {
    return DB::table('job_metrics')
        ->insertOrIgnore(
            collect($metrics)
                ->chunk(100)
                ->all()
        );
}
```

## Failed Jobs

### 1. Failed Job Handling
File: `app/Services/FailedJobService.php`

**Bottlenecks:**
- Retry sincrono
- Cleanup non ottimizzato
- Notifiche bloccanti

**Soluzioni:**
```php
// 1. Retry asincrono
public function retryFailedJobs() {
    return DB::table('failed_jobs')
        ->lazyById(1000)
        ->through(fn($job) => 
            $this->queueJobRetry($job)
        );
}

// 2. Cleanup efficiente
protected function cleanupOldJobs() {
    return DB::table('failed_jobs')
        ->where('failed_at', '<', now()->subDays(7))
        ->lazyById(1000)
        ->each(fn($job) => 
            $this->removeJob($job)
        );
=======
public function processImage($image) {
    return Cache::remember(
        "image_process_{$image->id}",
        now()->addHour(),
        fn() => $this->optimizeImage($image)
=======
# Lang Module Performance Bottlenecks

## Translation Management

### 1. AutoLabelAction
File: `app/Actions/Filament/AutoLabelAction.php`

**Bottlenecks:**
- Generazione ripetitiva di chiavi di traduzione
- Lookup inefficiente nei file di traduzione
- Cache non utilizzato per chiavi frequenti

**Soluzioni:**
```php
// 1. Cache per chiavi frequenti
public function execute($object_class) {
    $cacheKey = "translation_key_".md5($object_class);
    return Cache::tags(['translations'])
        ->remember($cacheKey, now()->addDay(), 
            fn() => $this->generateTransKey($object_class)
        );
}

// 2. Ottimizzare lookup
protected function findTranslation($key) {
    return LazyCollection::make(function() {
        yield from $this->getTranslationFiles();
    })->first(fn($file) => 
        isset($file[$key])
    );
}
```

### 2. Translation Loading
File: `app/Services/TranslationLoaderService.php`

**Bottlenecks:**
- Caricamento di tutte le traduzioni in memoria
- File scanning inefficiente
- Nessuna cache per file di traduzione

**Soluzioni:**
```php
// 1. Lazy loading traduzioni
public function loadTranslations($locale) {
    return new LazyCollection(function() use ($locale) {
        yield from $this->scanTranslationFiles($locale);
    });
}

// 2. Cache file traduzioni
protected function getTranslationFile($locale, $group) {
    $cacheKey = "trans_{$locale}_{$group}";
    return Cache::remember($cacheKey, now()->addHour(), 
        fn() => $this->loadTranslationFile($locale, $group)
    );
}
```

## Filament Integration

### 1. Label Generation
File: `app/Services/FilamentLabelService.php`

**Bottlenecks:**
- Generazione label per ogni campo
- Lookup ripetitivo nelle traduzioni
- Nessuna cache per label comuni

**Soluzioni:**
```php
// 1. Cache per label comuni
public function generateLabel($field, $resource) {
    $cacheKey = "label_{$resource}_{$field}";
    return Cache::tags(['filament_labels'])
        ->remember($cacheKey, now()->addHour(), 
            fn() => $this->buildLabel($field, $resource)
        );
}

// 2. Batch label generation
public function generateLabels($fields, $resource) {
    return collect($fields)
        ->mapWithKeys(fn($field) => [
            $field => $this->generateLabel($field, $resource)
        ])
        ->filter();
}
```

## Translation File Management

### 1. File Operations
File: `app/Services/TranslationFileService.php`

**Bottlenecks:**
- I/O sincrono per operazioni file
- Parsing inefficiente dei file
- Nessun controllo concorrenza

**Soluzioni:**
```php
// 1. Operazioni file ottimizzate
public function writeTranslations($locale, $group, $translations) {
    return DB::transaction(function() use ($locale, $group, $translations) {
        $this->acquireLock("trans_{$locale}_{$group}");
        $this->writeTranslationFile($locale, $group, $translations);
        $this->releaseLock("trans_{$locale}_{$group}");
    });
}

// 2. Parsing efficiente
protected function parseTranslationFile($content) {
    return Cache::remember(
        "parse_".md5($content),
        now()->addMinutes(30),
        fn() => $this->doParseFile($content)
    );
}
```

## Memory Management

### 1. Translation Registry
File: `app/Services/TranslationRegistryService.php`

**Bottlenecks:**
- Memoria eccessiva per registry completo
- Caricamento non necessario di traduzioni
- Gestione inefficiente delle varianti

**Soluzioni:**
```php
// 1. Registry ottimizzato
public function registerTranslations() {
    return LazyCollection::make(function() {
        yield from $this->getTranslationPaths();
    })->each(fn($path) => 
        $this->registerPath($path)
>>>>>>> c1120baae0 (Squashed 'laravel/Modules/Lang/' content from commit 693742e073)
    );
}

// 2. Gestione memoria efficiente
<<<<<<< HEAD
protected function optimizeImage($image) {
    return Image::make($image->path)
        ->batch(function($image) {
            $image->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image->optimize();
        });
}
```

## Storage Management

### 1. File Storage
File: `app/Services/StorageService.php`

**Bottlenecks:**
- Operazioni disco sincrone
- Nessuna gestione cache per file frequenti
- Duplicazione storage non necessaria

**Soluzioni:**
```php
// 1. Storage ottimizzato
public function storeFile($file) {
    return retry(3, function() use ($file) {
        return Storage::disk('public')
            ->putFileAs(
                $this->getPath($file),
                $file,
                $this->generateFileName($file)
=======
### 2. Data Anonymization
File: `app/Services/AnonymizationService.php`

**Bottlenecks:**
- Anonymization sincrona
- Processo non reversibile
- Lock durante anonymization

**Soluzioni:**
```php
// 1. Anonymization asincrona
public function anonymizeData($user) {
    return DB::transaction(function() use ($user) {
        return $this->personalData($user)
            ->chunk(100)
            ->each(fn($chunk) => 
                $this->queueAnonymization($chunk)
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
            );
    });
}

<<<<<<< HEAD
// 2. Cache per file frequenti
public function serveFile($path) {
    return Cache::remember(
        "file_serve_{$path}",
        now()->addMinutes(30),
        fn() => $this->getOptimizedFile($path)
=======
// 2. Processo ottimizzato
protected function performAnonymization($data) {
    return parallel()->map($data, function($item) {
        return $this->anonymizeItem($item);
    });
}
```

## Consent Management

### 1. Consent Tracking
File: `app/Services/ConsentService.php`

**Bottlenecks:**
- Validazione consenso sincrona
- Cache non utilizzato per preferenze
- Query ripetitive

**Soluzioni:**
```php
// 1. Consent caching
public function getUserConsent($user) {
    return Cache::tags(['consent'])
        ->remember("consent_{$user->id}", 
            now()->addHour(),
            fn() => $this->fetchUserConsent($user)
        );
}

// 2. Validazione ottimizzata
protected function validateConsent($consent) {
    return Cache::remember(
        "validation_".md5(json_encode($consent)),
        now()->addMinutes(5),
        fn() => $this->performValidation($consent)
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
    );
}
```

<<<<<<< HEAD
## Media Library Management

### 1. Media Collections
File: `app/Services/MediaLibraryService.php`

**Bottlenecks:**
- Query non ottimizzate per collezioni grandi
- Caricamento eager non necessario
- Cache non utilizzato per metadati

**Soluzioni:**
```php
// 1. Query ottimizzate
public function getMediaCollection($model) {
    return $model->media()
        ->select(['id', 'file_name', 'size'])
        ->lazyById(1000)
        ->remember()
        ->each(fn($media) => 
            $this->processMedia($media)
        );
}

// 2. Cache metadati
protected function getMediaMetadata($media) {
    return Cache::tags(['media_metadata'])
        ->remember("metadata_{$media->id}", 
            now()->addHour(),
            fn() => $this->generateMetadata($media)
        );
}
```

## Conversions and Transformations

### 1. Media Conversions
File: `app/Services/ConversionService.php`

**Bottlenecks:**
- Conversioni sincrone bloccanti
- Memoria eccessiva durante conversioni multiple
- Nessun retry per fallimenti

**Soluzioni:**
```php
// 1. Conversioni asincrone
class MediaConversionJob implements ShouldQueue {
    public function handle() {
        return $this->media
            ->conversion($this->conversion)
            ->nonQueued()
            ->withResponsiveImages()
            ->performOnQueue('media');
    }
}

// 2. Gestione errori
protected function handleConversion($media) {
    return retry(3, function() use ($media) {
        return $this->performConversion($media);
    }, 100);
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
## Data Export

### 1. Export Processing
File: `app/Services/DataExportService.php`

**Bottlenecks:**
- Export sincrono di dati grandi
- Memoria insufficiente per export completi
- Nessun feedback progresso

**Soluzioni:**
```php
// 1. Export asincrono
class QueuedDataExport implements ShouldQueue {
    public function handle() {
        return (new GdprExport($this->userId))
            ->chunk(1000)
            ->queue("exports/user_{$this->userId}.zip");
    }
}

// 2. Export ottimizzato
protected function exportUserData($user) {
    return LazyCollection::make(function() use ($user) {
        yield from $this->getUserData($user);
    })->through(fn($data) => 
        $this->formatForExport($data)
    );
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
}
=======
protected function loadTranslations($path) {
    return new LazyCollection(function() use ($path) {
        $handle = fopen($path, 'r');
        while (($line = fgets($handle)) !== false) {
            yield $this->parseLine($line);
        }
        fclose($handle);
    });
}
>>>>>>> c1120baae0 (Squashed 'laravel/Modules/Lang/' content from commit 693742e073)
```

## Monitoring Recommendations

### 1. Performance Metrics
Monitorare:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Queue length
- Processing time
- Failure rate
- Memory usage

### 2. Alerting
Alert per:
- Queue backup
- High failure rate
- Memory issues
- Stuck jobs

### 3. Logging
Implementare:
- Job logging
- Error tracking
- Performance profiling
- Queue monitoring
=======
- Tempo di upload
- Tempo di processing
- Utilizzo storage
=======
- Tempo scansione dati
- Export completion time
- Anonymization speed
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
- Cache hit ratio

### 2. Alerting
Alert per:
<<<<<<< HEAD
- Upload falliti
- Conversioni fallite
- Storage pieno
- Errori processing

### 3. Logging
Implementare:
- Access logging
- Error tracking
- Performance profiling
- Storage statistics
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
- Export failures
- Consent issues
- Data breaches
- Processing errors

### 3. Logging
Implementare:
- Compliance logging
- Error tracking
- Access logging
- Processing audit
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
=======
- Tempo di generazione label
- Cache hit ratio
- Memoria utilizzata
- I/O file

### 2. Alerting
Alert per:
- Cache miss eccessivi
- Memoria alta
- File lock timeout
- Errori parsing

### 3. Logging
Implementare:
- Translation access logging
- Performance profiling
- Error tracking
- Cache statistics
>>>>>>> c1120baae0 (Squashed 'laravel/Modules/Lang/' content from commit 693742e073)

## Immediate Actions

1. **Implementare Caching:**
   ```php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   // Cache per job status
   public function getJobStatus($id) {
       return Cache::tags(['jobs'])
           ->remember("status_{$id}", 
               now()->addMinutes(5),
               fn() => $this->fetchStatus($id)
=======
   // Cache per file frequenti
   public function getMedia($id) {
       return Cache::tags(['media'])
           ->remember("media_{$id}", 
               now()->addHour(),
               fn() => $this->fetchMedia($id)
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
   // Cache per consensi
   public function getConsentSettings($user) {
       return Cache::tags(['gdpr_settings'])
           ->remember("settings_{$user->id}", 
               now()->addHour(),
               fn() => $this->fetchSettings($user)
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
=======
   // Cache strategico
   public function getTranslation($key, $locale) {
       return Cache::tags(['translations'])
           ->remember("{$locale}.{$key}", 
               now()->addDay(),
               fn() => $this->lookupTranslation($key, $locale)
>>>>>>> c1120baae0 (Squashed 'laravel/Modules/Lang/' content from commit 693742e073)
           );
   }
   ```

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
2. **Ottimizzare Code:**
   ```php
   // Code ottimizzate
   public function optimizeQueues() {
       return $this->queues
           ->each(fn($queue) => 
               $this->balanceQueue($queue)
=======
2. **Ottimizzare Storage:**
   ```php
   // Storage ottimizzato
   public function optimizeStorage() {
       return $this->media
           ->whereOlderThan(now()->subDays(30))
           ->chunk(100)
           ->each(fn($chunk) => 
               $this->compressFiles($chunk)
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
           );
=======
2. **Ottimizzare Query:**
   ```php
   // Query ottimizzate
   public function findUserData($user) {
       return DB::table('personal_data')
           ->where('user_id', $user->id)
           ->select(['id', 'type', 'value'])
           ->lazyById(1000);
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
=======
2. **Ottimizzare File Operations:**
   ```php
   // File operations ottimizzate
   public function updateTranslations($translations) {
       return collect($translations)
           ->chunk(100)
           ->each(fn($chunk) => 
               $this->writeTranslationChunk($chunk)
           );
>>>>>>> c1120baae0 (Squashed 'laravel/Modules/Lang/' content from commit 693742e073)
   }
   ```

3. **Gestione Memoria:**
   ```php
   // Gestione efficiente memoria
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   public function processJobBatch() {
       return LazyCollection::make(function () {
           yield from $this->getPendingJobs();
=======
   public function processMediaBatch() {
       return LazyCollection::make(function () {
           yield from $this->getMediaFiles();
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
       })->chunk(100)
=======
   public function processDataBatch() {
       return LazyCollection::make(function () {
           yield from $this->getDataIterator();
       })->chunk(1000)
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
         ->each(fn($chunk) => 
             $this->processChunk($chunk)
         );
   }
   ```
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
=======
   public function processTranslations() {
       return LazyCollection::make(function () {
           yield from $this->getTranslationIterator();
       })->remember()
         ->chunk(1000);
   }
   ```
>>>>>>> c1120baae0 (Squashed 'laravel/Modules/Lang/' content from commit 693742e073)
