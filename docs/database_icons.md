# Gestione Icone nel Database

## Tabella Categories
```sql
CREATE TABLE categories (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    icon VARCHAR(255),    // Qui vengono memorizzate le icone
    active BOOLEAN DEFAULT TRUE,
    parent_id BIGINT UNSIGNED NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

## Analisi del Campo Icon
Il campo `icon` nella tabella `categories` è di tipo VARCHAR(255), questo suggerisce che:
1. Le icone sono probabilmente identificate da un nome o un codice
2. Potrebbero essere riferimenti a:
   - Classi CSS di un icon font system (es: "fa-home", "material-icons-home")
   - Nomi di file SVG
   - Path relativi a immagini
   - Identificatori univoci di icone

## Query di Esempio
```sql
-- Esempio di query per ottenere categorie con le loro icone
SELECT id, name, icon FROM categories WHERE active = TRUE;
```

## TODO
- [ ] Verificare come il campo icon viene utilizzato nel frontend
- [ ] Controllare se esiste un sistema di mapping tra il valore del campo e l'icona effettiva
- [ ] Analizzare se ci sono helper o funzioni dedicate al rendering delle icone 