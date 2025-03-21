# Gestione Icone di Navigazione

## Struttura
Dalla tabella `categories`, vedo che le icone sono memorizzate nel campo `icon` come VARCHAR(255), ma devo analizzare meglio come vengono effettivamente gestite nel sistema.

## Possibili Implementazioni
1. Le icone potrebbero essere:
   - File SVG/PNG memorizzati nella directory assets
   - Nomi di classi di font-icon (es: FontAwesome)
   - URL a risorse esterne
   - Path relativi a file nel filesystem

## TODO
- [ ] Analizzare il codice frontend per capire come vengono renderizzate le icone
- [ ] Verificare se esistono convenzioni di naming specifiche
- [ ] Controllare se esiste una directory dedicata alle icone
- [ ] Esaminare eventuali helper o componenti dedicati alla gestione delle icone

Per favore, potresti fornirmi accesso al codice frontend o indicarmi dove posso trovare l'implementazione delle icone di navigazione? Questo mi permetterebbe di documentare correttamente il loro utilizzo. 