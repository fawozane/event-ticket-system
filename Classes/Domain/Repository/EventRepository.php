<?php

namespace Oklahoma\TicketSystem\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class EventRepository extends Repository
{
    public function initializeObject(): void

    {

        $querySettings = $this->createQuery()->getQuerySettings();

        $querySettings->setRespectStoragePage(false);

        $this->setDefaultQuerySettings($querySettings);

    }
}