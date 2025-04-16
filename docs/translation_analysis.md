# Analisi File di Traduzione

## Ricerca dei File di Traduzione
```bash
cd /var/www/html/_bases/base_fixcity_fila3/

# Cerco directory di traduzione
find . -type d -name "lang" -o -name "i18n" -o -name "translations"

# Cerco file di traduzione
find . -type f -name "*.php" -path "*/lang/*"
find . -type f -name "*.json" -path "*/lang/*"
find . -type f -name "*.yml" -path "*/lang/*"

# Cerco specificamente file di traduzione per la navigazione
find . -type f -exec grep -l "menu\|navigation" {} \;
```

## Struttura delle Traduzioni
[Documenterò qui la struttura effettiva trovata]

### Directory delle Traduzioni
```
./lang/
  ├── it/
  │   ├── navigation.php
  │   └── messages.php
  └── en/
      ├── navigation.php
      └── messages.php
```

### Contenuto dei File
[Documenterò qui il contenuto effettivo dei file di traduzione trovati]

1. File navigation.php:
   ```php
   // Contenuto del file
   ```

2. File messages.php:
   ```php
   // Contenuto del file
   ```

## Analisi del Sistema di Traduzione
1. Come vengono caricate le traduzioni
2. Come vengono gestite le icone nelle traduzioni
3. Relazione tra traduzioni e sistema di navigazione

[Continuerò ad aggiornare questo documento con i risultati effettivi dell'analisi] 