<?php
namespace Oklahoma\TicketSystem\Service;
use Oklahoma\TicketSystem\Domain\Model\Kunde;

class LogenService {

    public function bucheLoge(Kunde $kunde){
        if(!$kunde->darfLogeBuchen()){
            throw new \Exception("Kunde darf keine Loge buchen");
        }
        if($kunde instanceof \ticket_system\Classes\Domain\Model\FanKunde){
            $kunde -> bucheLoge();
        }
    }

}