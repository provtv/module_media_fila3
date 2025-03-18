# Localizzazione e Icone

## Struttura delle Traduzioni
```
/resources/lang/
├── en/
│   ├── navigation.php
│   └── messages.php
└── it/
    ├── navigation.php
    └── messages.php
```

## Gestione Icone nella Navigazione
Le icone potrebbero essere definite nei file di traduzione insieme al testo:

```php
// /resources/lang/it/navigation.php
return [
    'menu' => [
        'dashboard' => [
            'text' => 'Dashboard',
            'icon' => 'fa-tachometer-alt'  // Potrebbe usare FontAwesome o altro sistema
        ],
        'reports' => [
            'text' => 'Segnalazioni',
            'icon' => 'fa-flag'
        ]
    ]
];
```

## Integrazione tra Localizzazione e Icone

### 1. Blade Heroicons
Il sistema utilizza Blade Heroicons come principale sistema di icone:

```php
// config/blade-heroicons.php
return [
    'prefix' => 'heroicon',    // Prefisso per tutte le icone
    'fallback' => '',         // Icona di fallback
    'class' => '',           // Classi CSS predefinite
    'attributes' => []      // Attributi predefiniti
];
```

### 2. Storage nel Database
Le icone sono memorizzate nella tabella `categories`:
```sql
CREATE TABLE categories (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    icon VARCHAR(255),    // Riferimento all'icona
    ...
);
```

### 3. Organizzazione File
Le icone sono organizzate in diverse directory:
- `/laravel/Modules/User/resources/svg/navigation/` - Icone di navigazione
- `/laravel/Modules/Xot/resources/img/` - Icone di sistema
- Supporto per SVG, PNG, e ICO

## Sistema di Localizzazione

### 1. File di Lingua
I menu e le navigazioni sono localizzati attraverso file di lingua:
- `/laravel/Modules/Xot/lang/[LOCALE]/menus.php`
- `/laravel/Modules/Xot/lang/[LOCALE]/navs.php`

### 2. Struttura dei Menu Localizzati
```php
// menus.php
return [
    'backend' => [
        'access' => [
            'title' => 'Gestione accessi',
            'roles' => [
                'all' => 'Tutti i ruoli',
                'create' => 'Crea ruolo',
                // ...
            ],
            // ...
        ],
        // ...
    ],
    'language-picker' => [
        'language' => 'Lingua',
        'langs' => [
            'it' => 'Italiano (Italian)',
            'en' => 'Inglese (English)',
            // ...
        ]
    ]
];
```

## Integrazione

### 1. Componenti di Navigazione
I componenti combinano icone e testo localizzato:
```php
<x-ui::nav-link>
    <x-heroicon-o-home class="w-5 h-5" />
    {{ __('menus.backend.dashboard') }}
</x-ui::nav-link>
```

### 2. Builder di Navigazione
Il navigation builder supporta:
- Icone personalizzabili per ogni voce
- Testi localizzati
- Ordinamento drag-and-drop
- Gestione gerarchica

### 3. Header Navigation
L'header combina:
- Logo/branding
- Menu localizzati
- Icone di sistema
- Switcher lingua
- Notifiche

## Best Practices

### 1. Naming Convention
- Icone: `[context]-icon.svg`
- Chiavi di traduzione: `menus.[section].[item]`
- Componenti: `nav-[type].blade.php`

### 2. Organizzazione
1. Separare le icone per contesto
2. Mantenere i file di lingua organizzati
3. Utilizzare componenti riutilizzabili
4. Seguire una struttura gerarchica coerente

### 3. Performance
1. Ottimizzare le icone SVG
2. Utilizzare il caching per le traduzioni
3. Lazy loading quando possibile
4. Minimizzare le richieste HTTP

### 4. Accessibilità
1. Aggiungere attributi alt alle icone
2. Utilizzare aria-label per i menu
3. Supportare la navigazione da tastiera
4. Mantenere un contrasto adeguato

## Domande da Verificare
- [ ] Controllare se il sistema usa effettivamente i file di traduzione per le icone
- [ ] Verificare se viene utilizzato un sistema di icon fonts (FontAwesome, Material Icons, etc.)
- [ ] Controllare se le icone sono definite nel database insieme alle traduzioni
- [ ] Esaminare come vengono gestite le icone in relazione al multilinguismo

Devo continuare ad analizzare il sistema per capire esattamente come vengono gestite le icone di navigazione. Potresti darmi accesso ai file di traduzione o indicarmi dove posso trovare questa implementazione?

## TODO
- [ ] Implementare un sistema di gestione icone centralizzato
- [ ] Migliorare la documentazione dei componenti
- [ ] Aggiungere supporto per RTL nelle icone
- [ ] Ottimizzare il caricamento delle icone
- [ ] Implementare preview delle icone nell'admin