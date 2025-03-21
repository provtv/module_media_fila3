# Analisi del Sistema di Selezione Lingua nella Navigazione

## Struttura del Componente

### 1. Componente Language Switcher (`language.blade.php`)
Il sistema implementa un selettore di lingua nella barra di navigazione:

```php
<div>
    <button data-dropdown-toggle="dropdown-language">
        <div class="flex items-center space-x-1">
            <x-heroicon-o-language class="size-5"/>
            <span class="hidden sm:block">English</span>
            <x-heroicon-o-chevron-down class="hidden size-4 sm:block"/>
        </div>
    </button>
    <div id="dropdown-language">
        <!-- Lista delle lingue -->
    </div>
</div>
```

### 2. Interfaccia Utente
Il componente presenta:
- Icona globo per le lingue
- Testo della lingua corrente (visibile su desktop)
- Dropdown con lista delle lingue disponibili
- Bandiere nazionali per ogni lingua

## Caratteristiche Principali

### 1. Struttura del Dropdown
```html
<div id="dropdown-language" class="...">
    <ul>
        <!-- Inglese -->
        <li>
            <button class="...">
                <svg class="flag-icon-us">...</svg>
                <div>English</div>
            </button>
        </li>
        <!-- Italiano -->
        <li>
            <button class="...">
                <svg class="flag-icon-it">...</svg>
                <div>Italiano</div>
            </button>
        </li>
    </ul>
</div>
```

### 2. Design e Stile
- Utilizzo di Tailwind CSS
- Effetti di trasparenza (backdrop-blur)
- Bandiere SVG inline
- Design responsive
- Hover states interattivi

### 3. Responsive Design
- Nasconde il testo su mobile (`hidden sm:block`)
- Mantiene l'icona globo sempre visibile
- Dropdown adattivo
- Layout flessibile

## Implementazione Tecnica

### 1. Struttura HTML
```html
<button class="language-selector">
    <!-- Icona Globo -->
    <x-heroicon-o-language/>
    
    <!-- Testo Lingua (Desktop) -->
    <span class="hidden sm:block">
        English
    </span>
    
    <!-- Icona Dropdown (Desktop) -->
    <x-heroicon-o-chevron-down class="hidden sm:block"/>
</button>
```

### 2. Bandiere SVG
Le bandiere sono implementate come SVG inline:
```html
<!-- Bandiera USA -->
<svg class="flag-icons-us">
    <path fill="#bd3d44" d="..."/>
    <path stroke="#fff" d="..."/>
    <path fill="#192f5d" d="..."/>
</svg>

<!-- Bandiera Italia -->
<svg class="flag-icons-it">
    <g fill-rule="evenodd">
        <path fill="#fff" d="..."/>
        <path fill="#009246" d="..."/>
        <path fill="#ce2b37" d="..."/>
    </g>
</svg>
```

### 3. Stili CSS (Tailwind)
- Layout e Posizionamento:
  - `grid`, `flex` per allineamento
  - `space-x-*` per spaziatura
  - `size-*` per dimensioni
- Effetti Visivi:
  - `backdrop-blur` per trasparenza
  - `hover:bg-white` per interazioni
  - `rounded-lg` per bordi
- Responsive:
  - `hidden sm:block` per visibilità
  - `w-[240px]` per larghezza fissa
  - `max-w-sm` per responsività

## Best Practices

### 1. Accessibilità
1. Testo alternativo per le bandiere
2. Supporto per screen reader
3. Navigazione da tastiera
4. Contrasto adeguato

### 2. Internazionalizzazione
1. Nomi delle lingue localizzati
2. Supporto RTL dove necessario
3. Fallback per lingue non supportate
4. Persistenza della selezione

### 3. Performance
1. SVG ottimizzati
2. Lazy loading del dropdown
3. Caching delle preferenze
4. Minimizzazione del DOM

### 4. UX Design
1. Feedback visivo immediato
2. Selezione lingua intuitiva
3. Persistenza delle preferenze
4. Transizioni fluide

## TODO
- [ ] Aggiungere più lingue supportate
- [ ] Implementare persistenza delle preferenze
- [ ] Migliorare le animazioni del dropdown
- [ ] Aggiungere supporto per RTL
- [ ] Ottimizzare le bandiere SVG
- [ ] Implementare test di accessibilità
