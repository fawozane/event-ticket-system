<?php
declare(strict_types=1);

return [
    \Oklahoma\TicketSystem\Domain\Model\Karte::class => [
        'tableName' => 'tx_ticketsystem_domain_model_karte',
        'properties' => [
            'grundPreis' => [
                'fieldName' => 'grund_preis'
            ],
            'ticketTyp' => [
                'fieldName' => 'ticket_typ'
            ]
        ]
    ],
    \Oklahoma\TicketSystem\Domain\Model\Event::class => [
        'tableName' => 'tx_ticketsystem_domain_model_event',
    ]
];