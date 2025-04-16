# Progetto FixCity

## Descrizione
FixCity è una piattaforma per la segnalazione e gestione di problemi urbani, basata su Laravel 11 e Filament 3.

## Architettura del Sistema

### Moduli Principali

#### 1. Modulo FixCity
- **Scopo**: Gestione core del sistema di segnalazioni urbane
- **Funzionalità**:
  - Gestione profili utente
  - Dashboard amministrativa
  - Integrazione con sistema di ticketing
  - API RESTful
  - Supporto multilingua

#### 2. Modulo Ticket
- **Scopo**: Sistema avanzato di gestione ticket
- **Funzionalità**:
  - Workflow completo dei ticket
  - Sistema di stati e priorità
  - Assegnazione automatica/manuale
  - Notifiche e tracking
  - API dedicate

### Integrazione tra Moduli
- Comunicazione via eventi
- Condivisione modelli dati
- Workflow integrato
- Notifiche cross-module

## Struttura Tecnica

### Pattern Architetturali
1. **Architettura Esagonale** (Ports and Adapters)
   - Domain Layer
   - Application Layer
   - Infrastructure Layer

2. **Repository Pattern**
   - Astrazione accesso dati
   - Interfacce standardizzate
   - Implementazioni specifiche

### Database
- MySQL 8.0+
- Schema ottimizzato
- Indici performanti
- Relazioni ben definite

### API
- RESTful
- JWT Authentication
- Documentazione OpenAPI
- Rate Limiting

## Workflow del Sistema

### Stati Ticket
1. Nuovo
2. In Valutazione
3. Assegnato
4. In Lavorazione
5. Risolto
6. Chiuso
7. Rifiutato

### Priorità
- Bassa
- Media
- Alta
- Critica

### Notifiche
- Email
- Push
- Database
- Eventi real-time

## Sicurezza

### Autenticazione
- JWT per API
- Session per web
- OAuth providers

### Autorizzazione
- RBAC (Role-Based Access Control)
- Policies per risorsa
- Gate definitions

## Performance

### Ottimizzazioni
1. Cache Layer
   - Redis
   - Query cache
   - View cache
   
2. Database
   - Indici ottimizzati
   - Query efficienti
   - Eager loading

3. Assets
   - Compressione
   - CDN
   - Lazy loading

## Deployment

### Ambiente
- PHP 8.2+
- MySQL 8.0+
- Redis
- Node.js 18+

### Procedure
1. Build assets
2. Migrazioni database
3. Cache configuration
4. Queue workers

## Testing

### Tipologie
- Unit Tests
- Feature Tests
- API Tests
- Browser Tests

### Coverage
- Domain Logic: 90%+
- Application Layer: 80%+
- Infrastructure: 70%+

## Manutenzione

### Monitoraggio
- Log system
- Error tracking
- Performance metrics
- User analytics

### Backup
- Database: giornaliero
- Files: settimanale
- Config: versionata

## Roadmap

### Fase 1 (Attuale)
- Sistema base di segnalazioni
- Gestione ticket
- Dashboard admin

### Fase 2
- Analytics avanzate
- Mobile app
- Integrazione GIS
- Machine Learning per assegnazioni

### Fase 3
- Blockchain per tracking
- IoT integration
- AI per previsioni
- Real-time updates

## Obiettivi
- Facilitare la comunicazione tra cittadini e amministrazione
- Tracciare e gestire le segnalazioni
- Migliorare la qualità della vita urbana

## Tecnologie utilizzate
- Laravel/Laraxot Framework
- Vue.js per il frontend
- MySQL per il database
- Docker per l'ambiente di sviluppo

## Struttura del progetto
- `/modules` - Moduli dell'applicazione
- `/themes` - Temi e assets
- `/config` - File di configurazione
- `/docs` - Documentazione

# Documentazione FixCity Fila3

## Indice
- [Introduzione](readme.md#introduzione)
- [Architettura](readme.md#architettura)
- [Moduli](readme.md#moduli)
- [Sviluppo](readme.md#sviluppo)
- [Deploy](readme.md#deploy)

## Introduzione
FixCity Fila3 è un'applicazione web moderna basata su Laravel 11 e Filament 3, progettata per gestire servizi urbani in modo efficiente e scalabile.

## Architettura

### Framework e Librerie
- Laravel 11.x
- Filament 3.x Admin Panel
- Laravel Modules
- PHPStan per analisi statica

### Moduli Principali
- **Xot**: Core framework e utilities
- **Fixcity**: Logica di business
- **UI**: Componenti interfaccia
- **Media**: Gestione file
- **Tenant**: Multi-tenancy

## Sviluppo

### Requisiti
- PHP 8.2+
- Composer 2.x
- Node.js 18+
- MySQL 8.0+

### Setup Ambiente
```bash
composer install
php artisan migrate
npm install && npm run dev
```

### Standard di Codice
- PSR-12 coding style
- Type hints obbligatori
- PHPDoc completo
- PHPStan level 8

### Testing
- Unit test con PHPUnit
- Feature test con Pest
- Coverage minimo: 80%

## Deploy

### Requisiti Server
- PHP 8.2+
- Nginx/Apache
- MySQL 8.0+
- Redis (opzionale)

### Processo di Deploy
1. Pull da repository
2. Composer install --no-dev
3. Migrate database
4. Clear cache
5. Reload PHP-FPM

## Documentazione Dettagliata
- [Modulo Xot](laraxot.md)
- [Specifiche Progetto]()

## Indice
- [Introduzione](readme.md#introduzione)
- [Moduli](readme.md#moduli)
- [Filament Admin Panel](readme.md#filament-admin-panel)
- [Sviluppo](readme.md#sviluppo)

## Introduzione
Questo progetto è basato su Laravel con architettura modulare, utilizzando:
- Laravel Modules
- Filament Admin Panel
- PHPStan per analisi statica

## Moduli

### Modulo Xot
Modulo core che fornisce:
- Traits per Filament
- Comandi console
- Provider di base
[Documentazione dettagliata](laraxot.md)

## Filament Admin Panel

### Componenti Base
- Resources standardizzati
- Actions personalizzate
- Widgets riutilizzabili

### Best Practices
- Estendere le classi base appropriate
- Utilizzare i traits forniti
- Seguire le convenzioni di tipizzazione

## Sviluppo

### Standard di Codice
- Type hints completi
- PHPDoc esteso
- Test PHPStan
[Configurazione e linee guida]()

# Documentazione del Progetto

## Indice
- [Introduzione](readme.md#introduzione)
- [Installazione](readme.md#installazione)
- [Struttura del Progetto](readme.md#struttura-del-progetto)
- [Moduli](readme.md#moduli)
- [Filament Admin Panel](readme.md#filament-admin-panel)
- [Risoluzione Errori PHPStan](readme.md#risoluzione-errori-phpstan)

## Introduzione
Questo progetto è basato su Laravel e utilizza una struttura modulare con il supporto di Filament per il pannello di amministrazione.

## Installazione

## Struttura del Progetto

Il progetto FixCity è basato su Laravel con architettura modulare utilizzando il package `nwidart/laravel-modules`.

### Moduli Principali

- **Xot**: Modulo core che fornisce funzionalità base e astrazioni


### Componenti Filament

Il progetto utilizza Filament v3 per l'interfaccia amministrativa, con diverse personalizzazioni:

- Actions personalizzate per operazioni comuni
- Resources base per l'ereditarietà
- Widgets riutilizzabili

### Best Practices

- Utilizzo di type hints completi
- Documentazione PHPDoc estesa
- Test con PHPStan al livello massimo
- Codice fortemente tipizzato

### Requisiti

- PHP 8.2+
- Laravel 11+
- Filament 3.x
- Composer 2.x

## Segnalazioni

### Analisi Statica (PHPStan)

Il progetto è sottoposto a controllo statico con PHPStan al livello massimo. Le principali segnalazioni sono:

- **Errori di tipo**: 274
- **Moduli con maggiori segnalazioni**:
  - Xot: 112 errori
  - Fixcity: 89 errori
  - AI: 73 errori

Per il report completo vedere [report.txt](../report.txt)

# Best Practices PHP da PHPStan

## Tipizzazione Stretta
- Utilizzare sempre dichiarazioni di tipo esplicite per proprietà, parametri e valori di ritorno
- Evitare tipi misti (mixed) quando possibile
- Utilizzare union types (|) invece di tipi nullable quando appropriato

## Data Objects e Value Objects
- Preferire oggetti immutabili per i Data Objects
- Utilizzare costruttori con promozione delle proprietà in PHP 8+
- Dichiarare tutte le proprietà come readonly quando possibile
- Validare i dati nel costruttore

## Enumerazioni
- Utilizzare PHP 8.1+ enums invece di costanti per valori predefiniti
- Documentare ogni caso dell'enum con docblock
- Implementare metodi helper nell'enum per operazioni comuni

## Filament Resources
- Estendere sempre da una classe base per mantenere consistenza
- Utilizzare traits per funzionalità condivise
- Implementare interfacce appropriate per garantire contratti
- Dichiarare esplicitamente i tipi di ritorno per tutti i metodi

## Gestione delle Traduzioni
- Utilizzare sistemi di traduzione type-safe
- Evitare stringhe hardcoded per i testi
- Centralizzare le chiavi di traduzione
- Validare l'esistenza delle traduzioni durante il build

## Correzioni Comuni
1. Dichiarare sempre il tipo di ritorno dei metodi
2. Inizializzare le proprietà nullable
3. Gestire correttamente i casi null
4. Utilizzare strict_types=1
5. Evitare l'uso di dynamic properties

## Esempio di Data Object Corretto

## Analisi PHPStan - Problemi Rilevati e Soluzioni

### 1. XotBaseResource.php
- Mancanza di tipi di ritorno espliciti nei metodi
- Proprietà non inizializzate
- Uso di proprietà dinamiche

Correzione esempio:

## Gestione Namespace nei Moduli Laravel

### Importante: Lettura composer.json

Prima di modificare i namespace, è fondamentale leggere il `composer.json` di ogni modulo per determinare il namespace corretto. 

Esempio di errore comune:
- ❌ Assumere che il namespace segua la struttura delle cartelle
- ❌ Cambiare `Modules\Xot\Filament\Traits` in `Modules\Xot\App\Filament\Traits`

### Come determinare il namespace corretto:

1. Aprire il `composer.json` del modulo
2. Controllare la sezione "autoload" e "psr-4"
3. Il namespace base è definito qui

Esempio dal modulo Xot:

## Analisi Errori PHPStan e Soluzioni

### 1. Errori di Tipizzazione nei Modelli

#### Problema: Proprietà con Tipizzazione Nativa Errata
In `BaseModel.php` e classi derivate, le proprietà che sovrascrivono quelle di Laravel non dovrebbero avere tipizzazione nativa:

## Correzioni PHPStan Implementate

### 1. XotBaseResource
- Aggiunto tipo di ritorno corretto per getModel(): `class-string<Model>`
- Implementata validazione per model null
- Corretti i namespace secondo composer.json
- Aggiunti PHPDoc appropriati

### 2. TransTrait
- Migliorata la gestione dei tipi mixed
- Aggiunta validazione dei valori di ritorno
- Corretta la gestione degli array di traduzioni
- Implementata gestione sicura delle stringhe

### 3. RatingData
- Implementata classe readonly immutabile
- Aggiunta validazione nel costruttore
- Implementato metodo factory type-safe fromArray
- Rimosso file duplicato da Datas/

### Best Practices Implementate
1. Uso consistente di `declare(strict_types=1)`
2. Validazione dei dati in ingresso
3. Tipi di ritorno espliciti
4. Gestione appropriata dei null
5. Documentazione PHPDoc completa

## Correzioni PHPStan per i Comandi Console

### 1. Tipi di Ritorno nei Comandi
- Aggiunto tipo di ritorno `int` per il metodo `handle()`
- Utilizzato `Command::SUCCESS` come valore di ritorno standard
- Implementati tipi di ritorno `void` per i metodi privati

### 2. Gestione degli Argomenti
- Cast esplicito degli argomenti a string
- Validazione degli input con Assert
- Tipizzazione stretta dei parametri dei metodi

### 3. Best Practices per i Comandi
1. Utilizzare tipi di ritorno appropriati:

### 4. Gestione delle Query al Database
- Tipizzazione delle strutture dati del database
- Validazione dei risultati delle query
- Gestione sicura dei parametri di ricerca

## Filament Resources e XotBaseListRecords

### Estensione Corretta
- ❌ Non estendere `Filament\Resources\Pages\ListRecords`
- ✅ Estendere `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`

### Differenze Chiave
1. **Metodi per le Colonne**
   - ❌ `table()` o `getTableColumns()` (ListRecords standard)
   - ✅ `getListTableColumns()` (XotBaseListRecords)

2. **Esempio di Implementazione Corretta**

## XotBaseListRecords - Metodi e Best Practices

### 1. Metodi Principali

#### getListTableColumns

## RelationManager e Tipizzazione

### 1. Tipizzazione Corretta delle Colonne

## Gestione Errori Comuni nelle Liste Filament

### 1. Tipizzazione delle Colonne di Tabella

## XotBaseListRecords - Struttura e Metodi

### Importante: Differenza con ListRecords Standard
- ❌ Non utilizzare il metodo `table()` quando si estende XotBaseListRecords
- ✅ Utilizzare i metodi specifici di XotBaseListRecords

### Metodi da Implementare

1. **getListTableColumns (Obbligatorio)**

## XotBaseListRecords - Livelli di Accesso dei Metodi

### Metodi Pubblici Obbligatori

1. **getListTableColumns**

## Correzione Errori nelle Actions

### 1. Gestione dei Tipi Mixed

#### Problema

## Risoluzione Errori PHPStan

### 1. Errori di Tipizzazione nelle Liste Filament

#### Problema: Return Type non Corretto nelle Bulk Actions

## Errori PHPStan Comuni

### 1. Tipizzazione nelle Liste
- Utilizzare array associativi per le bulk actions
- Specificare i generics nelle relazioni
- Tipizzare correttamente i return type

### 2. Gestione dei Mixed Types
- Evitare concatenazione diretta con mixed
- Utilizzare cast espliciti a string
- Usare sprintf per formattazione sicura

### 3. Import e Namespace
- Verificare sempre gli import
- Utilizzare namespace completi
- Controllare l'esistenza delle classi

[Vedi soluzioni dettagliate](#errori-phpstan-e-soluzioni)

# Documentazione Progetto

## Models

### BaseModel

Il `BaseModel` è una classe astratta che serve come base per tutti i modelli nel modulo Activity. Estende il `Model` di Laravel e definisce le proprietà comuni che tutti i modelli del modulo possono utilizzare.

#### Proprietà

##### `$incrementing`
- **Tipo**: `bool` 
- **Descrizione**: Indica se gli ID del modello sono auto-incrementali.
- **Default**: `null`

##### `$timestamps`
- **Tipo**: `bool`
- **Descrizione**: Determina se il modello deve gestire automaticamente i timestamp `created_at` e `updated_at`.
- **Default**: `null`

##### `$perPage`
- **Tipo**: `int`
- **Descrizione**: Definisce il numero di modelli da restituire per pagina durante la paginazione.
- **Default**: `null`

##### `$connection`
- **Tipo**: `string`
- **Descrizione**: Specifica la connessione al database che deve essere utilizzata dal modello.
- **Default**: `null`

##### `$primaryKey`
- **Tipo**: `string`
- **Descrizione**: Definisce il nome della chiave primaria del modello.
- **Default**: `null`

##### `$keyType`
- **Tipo**: `string`
- **Descrizione**: Specifica il tipo di dato della chiave primaria (es. 'int', 'string').
- **Default**: `null`

##### `$hidden`
- **Tipo**: `list<string>`
- **Descrizione**: Array di attributi che dovrebbero essere nascosti durante la serializzazione.
- **Default**: `[]`

##### `$fillable`
- **Tipo**: `list<string>`
- **Descrizione**: Array di attributi che possono essere assegnati in massa.
- **Default**: `[]`

#### Note Importanti

1. Questa classe è astratta e deve essere estesa da altri modelli concreti.
2. Le proprietà sono state definite senza type hints nativi per mantenere la compatibilità con la classe padre `Model` di Laravel.
3. La documentazione PHPDoc utilizza `list<string>` invece di `array<string>` per garantire la compatibilità con le definizioni dei tipi di Laravel.

#### Esempio di Utilizzo

```php
class User extends BaseModel {
    protected $fillable = ['nome', 'email'];
    protected $hidden = ['password'];
}
```



~~~bash
git clone --recurse-submodules https://github.com/aurmich/base_fixcity_fila3.git  base_fixcityam_fila3
cd base_fixcityam_fila3
~~~


~~~bash
git remote -v
~~~
must return 
~~~bash
origin  https://github.com/aurmich/base_fixcity_fila3.git (fetch)
origin  https://github.com/aurmich/base_fixcity_fila3.git (push)
~~~

~~~bash
git submodule foreach git remote -v
~~~
must return 
~~~bash
Entering 'bashscripts'
origin  https://github.com/aurmich/bashscripts_fila3.git (fetch)
origin  https://github.com/aurmich/bashscripts_fila3.git (push)
Entering 'laravel/Modules/AI'
origin  https://github.com/aurmich/module_ai_fila3.git (fetch)
origin  https://github.com/aurmich/module_ai_fila3.git (push)
Entering 'laravel/Modules/Activity'
origin  https://github.com/aurmich/module_activity_fila3.git (fetch)
origin  https://github.com/aurmich/module_activity_fila3.git (push)
Entering 'laravel/Modules/Blog'
origin  https://github.com/aurmich/module_blog_fila3.git (fetch)
origin  https://github.com/aurmich/module_blog_fila3.git (push)
Entering 'laravel/Modules/Cms'
origin  https://github.com/aurmich/module_cms_fila3.git (fetch)
origin  https://github.com/aurmich/module_cms_fila3.git (push)
Entering 'laravel/Modules/Comment'
origin  https://github.com/aurmich/module_comment_fila3.git (fetch)
origin  https://github.com/aurmich/module_comment_fila3.git (push)
Entering 'laravel/Modules/Fixcity'
origin  https://github.com/aurmich/module_fixcity_fila3.git (fetch)
origin  https://github.com/aurmich/module_fixcity_fila3.git (push)
Entering 'laravel/Modules/Gdpr'
origin  https://github.com/aurmich/module_gdpr_fila3.git (fetch)
origin  https://github.com/aurmich/module_gdpr_fila3.git (push)
Entering 'laravel/Modules/Geo'
origin  https://github.com/aurmich/module_geo_fila3.git (fetch)
origin  https://github.com/aurmich/module_geo_fila3.git (push)
Entering 'laravel/Modules/Job'
origin  https://github.com/aurmich/module_job_fila3.git (fetch)
origin  https://github.com/aurmich/module_job_fila3.git (push)
Entering 'laravel/Modules/Lang'
origin  https://github.com/aurmich/module_lang_fila3.git (fetch)
origin  https://github.com/aurmich/module_lang_fila3.git (push)
Entering 'laravel/Modules/Media'
origin  https://github.com/aurmich/module_media_fila3.git (fetch)
origin  https://github.com/aurmich/module_media_fila3.git (push)
Entering 'laravel/Modules/Notify'
origin  https://github.com/aurmich/module_notify_fila3.git (fetch)
origin  https://github.com/aurmich/module_notify_fila3.git (push)
Entering 'laravel/Modules/Rating'
origin  https://github.com/aurmich/module_rating_fila3.git (fetch)
origin  https://github.com/aurmich/module_rating_fila3.git (push)
Entering 'laravel/Modules/Seo'
origin  https://github.com/aurmich/module_seo_fila3.git (fetch)
origin  https://github.com/aurmich/module_seo_fila3.git (push)
Entering 'laravel/Modules/Setting'
origin  https://github.com/aurmich/module_setting_fila3.git (fetch)
origin  https://github.com/aurmich/module_setting_fila3.git (push)
Entering 'laravel/Modules/Tenant'
origin  https://github.com/aurmich/module_tenant_fila3.git (fetch)
origin  https://github.com/aurmich/module_tenant_fila3.git (push)
Entering 'laravel/Modules/Ticket'
origin  https://github.com/aurmich/module_ticket_fila3.git (fetch)
origin  https://github.com/aurmich/module_ticket_fila3.git (push)
Entering 'laravel/Modules/UI'
origin  https://github.com/aurmich/module_ui_fila3.git (fetch)
origin  https://github.com/aurmich/module_ui_fila3.git (push)
Entering 'laravel/Modules/User'
origin  https://github.com/aurmich/module_user_fila3.git (fetch)
origin  https://github.com/aurmich/module_user_fila3.git (push)
Entering 'laravel/Modules/Xot'
origin  https://github.com/aurmich/module_xot_fila3.git (fetch)
origin  https://github.com/aurmich/module_xot_fila3.git (push)
Entering 'laravel/Themes/Sixteen'
origin  https://github.com/aurmich/theme_sixteen_fila3.git (fetch)
origin  https://github.com/aurmich/theme_sixteen_fila3.git (push)
Entering 'laravel/Themes/TwentyOne'
origin  https://github.com/aurmich/theme_twentyone_fila3.git (fetch)
origin  https://github.com/aurmich/theme_twentyone_fila3.git (push)
~~~


~~~bash
cd laravel
cp .env.latest .env
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
php -d memory_limit=-1 composer.phar update -W

~~~

puo' venire fuori un errore del tipo:
Fatal error: Trait "Spatie\QueueableAction\QueueableAction" not found in F:\var\www\_bases\base_fixcityam_fila3\laravel\
Modules\Xot\Actions\File\FixPathAction.php on line 13
soluzione
~~~bash
php -d memory_limit=-1 composer.phar update -W
~~~

Fatal error: Cannot redeclare Amp\delay() (previously declared in C:\Users\sottanamarco\AppData\Roaming\Composer\vendor\
amphp\amp\lib\functions.php:131) in F:\var\www\_bases\base_fixcityam_fila3\laravel\vendor\amphp\amp\src\functions.php on
 line 81
soluzione
~~~bash
php -d memory_limit=-1 composer.phar update -W
~~~

~~~bash
php artisan vendor:publish --all 
rm -rf database/migrations/
touch database/fixcity_user.sqlite
touch database/fixcity_data.sqlite

~~~

edit laravel.env
~~~env
APP_URL=http://fixcity.local
~~~

~~~bash
php artisan filament:assets
php artisan migrate
php artisan serve --host=fixcityam.local
~~~

se 
 <br />
  <b>Warning</b>:  Unknown: php_network_getaddresses: getaddrinfo for fixcityam.local failed: Host sconosciuto.  in <b>U
nknown</b> on line <b>0</b><br />
  Failed to listen on fixcityam.local:8000 (reason: php_network_getaddresses: getaddrinfo for fixcityam.local failed: Ho
st sconosciuto. )
  <br />
  <b>Warning</b>:  Unknown: php_network_getaddresses: getaddrinfo for fixcityam.local failed: Host sconosciuto.  in <b>U
nknown</b> on line <b>0</b><br />
  Failed to listen on fixcityam.local:8001 (reason: php_network_getaddresses: getaddrinfo for fixcityam.local failed: Ho
st sconosciuto. )
  <br />
  <b>Warning</b>:  Unknown: php_network_getaddresses: getaddrinfo for fixcityam.local failed: Host sconosciuto.  in <b>U
nknown</b> on line <b>0</b><br />
  Failed to listen on fixcityam.local:8002 (reason: php_network_getaddresses: getaddrinfo for fixcityam.local failed: Ho
st sconosciuto. )



apri /etc/hosts
127.0.0.1      fixcityam.local #xot




# Specifiche Progetto Fixcity Fila3

## Tecnologie Attuali
- **Framework**: Laravel 11
- **Admin Panel**: Filament 3.x
- **PHP Version**: 8.2+
- **Analisi Statica**: PHPStan level 8
- **Package Manager**: Composer 2.x

## Moduli Core
- **Xot**: Framework base e utilities
- **Fixcity**: Logica di business principale
- **UI**: Componenti interfaccia utente
- **Media**: Gestione file e media
- **Tenant**: Multi-tenancy

## Requisiti Funzionali
- [x] Sistema di autenticazione avanzato
- [x] Gestione multi-tenant
- [x] Upload e gestione media
- [x] API RESTful
- [x] Cache system ottimizzato
- [ ] Sistema di notifiche real-time
- [ ] Integrazione payment gateway

## Best Practices

### Type Safety
- Uso obbligatorio di `declare(strict_types=1)`
- Type hints per tutti i metodi pubblici
- PHPDoc completo per proprietà e metodi
- Validazione tipi nei costruttori
- Uso di Data Transfer Objects (DTO)

### Filament Resources
- Estensione da XotBaseResource
- Implementazione traits standard
- Gestione permessi granulare
- Ottimizzazione delle query

### Testing
- PHPUnit per unit testing
- Pest per feature testing
- Coverage minimo: 80%
- Mock per servizi esterni

## PHPStan Configuration

```neon
parameters:
    level: 8
    paths:
        - app
        - modules
    excludePaths:
        - tests/
        - vendor/
    checkGenericClassInNonGenericObjectType: false
    checkMissingIterableValueType: false
    
    ignoreErrors:
        - '#Property .* has no type specified#'
        - '#Method .* return type has no value type specified in iterable type array#'
```

## Convenzioni di Codice

### Naming
- PascalCase per classi e interfaces
- camelCase per metodi e variabili
- snake_case per file di configurazione
- UPPERCASE per costanti

### Struttura Directory
```
modules/
├── Xot/
│   ├── App/
│   │   ├── Filament/
│   │   │   ├── Actions/         # Azioni Filament personalizzate
│   │   │   │   ├── Resources/       # Resource base
│   │   │   │   └── Widgets/        # Widget riutilizzabili
│   │   │   ├── Providers/          # Service providers
│   │   │   └── Traits/            # Traits riutilizzabili
│   │   ├── Config/
│   │   └── Resources/
│   ├── Fixcity/
│   └── UI/
```

## Panoramica
- **Tipo**: Applicazione web
- **Tecnologie**: Laravel, Livewire, Filament
- **Moduli principali**:
  - Fixcity
  - Xot
  - UI
  - Media
  - Seo

## Requisiti
- [ ] Gestione utenti
- [ ] Gestione contenuti
- [ ] SEO avanzato
- [ ] Multilingua

## Componenti Base

### XotBaseAction

Classe astratta base per le azioni Filament nel modulo Xot.

```php
abstract class XotBaseAction extends Action
{
    protected function setUp(): void;
    public static function getDefaultName(): ?string;
    public function getRecord(): ?Model;
}
```

Caratteristiche:
- Estende `Filament\Actions\Action`
- Configurazione automatica dell'icona
- Gestione type-safe dei record

Note PHPStan:
- Uso di `@phpstan-var` per type hints più precisi
- Gestione sicura dei tipi misti con `mixed`
- Documentazione esplicita delle proprietà ereditate

Esempio di utilizzo:
```php
class CustomAction extends XotBaseAction 
{
    public static function getDefaultName(): ?string 
    {
        return 'custom-action';
    }
}
```

# Struttura del Progetto

## Organizzazione dei Moduli

### Modulo Xot

Il modulo Xot è il core del progetto e fornisce le classi base per gli altri moduli.

#### Directory Principali

```
Modules/Xot/
├── app/
│   ├── Filament/
│   │   ├── Actions/         # Azioni Filament personalizzate
│   │   │   ├── Resources/       # Resource base
│   │   │   └── Widgets/        # Widget riutilizzabili
│   │   ├── Providers/          # Service providers
│   │   └── Traits/            # Traits riutilizzabili
│   ├── Config/                # Configurazioni
│   ├── database/             # Migrations e seeders
│   └── docs/                # Documentazione
```

#### Namespace

- `Modules\Xot\Filament\Actions` - Azioni Filament base
- `Modules\Xot\Filament\Resources` - Resource base
- `Modules\Xot\Filament\Widgets` - Widget base

## Convenzioni di Codice

### Naming

- Classi base: prefisso `XotBase`
- Actions: suffisso `Action`
- Resources: suffisso `Resource`
- Widgets: suffisso `Widget`

### Type Safety

- Utilizzo obbligatorio di `declare(strict_types=1)`
- Type hints per tutti i parametri e ritorni
- PHPDoc completo per proprietà e metodi
- Test PHPStan al livello massimo
- Evitare assolutamente l'uso di `mixed`
- Definire tipi specifici per ogni variabile
- Controlli di tipo generici per maggiore compatibilità
- Inizializzazione esplicita delle variabili nullable
- Documentazione dei tipi per variabili temporanee
- Uso di type hints specifici per le classi del framework
- Verifica dell'esistenza dei metodi con `method_exists`
- Validazione dei tipi con `is_string` e `instanceof`
- Conversione sicura tra tipi usando variabili intermedie
- Uso di Data Transfer Objects (DTO) per dati strutturati
- Uso di enum per valori predefiniti invece di costanti
- Proprietà readonly per immutabilità dei dati
- Type casting esplicito nei costruttori DTO

### Best Practices

- Classi base astratte per funzionalità comuni
- Traits per codice condiviso
- Documentazione in italiano
- Test automatici
- Gestione sicura dei tipi nullable
- Documentazione delle proprietà ereditate
- Separazione della logica in blocchi type-safe
- Uso di variabili intermedie per migliorare la leggibilità
- Importazione esplicita delle classi del framework
- Minimizzazione dei controlli ridondanti
- Gestione flessibile delle dipendenze esterne
- Evitare dipendenze rigide da classi specifiche
- Validazione dei tipi prima dell'uso
- Fallback sicuri per valori non validi
- Mai usare `mixed` se esistono alternative
- Preferire union types a tipi generici
- Estrarre logica complessa in metodi dedicati
- Usare DTO per validazione e trasformazione dati
- Usare enum per domini di valori finiti
- Immutabilità dei dati dove possibile
- Metodi factory statici per costruzione oggetti
- Valori di default espliciti nei DTO

### Data Transfer Objects

- Utilizzare sempre `spatie/laravel-data`
- Posizionare i DTO nella cartella `app/Datas`
- Utilizzare proprietà readonly
- Fornire valori di default
- Implementare metodi factory statici
- Usare type casting esplicito
- Documentare strutture array complesse
- Utilizzare attributi di casting quando possibile
- Integrare con enum per valori predefiniti

# Documentazione Progetto

## Configurazione PHPStan

Il progetto utilizza PHPStan al livello massimo per l'analisi statica del codice.

### File di Configurazione

```
// phpstan.neon
parameters:
    level: max
    paths:
        - app
        - modules
    ignoreErrors:
        - '#^app/.*\.php$#'
```

## Correzioni PHPStan

### 1. Relazioni Eloquent e Generics

#### Problema: Tipi Generici Incompleti
Le relazioni Eloquent come `MorphMany` e `MorphOne` richiedono due parametri di tipo:
1. Il modello correlato (TRelatedModel)
2. Il modello dichiarante (TDeclaringModel)

#### Soluzione:
```php
/**
 * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\App\Models\Notification, self>
 */
public function notifications(): \Illuminate\Database\Eloquent\Relations\MorphMany
{
    return $this->morphMany(Notification::class, 'notifiable');
}
```

### 2. Bulk Actions in Filament

#### Problema: Array Keys nelle Bulk Actions
Le azioni bulk devono avere chiavi stringa invece di indici numerici.

#### Soluzione:
```php
protected function getTableBulkActions(): array
{
    return [
        'delete' => DeleteBulkAction::make(),
        'export' => ExportBulkAction::make(),
    ];
}
```

### 3. Type Safety nei Modelli

#### Problema: Proprietà Native nei Modelli
Le proprietà che sovrascrivono quelle del modello base non dovrebbero avere tipi nativi.

#### Soluzione:
Rimuovere i tipi nativi dalle proprietà che sovrascrivono quelle del modello base:
```php
// Invece di
public string $connection = 'mysql';

// Usare
public $connection = 'mysql';

```

## Errori PHPStan e Soluzioni

### 1. Errori nelle Actions

#### GetAllBlocksAction.php - Concatenazione con Mixed
```php
// Errore
$path = $basePath . $module;  // Binary operation "." between non-falsy-string and mixed

// Soluzione
$path = $basePath . (string)$module;
```

### 2. Errori nelle Liste Filament

#### ListProfiles.php - Return Type Bulk Actions
```php
// Errore
public function getTableBulkActions(): array
{
    return [
        DeleteBulkAction::make(),
    ];
}

// Soluzione
public function getTableBulkActions(): array
{
    return [
        'delete' => DeleteBulkAction::make(),
    ];
}
```

#### ListDevices.php - Classe Non Trovata
```php
// Errore
Tables\Actions\DeleteBulkAction::make()

// Soluzione
use Filament\Tables\Actions\DeleteBulkAction;
// ...
DeleteBulkAction::make()
```

### 3. Errori nei Model

#### BaseUser.php - Generics nelle Relazioni
```php
// Errore
/** @return MorphMany<Notification> */

// Soluzione
/** @return MorphMany<Notification, BaseUser> */
public function notifications(): MorphMany
{
    return $this->morphMany(Notification::class, 'notifiable');
}
```

### 4. Best Practices per la Correzione

1. **Tipizzazione Stretta**
   - Usare sempre tipi di ritorno espliciti
   - Evitare l'uso di mixed
   - Specificare i generics nelle relazioni

2. **Gestione delle Chiavi negli Array**
   - Usare chiavi string per le azioni Filament
   - Mantenere consistenza nella tipizzazione degli array

3. **Import e Namespace**
   - Importare sempre le classi utilizzate
   - Verificare i namespace corretti

### 5. Tipizzazione Colonne
   - Aggiunta tipizzazione corretta per array colonne
   - Specificati tipi per ogni colonna

### 6. Relazioni Resource
   - Corretta tipizzazione array relazioni
   - Aggiunto supporto per RelationGroup

## Conflitti di Proprietà in Filament

### Problema: Conflitto tra Trait e Classe Base
In `XotBaseListRecords`, c'è un conflitto tra la proprietà `$navigationSort` definita sia in `Filament\Pages\Page` che in `HasXotTable`.

```php
// Errore
abstract class XotBaseListRecords extends FilamentListRecords
{
    use HasXotTable; // Conflitto con $navigationSort
}
```

### Soluzione 1: Rimozione della Proprietà dal Trait
```php
// In HasXotTable trait
trait HasXotTable
{
    // Rimuovere la definizione di $navigationSort se non necessaria
    // protected $navigationSort = 0; // Rimuovere questa riga
}
```

### Soluzione 2: Utilizzo di insteadof
```php
abstract class XotBaseListRecords extends FilamentListRecords
{
    use HasXotTable {
        HasXotTable::$navigationSort insteadof Page;
    }
}
```

### Soluzione 3: Rinominare la Proprietà nel Trait
```php
// In HasXotTable trait
trait HasXotTable
{
    protected $xotNavigationSort = 0; // Rinominata per evitare conflitti
}
```

### Best Practices per Evitare Conflitti
1. **Naming Conventions**
   - Prefissare le proprietà dei trait con un namespace univoco
   - Evitare nomi generici per le proprietà

2. **Documentazione**
   ```php
   /**
    * @property int $xotNavigationSort Sorting order for navigation
    * @property ?string $resource Resource class name
    * @property ?string $slug URL slug
    * @property TableLayoutEnum $layoutView Current table layout
    */
   abstract class XotBaseListRecords extends FilamentListRecords
   ```

3. **Controllo delle Dipendenze**
   - Verificare le proprietà delle classi base prima di definirle nei trait
   - Documentare chiaramente le proprietà richieste e potenziali conflitti

## Correzioni PHPStan Implementate

### 1. Conflitto Proprietà HasXotTable
- Rinominata proprietà `$navigationSort` in `$xotNavigationSort`
- Aggiunti metodi getter/setter type-safe

### 2. Bulk Actions Return Type
- Aggiunta tipizzazione corretta con array associativo
- Specificati generics per BulkAction

### 3. Relazioni Eloquent
- Corretti generics per MorphMany e MorphOne
- Aggiunto self come TDeclaringModel

### 4. Concatenazione Stringhe
- Utilizzato sprintf per concatenazione sicura
- Cast esplicito a string per input mixed

### 5. Import e Namespace
- Corretti import per le classi Filament
- Rimossi import non utilizzati

### 6. Tipizzazione Colonne
- Aggiunta tipizzazione corretta per array colonne
- Specificati tipi per ogni colonna

### 7. Relazioni Resource
- Corretta tipizzazione array relazioni
- Aggiunto supporto per RelationGroup

# Project Documentation

## Models

### BaseModel

Il `BaseModel` è una classe astratta che serve come base per tutti i modelli nel modulo Activity. Estende il `Model` di Laravel e definisce le proprietà comuni che tutti i modelli del modulo possono utilizzare.

#### Proprietà

##### `$incrementing`
- **Tipo**: `bool`
- **Descrizione**: Indica se gli ID del modello sono auto-incrementali.
- **Default**: `null`

##### `$timestamps`
- **Tipo**: `bool`
- **Descrizione**: Determina se il modello deve gestire automaticamente i timestamp `created_at` e `updated_at`.
- **Default**: `null`

##### `$perPage`
- **Tipo**: `int`
- **Descrizione**: Definisce il numero di modelli da restituire per pagina durante la paginazione.
- **Default**: `null`

##### `$connection`
- **Tipo**: `string`
- **Descrizione**: Specifica la connessione al database che deve essere utilizzata dal modello.
- **Default**: `null`

##### `$primaryKey`
- **Tipo**: `string`
- **Descrizione**: Definisce il nome della chiave primaria del modello.
- **Default**: `null`

##### `$keyType`
- **Tipo**: `string`
- **Descrizione**: Specifica il tipo di dato della chiave primaria (es. 'int', 'string').
- **Default**: `null`

##### `$hidden`
- **Tipo**: `list<string>`
- **Descrizione**: Array di attributi che dovrebbero essere nascosti durante la serializzazione.
- **Default**: `[]`

##### `$fillable`
- **Tipo**: `list<string>`
- **Descrizione**: Array di attributi che possono essere assegnati in massa.
- **Default**: `[]`

#### Note Importanti

1. Questa classe è astratta e deve essere estesa da altri modelli concreti.
2. Le proprietà sono state definite senza type hints nativi per mantenere la compatibilità con la classe padre `Model` di Laravel.
3. La documentazione PHPDoc utilizza `list<string>` invece di `array<string>` per garantire la compatibilità con le definizioni dei tipi di Laravel.

#### Esempio di Utilizzo

```php
class User extends BaseModel
{
    // Definisci le proprietà specifiche del modello User
}

```

## Struttura dei Moduli e Namespace

### Importante: Determinare il Percorso Corretto dei File

Per ogni modulo, il namespace e il percorso delle classi deve essere determinato leggendo il file `composer.json` del modulo specifico.

#### Esempi di Configurazioni:

##### 1. Modulo UI
```json
// Modules/UI/composer.json
{
    "autoload": {
        "psr-4": {
            "Modules\\UI\\": ""
        }
    }
}
```
Quindi per `GetAllBlocksAction`:
- ✅ Percorso corretto: `Modules/UI/Actions/Block/GetAllBlocksAction.php`
- ❌ Percorso errato: `Modules/UI/app/Actions/Block/GetAllBlocksAction.php`

##### 2. Modulo Activity
```json
// Modules/Activity/composer.json
{
    "autoload": {
        "psr-4": {
            "Modules\\Activity\\": "app/"
        }
    }
}
```
Quindi per i modelli:
- ✅ Percorso corretto: `Modules/Activity/app/Models/BaseModel.php`
- ❌ Percorso errato: `Modules/Activity/Models/BaseModel.php`

##### 3. Modulo Lang
```json
// Modules/Lang/composer.json
{
    "autoload": {
        "psr-4": {
            "Modules\\Lang\\": "app/"
        }
    }
}
```
Quindi per le Actions:
- ✅ Percorso corretto: `Modules/Lang/app/Actions/Filament/AutoLabelAction.php`
- ❌ Percorso errato: `Modules/Lang/Actions/Filament/AutoLabelAction.php`

### Best Practices
1. **Sempre verificare il composer.json** del modulo prima di creare nuovi file
2. **Rispettare il PSR-4** definito nel composer.json
3. **Non assumere** che tutti i moduli seguano la stessa struttura
4. **Documentare** il namespace base nel README del modulo

### Errori Comuni da Evitare
- Assumere che `/app` sia sempre presente nel percorso
- Copiare la struttura da un altro modulo senza verificare
- Modificare i percorsi senza aggiornare il composer.json
- Dichiarare lo stesso metodo più volte nella stessa classe

# Progetto FixCity

## Struttura Base
```
F:\var\www\fixcity\              # Root progetto
├── laravel\                     # Core applicazione
│   ├── Modules\                # Directory moduli
│   │   └── Fixcity\           # Modulo principale
│   └── Themes\                # Temi applicazione
├── public_html\               # Document root
└── docs\                     # Documentazione
```

[resto del contenuto esistente...]

# Temi FixCity

## Tema Sixteen

### Setup
```bash
cd laravel/Themes/Sixteen
npm install
```

### Build
```bash
# Development
npm run dev

# Production
npm run build
```

### Dipendenze
- Tailwind CSS
- DaisyUI
- Swiper

### Note
- Risolti warning CSS DaisyUI disabilitando i log
- Assets compilati in `dist/`
- Symlink automatico in `public_html/themes/Sixteen/dist/`

[resto del contenuto esistente...]

### Struttura Modulo Fixcity

#### Filament Resources
```
Modules/Fixcity/
└── app/
    └── Filament/
        └── Resources/
            └── TicketResource/
                ├── Pages/
                │   ├── CreateTicket.php
                │   ├── EditTicket.php
                │   ├── ListTickets.php
                │   └── ViewTicket.php
                └── RelationManagers/
                    ├── AttachmentsRelationManager.php
                    └── CommentsRelationManager.php
```

#### Configurazione
```php
// config/config.php
return [
    'name' => 'Fixcity',
    'navigation' => [
        'ticket' => [
            'icon' => 'heroicon-o-ticket',
            'group' => 'Segnalazioni',
        ],
    ],
];
```

### Pages

#### ListTickets
```php
class ListTickets extends XotBaseListRecords
{
    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id')->sortable(),
            TextColumn::make('title')->searchable(),
            TextColumn::make('category.name')->sortable(),
            BadgeColumn::make('status')
                ->colors([
                    'danger' => 'open',
                    'warning' => 'in_progress',
                    'success' => 'resolved',
                    'secondary' => 'closed',
                ]),
            BadgeColumn::make('priority')
                ->colors([
                    'secondary' => 'low',
                    'primary' => 'medium',
                    'warning' => 'high',
                    'danger' => 'urgent',
                ]),
            TextColumn::make('created_at')->dateTime(),
        ];
    }
}
```

#### ViewTicket
```php
class ViewTicket extends XotBaseViewRecord
{
    protected static string $resource = TicketResource::class;

    // Personalizzazione vista dettaglio ticket
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
```

### Service Provider

```php
class FixcityServiceProvider extends XotBaseServiceProvider
{
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
    public string $name = 'Fixcity';

    public function boot(): void
    {
        parent::boot();
    }
}
```

### Funzionalità Chiave

#### 1. Gestione Ticket
- Creazione e modifica ticket
- Assegnazione categorie
- Gestione stati e priorità
- Upload allegati
- Sistema commenti

#### 2. Dashboard
- Overview ticket aperti
- Statistiche per stato
- Filtri per categoria e priorità
- Grafici andamento

#### 3. Notifiche
- Notifica nuovi ticket
- Alert cambio stato
- Promemoria ticket in attesa
- Notifiche commenti

### Permessi e Ruoli

#### Ruoli Disponibili
1. **Admin**
   - Accesso completo
   - Gestione configurazioni
   - Gestione utenti

2. **Operatore**
   - Gestione ticket
   - Risposta commenti
   - Upload allegati

3. **Utente**
   - Creazione ticket
   - Visualizzazione propri ticket
   - Aggiunta commenti

### Workflow Operativo

1. **Creazione Ticket**
   - Utente compila form
   - Seleziona categoria
   - Allega documenti (opzionale)
   - Ticket creato con stato 'open'

2. **Presa in Carico**
   - Operatore visualizza ticket
   - Assegna priorità
   - Cambia stato in 'in_progress'
   - Possibile assegnazione a operatore specifico

3. **Gestione**
   - Operatore lavora sul ticket
   - Aggiunge commenti per aggiornamenti
   - Può allegare documenti
   - Interazione con utente via commenti

4. **Risoluzione**
   - Operatore completa intervento
   - Cambia stato in 'resolved'
   - Notifica utente
   - Attende conferma

5. **Chiusura**
   - Utente conferma risoluzione
   - Ticket passa a 'closed'
   - Archiviazione automatica

### Integrazioni

#### 1. Email
- Notifiche automatiche
- Risposte via email
- Template personalizzabili

#### 2. Storage
- Gestione allegati
- Backup automatico
- Pulizia file temporanei

#### 3. Mappe
- Geolocalizzazione segnalazioni
- Visualizzazione su mappa
- Clustering segnalazioni

### Note Sviluppo

1. **Performance**
   - Paginazione liste
   - Lazy loading relazioni
   - Cache query frequenti

2. **Sicurezza**
   - Validazione input
   - Sanitizzazione file
   - Rate limiting API

3. **UX/UI**
   - Feedback immediato
   - Loading states
   - Responsive design

### RelationManagers

#### Nota Importante sulla Struttura
Dopo un'analisi approfondita del modulo Xot, è emerso che non esiste una classe base `XotBaseRelationManager`. I RelationManager in Fixcity devono estendere direttamente `Filament\Resources\RelationManagers\RelationManager`.

#### AttachmentsRelationManager
```php
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;

class AttachmentsRelationManager extends RelationManager
{
    protected static string $relationship = 'attachments';
    
    public function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            FileUpload::make('file')
                ->required()
                ->directory('tickets/attachments')
                ->acceptedFileTypes(['application/pdf', 'image/*']),
            TextInput::make('description')
                ->maxLength(255),
        ]);
    }
}
```

#### CommentsRelationManager
```php
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;

class CommentsRelationManager extends RelationManager
{
    protected static string $relationship = 'comments';
    
    public function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            RichEditor::make('content')
                ->required()
                ->maxLength(65535),
        ]);
    }
}
```

### Note Importanti per RelationManager

1. **Estensione Corretta**:
   - Estendere direttamente `Filament\Resources\RelationManagers\RelationManager`
   - Non esiste una classe base XotBaseRelationManager nel modulo Xot
   - Mantenere consistenza in tutto il modulo

2. **Namespace**:
   ```php
   use Filament\Resources\RelationManagers\RelationManager;
   ```

3. **Funzionalità**:
   - Utilizzare le funzionalità standard di Filament
   - Implementare la logica di autorizzazione quando necessario
   - Aggiungere logging personalizzato se richiesto

### Traduzioni

#### 1. Struttura File Traduzioni
```
Modules/Fixcity/
└── lang/
    ├── it/
    │   └── ticket.php    # Traduzioni italiane
    └── en/
        └── ticket.php    # Traduzioni inglesi
```

#### 2. Formato Traduzioni
```php
// lang/it/ticket.php
return [
    'fields' => [
        'nome_campo' => [
            'label' => 'Etichetta Campo',
            'placeholder' => 'Placeholder Campo',
            'help' => 'Testo Aiuto',
            'options' => [
                'key' => 'Valore',
            ],
        ],
    ],
];
```

#### 3. Utilizzo nelle Risorse Filament
```php
TextColumn::make('id')
    ->label(trans('fixcity::ticket.fields.id.label'))
    ->sortable(),

TextColumn::make('title')
    ->label(trans('fixcity::ticket.fields.title.label'))
    ->placeholder(trans('fixcity::ticket.fields.title.placeholder'))
    ->helperText(trans('fixcity::ticket.fields.title.help'))
    ->searchable(),

Select::make('status')
    ->label(trans('fixcity::ticket.fields.status.label'))
    ->options(trans('fixcity::ticket.fields.status.options'))
    ->placeholder(trans('fixcity::ticket.fields.status.placeholder')),
```

#### 4. Best Practices Traduzioni

1. **Struttura Gerarchica**:
   - Raggruppa per contesto (fields, actions, messages)
   - Usa nomi descrittivi per le chiavi
   - Mantieni coerenza tra le lingue

2. **Campi Form**:
   ```php
   'fields' => [
       'campo' => [
           'label' => 'Etichetta',
           'placeholder' => 'Placeholder',
           'help' => 'Testo aiuto',
       ],
   ],
   ```

3. **Messaggi di Sistema**:
   ```php
   'messages' => [
       'created' => 'Elemento creato',
       'updated' => 'Elemento aggiornato',
       'deleted' => 'Elemento eliminato',
   ],
   ```

4. **Opzioni Select**:
   ```php
   'options' => [
       'key1' => 'Valore 1',
       'key2' => 'Valore 2',
   ],
   ```

#### 5. Validazione Traduzioni

1. **Completezza**:
   - Tutte le stringhe devono essere tradotte
   - Nessuna stringa hardcoded nel codice
   - Traduzioni per tutti i messaggi di sistema

2. **Coerenza**:
   - Stessa struttura in tutte le lingue
   - Stessi placeholder e helper text
   - Stesse opzioni per i select

3. **Manutenibilità**:
   - Commenti per contesto quando necessario
   - Raggruppamento logico delle traduzioni
   - Nomi chiavi descrittivi e coerenti
```

### Azioni Personalizzate

#### GenerateTicketsAction
```php
class GenerateTicketsAction
{
    use QueueableAction;

    public function execute(int $count): void
    {
        Bus::batch(
            collect(range(1, $count))
                ->map(fn () => function () {
                    Ticket::factory()->create();
                })
        )->dispatch();
    }
}
```

Questa azione:
- Utilizza Spatie Queueable Actions
- Genera ticket in background
- Supporta batch processing
- È integrata nella UI di Filament

#### Integrazione in ListTickets
```php
Actions\Action::make('generateTickets')
    ->label('Genera Ticket')
    ->form([
        Forms\Components\TextInput::make('count')
            ->label('Numero di Ticket da Generare')
            ->numeric()
            ->required()
            ->minValue(1)
            ->maxValue(100),
    ])
    ->action(function (array $data, GenerateTicketsAction $action) {
        $action->execute($data['count']);
    })
```

#### Note Importanti
1. **Queue Configuration**:
   - Assicurarsi che le code siano configurate
   - Impostare il worker delle code
   - Monitorare la coda per errori

2. **Factory Setup**:
   - Definire factory realistiche
   - Includere relazioni necessarie
   - Gestire stati e priorità random

3. **UI Feedback**:
   - Notifiche di avvio processo
   - Indicatore di progresso
   - Gestione errori
```

### Factories

#### TicketFactory
```php
class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraphs(3, true),
            'status' => $this->faker->randomElement(['open', 'in_progress', 'resolved', 'closed']),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high', 'urgent']),
            // ...
        ];
    }

    // Stati predefiniti
    public function open(): self
    public function urgent(): self
    public function resolved(): self
}
```

#### Utilizzo nelle Actions
```php
class GenerateTicketsAction
{
    use QueueableAction;

    public function execute(int $count): void
    {
        Bus::batch(
            collect(range(1, $count))
                ->map(fn () => function () use ($states) {
                    match($this->faker->randomElement(['open', 'urgent', 'resolved'])) {
                        'open' => Ticket::factory()->open()->create(),
                        'urgent' => Ticket::factory()->urgent()->create(),
                        'resolved' => Ticket::factory()->resolved()->create(),
                        default => Ticket::factory()->create(),
                    };
                })
        )->dispatch();
    }
}
```

### Note Importanti

1. **Factory States**:
   - Definire stati comuni riutilizzabili
   - Combinare stati quando necessario
   - Mantenere la coerenza dei dati

2. **Dati Realistici**:
   - Usare Faker per dati verosimili
   - Rispettare le relazioni tra modelli
   - Gestire correttamente le date

3. **Performance**:
   - Generare dati in batch
   - Utilizzare le code per operazioni lunghe
   - Ottimizzare le query di inserimento

# Analisi Moduli Fixcity e Ticket

## Modulo Fixcity

### Struttura
```
Modules/Fixcity/
├── app/
│   ├── Filament/
│   │   ├── Resources/
│   │   │   └── TicketResource/
│   │   │       ├── Pages/
│   │   │       └── RelationManagers/
│   │   ├── Models/
│   │   │   └── Ticket.php
│   │   └── Providers/
│   │       └── FixcityServiceProvider.php
│   └── resources/
│       └── views/
│           └── livewire/
│               └── ticket/
```

### Modello Ticket
Il modello Ticket in Fixcity estende il modello base del modulo Ticket:

```php
namespace Modules\Fixcity\Models;

use Modules\Xot\Models\XotBaseModel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Modules\Fixcity\Enums\{TicketStatus, TicketPriority};

class Ticket extends XotBaseModel implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'location',
        'category_id',
        'user_id',
        'assigned_to'
    ];

    protected $casts = [
        'status' => TicketStatus::class,
        'priority' => TicketPriority::class,
    ];

    // Relazioni
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }

    public function assignedTo()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'assigned_to');
    }

    // Media Library
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('attachments')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'application/pdf'])
            ->maxFileSize(10 * 1024 * 1024);
    }
}
```

### TicketResource
```php
namespace Modules\Fixcity\Filament\Resources;

use Modules\Fixcity\Models\Ticket;
use Modules\Fixcity\Enums\{TicketStatus, TicketPriority};
use Modules\Xot\Filament\Resources\XotBaseResource;

class TicketResource extends XotBaseResource
{
    protected static ?string $model = Ticket::class;

    public static function getNavigationGroup(): ?string
    {
        return __('Segnalazioni');
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->required()
                ->maxLength(255),
            Select::make('category_id')
                ->relationship('category', 'name')
                ->required(),
            Select::make('status')
                ->options(TicketStatus::asSelectArray())
                ->required(),
            Select::make('priority')
                ->options(TicketPriority::asSelectArray())
                ->required(),
            // ...
        ]);
    }
}
```

## Modulo Ticket

### Struttura Base
```
Modules/Ticket/
├── app/
│   ├── Enums/                    # Spostato da Ticket
│   │   ├── TicketPriority.php
│   │   └── TicketStatus.php
│   ├── Models/
│   │   └── Ticket.php           # Unificato con BaseTicket
│   └── Providers/
│       └── TicketServiceProvider.php
└── database/
    └── migrations/
```

### Enumerazioni

#### TicketStatus
```php
namespace Modules\Fixcity\Enums;

enum TicketStatus: string
{
    case OPEN = 'open';
    case IN_PROGRESS = 'in_progress';
    case RESOLVED = 'resolved';
    case CLOSED = 'closed';

    public function label(): string
    {
        return match($this) {
            self::OPEN => __('Aperto'),
            self::IN_PROGRESS => __('In Lavorazione'),
            self::RESOLVED => __('Risolto'),
            self::CLOSED => __('Chiuso'),
        };
    }
}
```

#### TicketPriority
```php
namespace Modules\Fixcity\Enums;

enum TicketPriority: string
{
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
    case URGENT = 'urgent';

    public function label(): string
    {
        return match($this) {
            self::LOW => __('Bassa'),
            self::MEDIUM => __('Media'),
            self::HIGH => __('Alta'),
            self::URGENT => __('Urgente'),
        };
    }
}
```

### Modello Base Ticket
```php
namespace Modules\Ticket\Models;

use Modules\Xot\Models\XotBaseModel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Ticket extends XotBaseModel implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'user_id',
        'assigned_to'
    ];

    protected $casts = [
        'status' => TicketStatus::class,
        'priority' => TicketPriority::class,
    ];

    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }

    public function assignedTo()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'assigned_to');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('attachments')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'application/pdf'])
            ->maxFileSize(10 * 1024 * 1024); // 10MB
    }
}
```

### Workflow del Ticket

1. **Creazione**:
   - Utente compila form con dettagli
   - Status iniziale: OPEN
   - Possibilità di allegare media
   - Assegnazione automatica categoria

2. **Gestione**:
   - Operatori possono:
     - Modificare status
     - Aggiornare priorità
     - Assegnare a operatori
     - Aggiungere note interne

3. **Risoluzione**:
   - Operatore marca come RESOLVED
   - Utente può confermare
   - Status finale: CLOSED

### Integrazioni

1. **Media Library**:
   - Gestione allegati
   - Conversioni immagini
   - Validazione file

2. **Notifiche**:
   - Email automatiche
   - Notifiche in-app
   - Webhook per integrazioni

3. **Geolocalizzazione**:
   - Coordinate ticket
   - Visualizzazione mappa
   - Clustering segnalazioni 