<?php
namespace Oklahoma\TicketSystem\Service;

use Oklahoma\TicketSystem\Domain\Model\Buchung;
use Oklahoma\TicketSystem\Domain\Model\FanKunde;
use Oklahoma\TicketSystem\Domain\Model\VipKunde;

class BuchungsPreisService
{
    public function __construct(
        protected KartenPreisService $kartenPreisService
    ){}
    public function berechneGesamtPreis(Buchung $buchung): float
    {
        $gesamt = 0;
        $karten = $buchung->getPositionen();

        foreach ($buchung->getPositionen() as $position) {
            $gesamt += $this->kartenPreisService->berechnePreis($position);
        }
        $kunde = $buchung->getHauptKunde();

        if($kunde instanceof FanKunde){
            $gesamt*= 0.7;
        }
        if($kunde instanceof VipKunde){
            if($buchung->getMitreisende()->count() > 1){
                $gesamt*= 0.95;
            }

        }
        return $gesamt;
    }

}