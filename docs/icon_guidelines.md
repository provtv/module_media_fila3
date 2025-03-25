# Linee Guida per le Icone

## 1. Formato File
- Utilizzare preferibilmente SVG per:
  - Scalabilità
  - Dimensioni file ridotte
  - Possibilità di modificare colori via CSS
  - Supporto per l'accessibilità

## 2. Naming Convention
- Tutti i file devono seguire il pattern: `icon-[categoria]-[nome]-[dimensione].svg`
- Esempio: `icon-nav-dashboard-24.svg`

## 3. Dimensioni Standard
- 16x16px: icone molto piccole
- 24x24px: dimensione default per la navigazione
- 32x32px: icone più grandi per elementi focali
- 48x48px: icone per hero sections o elementi prominenti

## 4. Ottimizzazione
- Ottimizzare tutti i file SVG con SVGO
- Rimuovere metadati non necessari
- Minimizzare il numero di path
- Utilizzare viewBox appropriati

## 5. Accessibilità
- Includere sempre attributi `aria-label`
- Fornire testo alternativo quando necessario
- Assicurarsi che il contrasto sia sufficiente
- Testare con screen reader 