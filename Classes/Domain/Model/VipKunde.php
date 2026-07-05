<?php
namespace Oklahoma\TicketSystem\Domain\Model;

class VipKunde extends Kunde{

    public function hatLogenPlatz(): bool
    {
       return true;
    }

    public function darfLogeBuchen(): bool

    {

        return true;

    }
}