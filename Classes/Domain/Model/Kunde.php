<?php
namespace Oklahoma\TicketSystem\Domain\Model;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Kunde extends AbstractEntity {
    protected string $nachname = '';
    protected string $vorname = '';
    protected string $email = '';




    public function getNachname(): string
    {
        return $this->nachname;
    }

    public function setNachname(string $nachname): void
    {
        $this->nachname = $nachname;
    }

    public function getVorname(): string
    {
        return $this->vorname;
    }

    public function setVorname(string $vorname): void
    {
        $this->vorname = $vorname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }




    public function hatLogenPlatz(): bool {
        return false; // Standardmäßig nein
    }

    public function darfLogeBuchen(): bool {
        return false;
    }



}

