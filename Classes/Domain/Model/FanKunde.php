<?php
namespace Oklahoma\TicketSystem\Domain\Model;

class FanKunde extends Kunde{

    private bool $hatLoge = false;

    public function hatLogenPlatz(): bool{
        return $this->hatLoge;
    }
    public function darfLogeBuchen(): bool
    {
        return true;
    }

    public function bucheLoge(): void{
        $this->hatLoge = true;
    }



}