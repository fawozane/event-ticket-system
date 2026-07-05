<?php
namespace Oklahoma\TicketSystem\Domain\Model;

use Oklahoma\TicketSystem\Domain\Model\Buchung;
use Oklahoma\TicketSystem\Domain\Model\Karte;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class BuchungsPosition extends AbstractEntity
{

    protected ?Karte $karte = null;
    protected ?int $menge = 1;

    protected float $einzelPreis = 0.0;

    protected ?Buchung $buchung = null;

    public function getKarte(): ?Karte
    {
        return $this->karte;
    }

    public function setKarte(?Karte $karte): void

    {
        $this->karte = $karte;
        if($karte !== null) {
            $this->einzelPreis = $karte->getGrundPreis();
        }
    }
    public function getMenge(): int
    {
        return $this->menge;
    }
    public function setMenge(int $menge): void
    {
        $this->menge = $menge;
    }

    public function getEinzelPreis(): float
    {
        return $this->einzelPreis;
    }

    public function setEinzelPreis(float $einzelPreis): void
    {
        $this->einzelPreis = $einzelPreis;
    }

    public function getBuchung(): ?Buchung
    {
        return $this->buchung;
    }

    public function setBuchung(?Buchung $buchung): void
    {
        $this->buchung = $buchung;
    }

    public function getGesamtPreis(): float
    {
        return $this->einzelPreis * $this->menge;
    }
}

