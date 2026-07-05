<?php

namespace Oklahoma\TicketSystem\Service;

use Oklahoma\TicketSystem\Domain\Model\BuchungsPosition;
use Oklahoma\TicketSystem\Domain\Model\Karte;

class KartenPreisService

{

    public function berechnePreis(BuchungsPosition $position): float
    {
    $grundpreis = $position->getEinzelPreis();
    $menge = $position->getMenge();
    return $grundpreis * $menge;
    }

}