# Analisi Approfondita del Sistema di Localizzazione

## Ricerca nei File di Localizzazione
```bash
cd /var/www/html/_bases/base_fixcity_fila3/

# Cerco tutti i file di localizzazione
find . -type f -name "messages.mo"
find . -type f -name "messages.po"
find . -type f -name "*.xlf"
find . -type f -name "*.properties"

# Cerco nelle directory standard di gettext
ls -R locale/
ls -R languages/
ls -R translations/
ls -R messages/

# Cerco file PHP con stringhe di traduzione
find . -type f -name "*.php" -exec grep -l "_(" {} \;
find . -type f -name "*.php" -exec grep -l "gettext" {} \;
```

## Analisi dei File di Traduzione
[Documenterò qui i file di traduzione trovati e il loro contenuto]

### Struttura delle Traduzioni
```
[Directory e file di traduzione trovati]
```

### Contenuto dei File
1. File di Traduzione:
   ```
   [Contenuto del file]
   ```

2. File PHP con Traduzioni:
   ```php
   [Contenuto del file]
   ```

## Sistema di Traduzione
1. Gestione delle Stringhe:
   - Come vengono caricate
   - Come vengono utilizzate
   - Pattern di traduzione

2. Gestione delle Icone:
   - Relazione con le traduzioni
   - Sistema di mapping
   - Convenzioni di naming

[Continuerò ad aggiornare con i risultati dell'analisi effettiva] 