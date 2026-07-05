<?php
namespace Oklahoma\TicketSystem\Domain\Model;

class SpontanKunde extends Kunde{


    public function hatLogenPlatz(): bool{
        return false;
    }
    public function darfLogeBuchen(): bool
    {
        return false;
    }


    }

