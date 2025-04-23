# Analisi phpstan livello 2 - Modulo Media

## Riepilogo degli errori
- Totale errori: 2
- File con errori: 1 (`ConvertVideoAction.php`)

## Dettaglio degli errori

### 1. Classe non trovata - `ConvertVideoAction.php` riga 54

**Errore:**
```
Class ProtoneMedia\LaravelFFMpeg\FFMpeg\MediaExporter not found.
```

**Contesto:**
Nel file `ConvertVideoAction.php` viene importata e utilizzata la classe `MediaExporter` con un namespace errato.

### 2. Chiamata a metodo su classe sconosciuta - `ConvertVideoAction.php` riga 61

**Errore:**
```
Call to method toDisk() on an unknown class ProtoneMedia\LaravelFFMpeg\FFMpeg\MediaExporter.
```

**Contesto:**
Si sta tentando di chiamare il metodo `toDisk()` sulla classe `MediaExporter` che non può essere risolta a causa del namespace errato.

## Soluzione proposta

Entrambi gli errori sono correlati allo stesso problema: l'uso di un namespace errato per la classe `MediaExporter`. La soluzione consiste nel modificare l'importazione della classe nel file `ConvertVideoAction.php`:

```php
// Modificare questa riga:
use ProtoneMedia\LaravelFFMpeg\FFMpeg\MediaExporter;

// Con questa:
use ProtoneMedia\LaravelFFMpeg\Exporters\MediaExporter;
```

Dopo aver corretto il namespace, phpstan sarà in grado di risolvere correttamente la classe e verificare le chiamate ai suoi metodi.

## Note sulla libreria laravel-ffmpeg

La libreria laravel-ffmpeg gestisce le operazioni sui media in Laravel utilizzando FFmpeg. La classe `MediaExporter` è responsabile della gestione delle operazioni di esportazione e conversione dei media.

In base alla documentazione e all'analisi del codice, i metodi principali della classe `MediaExporter` includono:
- `toDisk(string $disk)`: specifica il disco di storage su cui salvare il file di output
- `inFormat(Format $format)`: specifica il formato in cui convertire il media
- `save(string $path)`: esegue la conversione e salva il file nel percorso specificato

La correzione del namespace garantirà il corretto funzionamento dell'analisi statica e migliorerà la stabilità del codice.
