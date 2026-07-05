<?php

return [
    'ctrl' => [
        'title' => 'Kunde',
        'label' => 'nachname',
        'label_alt' => 'vorname',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, vorname, nachname, email',
        ],
    ],
    'columns' => [
        'hidden' => [
            'label' => 'Hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'vorname' => [
            'label' => 'Vorname',
            'config' => [
                'type' => 'input',
            ],
        ],
        'nachname' => [
            'label' => 'Nachname',
            'config' => [
                'type' => 'input',
                'eval' => 'required',
            ],
        ],
        'email' => [
            'label' => 'E-Mail',
            'config' => [
                'type' => 'email',
            ],
        ],
    ],
];