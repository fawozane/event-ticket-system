<?php

return [
    'ctrl' => [
        'title' => 'Karte / Ticket-Typ',
        'label' => 'titel',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:ticket_system/Resources/Public/Icons/event.svg',
    ],

    'types' => [

        '0' => [
            'showitem' => 'hidden, --palette--;;header, event, ticket_typ, beschreibung, grund_preis, loge'
        ],
    ],
    'palettes' => [
        'header' => ['showitem' => 'titel'],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'Verstecken',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [0 => '', 1 => '', 'invertStateDisplay' => true]
                ],
            ],
        ],
        'titel' => [
            'label' => 'Bezeichnung (z.B. VIP Silber)',
            'config' => ['type' => 'input', 'eval' => 'required,trim'],
        ],
        'ticket_typ' => [
            'label' => 'Kategorie (z.B. Stehplatz)',
            'config' => ['type' => 'input'],
        ],
        'grund_preis' => [
            'label' => 'Preis (€)',
            'config' => ['type' => 'input', 'eval' => 'double2'],
        ],
        'event' => [
            'label' => 'Zugehöriges Event',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_ticketsystem_domain_model_event',
                'minitems' => 1,
            ],
        ],

        'beschreibung' => [
            'exclude' => true,
            'label' => 'Beschreibung der Ticket / Extras',
            'config' => [
                'type' => 'text',
                'enabeleRichText' => true,
                'cols' => 40,
                'rows' => 15,
            ],
        ],

    ],
];