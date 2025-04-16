# Struttura Frontend

## 1. Organizzazione Assets
```
/public/assets/
├── css/
│   ├── app.css
│   └── vendor/
├── js/
│   ├── app.js
│   └── components/
├── images/
│   └── icons/
└── fonts/
```

## 2. Componenti UI
### Navigazione Principale
```html
<nav class="main-nav">
    <ul class="nav-list">
        <li class="nav-item">
            <a href="/dashboard">
                <i class="nav-icon dashboard-icon"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- Altri elementi di navigazione -->
    </ul>
</nav>
```

### Sistema di Icone
```css
.nav-icon {
    width: 24px;
    height: 24px;
    display: inline-block;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
}

/* Esempi di icone specifiche */
.dashboard-icon {
    background-image: url('../images/icons/dashboard.svg');
}

.reports-icon {
    background-image: url('../images/icons/reports.svg');
}
```

## 3. Gestione delle Icone
### Convenzioni di Naming
- I file delle icone seguono il pattern: `icon-[nome]-[dimensione].svg`
- Esempio: `icon-dashboard-24.svg`, `icon-reports-32.svg`

### Struttura Directory Icone
```
/public/assets/images/icons/
├── navigation/
│   ├── dashboard.svg
│   ├── reports.svg
│   └── settings.svg
├── status/
│   ├── success.svg
│   ├── warning.svg
│   └── error.svg
└── actions/
    ├── edit.svg
    ├── delete.svg
    └── add.svg
```

### Helper Functions
```php
function getIconPath($name, $size = 24) {
    return "/assets/images/icons/{$name}-{$size}.svg";
}

function renderIcon($name, $size = 24, $class = '') {
    $path = getIconPath($name, $size);
    return "<i class='nav-icon {$class}' style='background-image: url({$path})'></i>";
}
```

## 4. Responsive Design
```css
/* Mobile adjustments */
@media (max-width: 768px) {
    .nav-icon {
        width: 20px;
        height: 20px;
    }
    
    .nav-text {
        display: none; /* Hide text on mobile */
    }
}
```

## 5. Performance Considerations
- Utilizzo di SVG per scalabilità e performance
- Sprite SVG per ridurre le richieste HTTP
- Lazy loading per icone non immediatamente visibili
- Caching appropriato per le risorse statiche 