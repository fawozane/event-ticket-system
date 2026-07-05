<?php

return [

    'ctrl' => [
        'title' => 'Buchungsposition',
        'label' => 'karte',
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
            'showitem' => '
                hidden,
                karte,
                menge,
                einzel_preis
            ',
        ],
    ],

    'columns' => [

        'hidden' => [
            'label' => 'Hidden',
            'config' => [
                'type' => 'check',
            ],
        ],

        'buchung' => [
            'label' => 'Buchung',
            'config' => [
                'type' => 'passthrough',
            ],
        ],

        'karte' => [
            'label' => 'Ticket',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_ticketsystem_domain_model_karte',
                'maxitems' => 1,
            ],
        ],

        'menge' => [
            'label' => 'Menge',
            'config' => [
                'type' => 'number',
                'format' => 'integer',
                'default' => 1,
            ],
        ],

        'einzel_preis' => [
            'label' => 'Einzelpreis',
            'config' => [
                'type' => 'number',
                'format' => 'decimal',
            ],
        ],

    ],

];