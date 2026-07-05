<?php
namespace Oklahoma\TicketSystem\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Event extends AbstractEntity
{
    protected string $titel = '';
    protected string $beschreibung = '';
    protected ?FileReference $bild = null;
    protected ?\DateTime $datum = null;
    protected string $ort = '';

    /**

     * @var ObjectStorage<Karte>
     */
    protected ?ObjectStorage $karten = null;

    public function __construct()
    {
        // Für manuell neu erstellte Objekte (z.B. im Controller)
        $this->karten = new ObjectStorage();
    }

    /**
     * @return ObjectStorage<Karte>
     */
    public function getKarten(): ObjectStorage
    {
        // Die magische Absicherung für Extbase-Objekte aus der DB
        if ($this->karten === null) {
            $this->karten = new ObjectStorage();
        }
        return $this->karten;
    }


    public function setKarten(ObjectStorage $karten): void
    {
        $this->karten = $karten;
    }

    public function getGuenstigsterPreis(): float
    {
        $minPreis = 17.50;
        $preise = [];

        foreach ($this->getKarten() as $karte) {

            $preise[] = $karte->getGrundPreis();
        }
            if ($preise) {
                $minPreis = min($preise);
            }


        return $minPreis;
    }


    public function getTitel(): string
    {
        return $this->titel;
    }

    public function setTitel(string $titel): void
    {
        $this->titel = $titel;
    }

    public function getBeschreibung(): string
    {
        return $this->beschreibung;
    }

    public function setBeschreibung(string $beschreibung): void
    {
        $this->beschreibung = $beschreibung;
    }

    public function getBild(): ?FileReference
    {
        return $this->bild;
    }

    public function setBild(?FileReference $bild): void
    {
        $this->bild = $bild;
    }

    public function getDatum(): ?\DateTime
    {
        return $this->datum;
    }

    public function setDatum(\DateTime $datum): void
    {
        $this->datum = $datum;
    }

    public function getOrt(): string
    {
        return $this->ort;
    }

    public function setOrt(string $ort): void
    {
        $this->ort = $ort;
    }
}