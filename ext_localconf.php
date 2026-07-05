<?php
defined('TYPO3') or die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'TicketSystem',
    'Events',
    [
        \Oklahoma\TicketSystem\Controller\EventController::class => 'list,show',

        \Oklahoma\TicketSystem\Controller\BuchungController::class => 'new,create,show',
    ],

    [
        \Oklahoma\TicketSystem\Controller\BuchungController::class => 'new,create',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    '@import "EXT:ticket_system/Configuration/TypoScript/setup.typoscript"'
);