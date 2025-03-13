# Piano di Migrazione: Ticket → Fixcity

## 1. Preparazione

### 1.1 Backup
```bash
# Backup del modulo Ticket
cp -r laravel/Modules/Ticket laravel/Modules/Ticket_backup
```

### 1.2 Analisi Dipendenze
- Verificare tutte le dipendenze nel composer.json di Ticket
- Aggiungere le dipendenze necessarie al composer.json di Fixcity
- Aggiornare i provider in config/app.php

## 2. Migrazione Struttura

### 2.1 Namespace Updates
```php
// Da
namespace Modules\Ticket\*;
// A
namespace Modules\Fixcity\Ticket\*;
```

### 2.2 Directory da Spostare
```bash
# In Fixcity/app creare la struttura:
mkdir -p laravel/Modules/Fixcity/app/Ticket/{
    Actions,
    Models,
    Events,
    Listeners,
    Notifications,
    Policies,
    Services
}

# Spostare i file mantenendo la struttura
mv laravel/Modules/Ticket/app/Models/* laravel/Modules/Fixcity/app/Ticket/Models/
mv laravel/Modules/Ticket/app/Events/* laravel/Modules/Fixcity/app/Ticket/Events/
# ... e così via per ogni directory
```

## 3. Aggiornamenti Codice

### 3.1 Update Models
```php
// Prima
namespace Modules\Ticket\Models;

// Dopo
namespace Modules\Fixcity\Ticket\Models;

class Ticket extends Model
{
    // Aggiornare eventuali riferimenti ai namespace
}
```

### 3.2 Update Service Provider
```php
namespace Modules\Fixcity\Providers;

class FixcityServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Aggiungere registrazione servizi Ticket
        $this->app->bind(TicketRepositoryInterface::class, TicketRepository::class);
    }
}
```

### 3.3 Update Filament Resources
```php
namespace Modules\Fixcity\Filament\Resources;

class TicketResource extends Resource
{
    protected static ?string $model = \Modules\Fixcity\Ticket\Models\Ticket::class;
}
```

## 4. Database

### 4.1 Migrazioni
```bash
# Spostare le migrazioni
mv laravel/Modules/Ticket/database/migrations/* laravel/Modules/Fixcity/database/migrations/
```

### 4.2 Factories e Seeders
```bash
# Spostare factories e seeders
mv laravel/Modules/Ticket/database/factories/* laravel/Modules/Fixcity/database/factories/
mv laravel/Modules/Ticket/database/seeders/* laravel/Modules/Fixcity/database/seeders/
```

## 5. Views e Assets

### 5.1 Views
```bash
# Spostare le views
mv laravel/Modules/Ticket/resources/views/* laravel/Modules/Fixcity/resources/views/ticket/
```

### 5.2 Assets
```bash
# Spostare gli assets
mv laravel/Modules/Ticket/resources/assets/* laravel/Modules/Fixcity/resources/assets/ticket/
```

## 6. Routes

### 6.1 Update Routes
```php
// In Fixcity/routes/web.php
Route::prefix('ticket')->group(function () {
    // Includere qui tutte le routes del modulo Ticket
});

// In Fixcity/routes/api.php
Route::prefix('api/ticket')->group(function () {
    // Includere qui tutte le API routes del modulo Ticket
});
```

## 7. Testing

### 7.1 Spostare i Test
```bash
mv laravel/Modules/Ticket/tests/* laravel/Modules/Fixcity/tests/Ticket/
```

### 7.2 Aggiornare i Namespace nei Test
```php
namespace Modules\Fixcity\Tests\Ticket;

class TicketTest extends TestCase
{
    // Aggiornare i namespace nei test
}
```

## 8. Configurazione

### 8.1 Config Files
```php
// Spostare e unire le configurazioni
// In Fixcity/config/config.php

return [
    // Config esistente Fixcity
    
    'ticket' => [
        // Config del modulo Ticket
    ]
];
```

## 9. Pulizia

### 9.1 Rimozione Modulo Ticket
```bash
# Solo dopo aver verificato che tutto funzioni
rm -rf laravel/Modules/Ticket
```

### 9.2 Composer Update
```bash
composer remove laraxot/module_ticket_fila3
composer update
```

## 10. Verifica

### 10.1 Checklist
- [ ] Tutti i file sono stati spostati
- [ ] I namespace sono stati aggiornati
- [ ] Le dipendenze sono state migrate
- [ ] I test passano
- [ ] Le routes funzionano
- [ ] Il pannello admin funziona
- [ ] Le API funzionano
- [ ] Le notifiche funzionano
- [ ] Gli eventi funzionano

### 10.2 Test Completo
```bash
php artisan test --filter=Ticket
```

## 11. Documentazione

### 11.1 Aggiornare README
```markdown
# Modulo Fixcity

## Funzionalità
- Gestione segnalazioni
- Sistema ticketing integrato
- ...
```

### 11.2 Aggiornare API Docs
- Aggiornare tutti i riferimenti ai namespace
- Aggiornare gli esempi di codice
- Aggiornare i path delle API

## Note Importanti

1. **Backup**
   - Mantenere il backup fino a verifica completa
   - Testare in ambiente di staging prima

2. **Gradualità**
   - Eseguire la migrazione per fasi
   - Testare ogni fase prima di procedere

3. **Comunicazione**
   - Informare il team della migrazione
   - Documentare tutti i cambiamenti

4. **Rollback Plan**
   - Mantenere procedure di rollback
   - Backup dei dati critici 