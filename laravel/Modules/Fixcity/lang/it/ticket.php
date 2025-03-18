<?php

return [
    'fields' => [
        'id' => [
            'label' => 'ID',
            'placeholder' => 'Inserisci ID',
        ],
        'title' => [
            'label' => 'Titolo',
            'placeholder' => 'Inserisci il titolo',
            'help' => 'Inserisci un titolo descrittivo',
        ],
        'category' => [
            'name' => [
                'label' => 'Categoria',
                'placeholder' => 'Seleziona categoria',
            ],
            'label' => 'Categoria',
            'placeholder' => 'Filtra per categoria',
        ],
        'status' => [
            'label' => 'Stato',
            'placeholder' => 'Seleziona stato',
            'options' => [
                'open' => 'Aperto',
                'in_progress' => 'In Lavorazione',
                'resolved' => 'Risolto',
                'closed' => 'Chiuso',
            ],
        ],
        'priority' => [
            'label' => 'Priorità',
            'placeholder' => 'Seleziona la priorità',
            'help' => 'Indica l\'urgenza del ticket',
            'options' => [
                'low' => 'Bassa',
                'medium' => 'Media',
                'high' => 'Alta',
                'urgent' => 'Urgente',
            ],
        ],
        'content' => [
            'label' => 'Contenuto',
            'placeholder' => 'Descrivi il problema...',
            'help' => 'Fornisci una descrizione dettagliata',
        ],
        'created_at' => [
            'label' => 'Data Creazione',
        ],
        'updated_at' => [
            'label' => 'Ultima Modifica',
        ],
        'applyFilters' => [
            'label' => 'applyFilters',
        ],
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'value' => [
            'label' => 'value',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
        ],
        'count' => [
            'label' => 'count',
        ],
        'create' => [
            'label' => 'create',
        ],
        'edit' => [
            'label' => 'edit',
        ],
        'delete' => [
            'label' => 'delete',
        ],
        'openFilters' => [
            'label' => 'openFilters',
        ],
        'resetFilters' => [
            'label' => 'resetFilters',
        ],
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'help' => 'Inserisci un nome identificativo',
        ],
        'slug' => [
            'label' => 'Slug',
            'placeholder' => 'Inserisci lo slug',
            'help' => 'URL-friendly versione del nome',
        ],
        'type' => [
            'label' => 'Tipo',
            'placeholder' => 'Seleziona tipo',
            'options' => [
                'road_maintenance' => 'Manutenzione Stradale',
                'public_lighting' => 'Illuminazione Pubblica',
                'waste_collection' => 'Raccolta Rifiuti',
                'parks_and_gardens' => 'Aree Verdi e Parchi',
                'sewage_and_drainage' => 'Fognature e Drenaggi',
                'public_buildings' => 'Edifici Pubblici',
                'environmental_reports' => 'Segnalazioni Ambientali',
                'public_transport' => 'Trasporti Pubblici',
                'urban_furniture' => 'Arredo Urbano',
                'public_safety' => 'Sicurezza Pubblica',
                'complaint' => 'Reclamo',
                'suggestion' => 'Suggerimento',
                'report' => 'Segnalazione',
                'request' => 'Richiesta',
                'other' => 'Altro',
            ],
        ],
        'images' => [
            'label' => 'Immagini',
            'placeholder' => 'Carica immagini',
            'help' => 'Allega immagini al ticket',
        ],
        'search' => [
            'label' => 'Cerca',
            'placeholder' => 'Cerca nei ticket...',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Crea Ticket',
        ],
        'edit' => 'Modifica Ticket',
        'delete' => 'Elimina Ticket',
        'view' => 'Visualizza Ticket',
        'generateTickets' => [
            'label' => 'generateTickets',
        ],
    ],
    'messages' => [
        'created' => 'Ticket creato con successo',
        'updated' => 'Ticket aggiornato con successo',
        'deleted' => 'Ticket eliminato con successo',
        'no_tickets' => 'Nessun ticket trovato.',
    ],
    'navigation' => [
        'label' => 'ticket.navigation',
        'sort' => 89,
    ],
    'model' => [
        'label' => 'ticket.model',
    ],
];
