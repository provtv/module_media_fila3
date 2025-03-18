# Flusso del Sistema di Navigazione e Icone

## 1. Struttura Base
```
/laravel/
├── Modules/
│   ├── User/
│   │   └── resources/
│   │       └── svg/
│   │           └── navigation/
│   │               ├── user-icon.svg
│   │               ├── user-permission-icon.svg
│   │               └── user-role-icon.svg
│   └── Xot/
│       ├── lang/
│       │   ├── it/
│       │   │   ├── navs.php
│       │   │   └── menus.php
│       │   └── en/
│       │       ├── navs.php
│       │       └── menus.php
│       └── resources/
│           └── img/
└── config/
    └── blade-icons.php
```

## 2. Processo di Caricamento
1. Inizializzazione:
   ```php
   // config/blade-icons.php
   return [
       'sets' => [
           'navigation' => [
               'path' => 'Modules/User/resources/svg/navigation'
           ]
       ]
   ];
   ```

2. Definizione Menu:
   ```php
   // Modules/Xot/lang/it/navs.php
   return [
       'user' => [
           'title' => 'Utenti',
           'icon' => 'user-icon',
           'permissions' => [
               'title' => 'Permessi',
               'icon' => 'user-permission-icon'
           ]
       ]
   ];
   ```

3. Rendering nel Template:
   ```php
   <nav>
       @foreach($menuItems as $item)
           <a href="{{ $item['url'] }}">
               <x-icon :name="__('navs.'.$item['key'].'.icon')" />
               <span>{{ __('navs.'.$item['key'].'.title') }}</span>
           </a>
       @endforeach
   </nav>
   ```

## 3. Gestione Multilingua
- Le traduzioni sono caricate in base alla lingua corrente
- Fallback alla lingua predefinita se mancante
- Le icone mantengono lo stesso riferimento in tutte le lingue

## 4. Caching e Performance
1. Blade Icons:
   - Cache delle icone SVG compilate
   - Ottimizzazione automatica SVG
   - Riutilizzo dei componenti renderizzati

2. Traduzioni:
   - Cache delle traduzioni
   - Caricamento lazy delle lingue
   - Ottimizzazione delle query al database

## 5. Manutenzione
1. Aggiungere Nuove Icone:
   - Creare file SVG in `/Modules/User/resources/svg/navigation/`
   - Aggiungere riferimento nei file di traduzione
   - Aggiornare la cache delle icone

2. Aggiungere Nuove Voci Menu:
   - Aggiungere traduzioni in tutti i file lingua
   - Configurare permessi se necessario
   - Associare icone appropriate 