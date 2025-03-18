# Guida ai Namespace dei Moduli

## Importanza del composer.json

Ogni modulo ha il proprio `composer.json` che definisce:
- Il namespace base del modulo
- La struttura delle directory
- Le dipendenze specifiche del modulo

### Regola Fondamentale
Prima di creare o modificare qualsiasi file in un modulo, è OBBLIGATORIO:
1. Leggere il `composer.json` del modulo specifico
2. Verificare la sezione `autoload.psr-4`
3. Rispettare il namespace definito

## Esempi Pratici

### 1. Modulo Fixcity
```json
// Modules/Fixcity/composer.json
{
    "autoload": {
        "psr-4": {
            "Modules\\Fixcity\\": "app/"
        }
    }
}
```
Quindi:
- ✅ Path corretto: `Modules/Fixcity/app/Models/Ticket.php`
- ✅ Namespace corretto: `Modules\Fixcity\Models\Ticket`
- ❌ Path errato: `Modules/Fixcity/Models/Ticket.php`
- ❌ Namespace errato: `Modules\Fixcity\App\Models\Ticket`

### 2. Modulo Ticket
```json
// Modules/Ticket/composer.json
{
    "autoload": {
        "psr-4": {
            "Modules\\Ticket\\": "app/"
        }
    }
}
```
Quindi:
- ✅ Path corretto: `Modules/Ticket/app/Services/TicketService.php`
- ✅ Namespace corretto: `Modules\Ticket\Services\TicketService`
- ❌ Path errato: `Modules/Ticket/Services/TicketService.php`
- ❌ Namespace errato: `Modules\Ticket\App\Services\TicketService`

## Errori Comuni da Evitare

### 1. Assumere una Struttura Standard
❌ NON assumere che tutti i moduli seguano la stessa struttura
```php
// ERRATO: Assumere che il namespace includa sempre 'app'
namespace Modules\ModuleName\App\Controllers;
```

### 2. Copiare da Altri Moduli
❌ NON copiare ciecamente la struttura da altri moduli
```bash
# ERRATO: Copiare la struttura senza verificare il composer.json
cp -r Modules/Fixcity/app/Models Modules/NewModule/app/
```

### 3. Namespace Hardcoded
❌ NON utilizzare namespace hardcoded nelle classi
```php
// ERRATO: Hardcodare i namespace nelle classi
use Modules\Fixcity\App\Models\Ticket;
```

## Best Practices

### 1. Verifica Preliminare
```bash
# Prima di creare nuovi file
cat Modules/ModuleName/composer.json | grep psr-4
```

### 2. Uso di Helper per i Namespace
```php
// Utilizzare helper per i namespace
namespace Modules\ModuleName;
use function base_path;
use function config;

class ServiceProvider
{
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
}
```

### 3. Documentazione nel README
```markdown
# ModuleName

## Struttura
Questo modulo segue la seguente struttura di namespace:
\`Modules\ModuleName\`: root directory del modulo
```

## Checklist per Nuovo Codice

1. ✅ Leggere il `composer.json` del modulo
2. ✅ Verificare la sezione `autoload.psr-4`
3. ✅ Controllare il path corretto per i nuovi file
4. ✅ Utilizzare il namespace corretto
5. ✅ Documentare la struttura nel README
6. ✅ Verificare tutti gli import

## Risoluzione Problemi Comuni

### 1. Classe Non Trovata
Se si riceve "Class Not Found":
1. Verificare il `composer.json` del modulo
2. Controllare il path del file
3. Verificare il namespace
4. Eseguire `composer dump-autoload`

### 2. Conflitti di Namespace
Se ci sono conflitti:
1. Controllare tutti i `composer.json` coinvolti
2. Verificare le dipendenze tra moduli
3. Risolvere usando namespace completi

## Note Importanti

1. **Modularità**: Ogni modulo è indipendente
2. **Consistenza**: Mantenere la struttura definita nel `composer.json`
3. **Documentazione**: Aggiornare sempre il README con la struttura
4. **Verifica**: Testare sempre l'autoloading dopo modifiche ai namespace 