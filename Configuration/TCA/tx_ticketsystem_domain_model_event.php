<?php

return [

    'ctrl' => [
        'title' => 'Event',
        'label' => 'titel',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'titel,ort',
        'iconfile' => 'EXT:ticket_system/Resources/Public/Icons/event.svg',
    ],

    'types' => [
        '0' => [
            'showitem' => '
                hidden,
                titel,
                beschreibung,
                datum,
                ort,
                bild,
                karten
            '
        ],
    ],

    'columns' => [

        'hidden' => [
            'label' => 'Hidden',
            'config' => [
                'type' => 'check',
            ],
        ],

        'titel' => [
            'label' => 'Titel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'required'
            ],
        ],

        'beschreibung' => [
            'label' => 'Beschreibung',
            'config' => [
                'type' => 'text',
            ],
        ],

        'datum' => [
            'label' => 'Datum',
            'config' => [
                'type' => 'datetime',
            ],
        ],

        'ort' => [
            'label' => 'Ort',
            'config' => [
                'type' => 'input',
            ],
        ],


        'bild' => [

            'exclude' => true,

            'label' => 'Bild',

            'config' => [

                'type' => 'file',

                'maxitems' => 1,

                'allowed' => 'common-image-types',

            ],

        ],
        'karten' => [
            'label' => 'Karten',
            'config' => [
                'type' => 'inline', // Erlaubt das direkte Bearbeiten im Event!
                'foreign_table' => 'tx_ticketsystem_domain_model_karte',
                'foreign_field' => 'event', // Das Feld in der Karte-Tabelle
                'maxitems' => 9999,
            ],
        ],

    ],

];