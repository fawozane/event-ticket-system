<?php
namespace Oklahoma\TicketSystem\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Karte extends AbstractEntity
{
    protected string $titel = '';
    protected string $ticketTyp = '';   // CamelCase!
    protected float $grundPreis = 0.0;  // CamelCase!
    protected ?Event $event = null;
    protected string $beschreibung = '';

    public function getTitel(): string { return $this->titel; }
    public function setTitel(string $titel): void { $this->titel = $titel; }

    public function getTicketTyp(): string { return $this->ticketTyp; }
    public function setTicketTyp(string $ticketTyp): void { $this->ticketTyp = $ticketTyp; }

    public function getGrundPreis(): float { return $this->grundPreis; }
    public function setGrundPreis(float $grundPreis): void { $this->grundPreis = $grundPreis; }

    public function getEvent(): ?Event { return $this->event; }
    public function setEvent(?Event $event): void { $this->event = $event; }

    public function getBeschreibung(): string
    {
        return $this->beschreibung;
    }

    public function setBeschreibung(string $beschreibung): void
    {
        $this->beschreibung = $beschreibung;
    }
}