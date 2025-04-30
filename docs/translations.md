# Traduzioni del Modulo Media

## Collegamenti

- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale sulle traduzioni
- [Regole Generali Traduzioni](../../Xot/docs/translations.md)

## Struttura

```
Modules/Media/
└── lang/
    ├── it/
    │   └── media.php
    └── en/
        └── media.php
```

## Contenuto

Il file `media.php` contiene le traduzioni per:
- Gestione file
- Upload
- Download
- Gallerie
- Album
- Categorie media
- Tag media
- Metadati
- Permessi file
- Formati supportati

## Esempi

```php
return [
    'upload' => [
        'label' => 'Carica File',
        'tooltip' => 'Seleziona i file da caricare'
    ],
    'gallery' => [
        'label' => 'Galleria',
        'tooltip' => 'Visualizza la galleria dei media'
    ],
    'formats' => [
        'label' => 'Formati Supportati',
        'tooltip' => 'Lista dei formati file supportati'
    ],
    'permissions' => [
        'label' => 'Permessi File',
        'tooltip' => 'Gestisci i permessi dei file'
    ]
];
``` 