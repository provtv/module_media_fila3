# Sistema di Localizzazione e Integrazione con le Icone

## Struttura delle Traduzioni
```
/laravel/Modules/Xot/lang/
├── it/
│   ├── navs.php      # Traduzioni navigazione
│   └── menus.php     # Traduzioni menu
├── en/
│   ├── navs.php
│   └── menus.php
└── [altre lingue]/
```

## File di Traduzione per la Navigazione
```php
// /laravel/Modules/Xot/lang/it/navs.php
return [
    'user' => [
        'title' => 'Utenti',
        'icon' => 'user-icon',  // Riferimento all'icona SVG
        'permissions' => [
            'title' => 'Permessi',
            'icon' => 'user-permission-icon'
        ],
        'roles' => [
            'title' => 'Ruoli',
            'icon' => 'user-role-icon'
        ]
    ]
];
```

## Integrazione con Blade Icons
1. Riferimenti alle Icone:
   - I file di traduzione contengono i riferimenti alle icone
   - Le icone sono memorizzate come file SVG in `/laravel/Modules/User/resources/svg/navigation/`
   - Il sistema Blade Icons gestisce il rendering

2. Pattern di Utilizzo:
   ```php
   // Esempio di utilizzo nel template
   <x-icon :name="__('navs.user.icon')" />
   ```

3. Convenzioni di Naming:
   - File SVG: `[contesto]-icon.svg`
   - Riferimenti nelle traduzioni: `[contesto]-icon`
   - Organizzazione modulare per contesto

## Sistema di Fallback
- Lingua predefinita: 'en'
- Fallback icone: configurato in `blade-icons.php`
- Supporto per icone alternative quando mancanti 