<?php
namespace Oklahoma\TicketSystem\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Loge extends AbstractEntity{

    protected string $nummer = '';
    protected int $sitzplaetze = 0;
    protected float $preisaufschlag = 0.0;

    public function getNummer(): string
    {
        return $this->nummer;
    }

    public function setNummer(string $nummer): void
    {
        $this->nummer = $nummer;
    }

    public function getSitzplaetze(): int
    {
        return $this->sitzplaetze;
    }

    public function setSitzplaetze(int $sitzplaetze): void
    {
        $this->sitzplaetze = $sitzplaetze;
    }

    public function getPreisaufschlag(): float
    {
        return $this->preisaufschlag;
    }

    public function setPreisaufschlag(float $preisaufschlag): void
    {
        $this->preisaufschlag = $preisaufschlag;
    }


}