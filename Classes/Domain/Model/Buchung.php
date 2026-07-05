<?php

namespace Oklahoma\TicketSystem\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Buchung extends AbstractEntity
{
    /**
     * @var ObjectStorage<BuchungsPosition>
     */
    protected ObjectStorage $positionen;

    protected ?Kunde $hauptKunde = null;

    /**
     * @var ObjectStorage<Kunde>
     */
    protected ObjectStorage $mitreisende;

    protected ?\DateTime $buchungsdatum = null;

    protected ?Event $event = null;

    public function __construct()
    {
        $this->positionen = new ObjectStorage();
        $this->mitreisende = new ObjectStorage();
        $this->hauptKunde = new Kunde();
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): void
    {
        $this->event = $event;
    }

    public function getBuchungsdatum(): ?\DateTime
    {
        return $this->buchungsdatum;
    }

    public function setBuchungsdatum(?\DateTime $buchungsdatum): void
    {
        $this->buchungsdatum = $buchungsdatum;
    }

    public function getHauptKunde(): ?Kunde
    {
        return $this->hauptKunde;
    }

    public function setHauptKunde(?Kunde $hauptKunde): void
    {
        $this->hauptKunde = $hauptKunde;
    }

    /**
     * @return ObjectStorage<BuchungsPosition>
     */
    public function getPositionen(): ObjectStorage
    {
        return $this->positionen;
    }

    /**
     * @param ObjectStorage<BuchungsPosition> $positionen
     */
    public function setPositionen(ObjectStorage $positionen): void
    {
        $this->positionen = $positionen;
    }

    public function addPosition(BuchungsPosition $position): void
    {
        $this->positionen->attach($position);
    }

    public function removePosition(BuchungsPosition $position): void
    {
        $this->positionen->detach($position);
    }

    public function addMitreisende(Kunde $kunde): void
    {
        $this->mitreisende->attach($kunde);
    }

    public function removeMitreisende(Kunde $kunde): void
    {
        $this->mitreisende->detach($kunde);
    }

    /**
     * @return ObjectStorage<Kunde>
     */
    public function getMitreisende(): ObjectStorage
    {
        return $this->mitreisende;
    }
}