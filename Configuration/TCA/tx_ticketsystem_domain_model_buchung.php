<?php

return [

    'ctrl' => [
        'title' => 'Buchung',
        'label' => 'uid',
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
                event,
                haupt_kunde,
                buchungsdatum,
                positionen
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

        'event' => [
            'label' => 'Event',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_ticketsystem_domain_model_event',
                'maxitems' => 1,
            ],
        ],

        'haupt_kunde' => [
            'label' => 'Hauptkunde',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_ticketsystem_domain_model_kunde',
                'maxitems' => 1,
            ],
        ],

        'buchungsdatum' => [
            'label' => 'Buchungsdatum',
            'config' => [
                'type' => 'datetime',
            ],
        ],

        'positionen' => [
            'label' => 'Positionen',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_ticketsystem_domain_model_buchungsposition',
                'foreign_field' => 'buchung',
                'appearance' => [
                    'collapseAll' => 1,
                    'newRecordLinkAddTitle' => true,
                ],
                'maxitems' => 999,
            ],
        ],

    ],

];