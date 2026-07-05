<?php

namespace Oklahoma\TicketSystem\Controller;

use Oklahoma\TicketSystem\Domain\Model\Buchung;
use Oklahoma\TicketSystem\Domain\Model\BuchungsPosition;
use Oklahoma\TicketSystem\Domain\Model\Event;
use Oklahoma\TicketSystem\Domain\Repository\BuchungRepository;
use Oklahoma\TicketSystem\Domain\Repository\EventRepository;
use Oklahoma\TicketSystem\Domain\Repository\KarteRepository;
use Oklahoma\TicketSystem\Service\BuchungsPreisService;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class BuchungController extends ActionController
{
    public function __construct(
        protected readonly BuchungRepository $buchungRepository,
        protected readonly BuchungsPreisService $buchungsPreisService,
        protected readonly KarteRepository $karteRepository,
        protected readonly EventRepository $eventRepository,
    ) {}

    public function newAction(Event $event): ResponseInterface
    {
        $buchung = new Buchung();
        $buchung->setEvent($event);

        $this->view->assignMultiple([
            'buchung' => $buchung,
            'event' => $event,
        ]);

        return $this->htmlResponse();
    }

    public function createAction(Buchung $buchung): ResponseInterface
    {
        $parsedBody = $this->request->getParsedBody();
        $pluginData = $parsedBody['tx_ticketsystem_events'] ?? [];

        $eventUid = (int)($pluginData['buchung']['event']['__identity'] ?? 0);

        if ($eventUid > 0) {
            $event = $this->eventRepository->findByUid($eventUid);

            if ($event) {
                $buchung->setEvent($event);
            }
        }

        $buchung->_setProperty('pid', 20);
        $buchung->setBuchungsdatum(new \DateTime());

        $positionen = $pluginData['positionen'] ?? [];

        foreach ($positionen as $positionData) {
            $menge = (int)($positionData['anzahl'] ?? 0);

            if ($menge <= 0) {
                continue;
            }

            $kartenUid = (int)($positionData['karte'] ?? 0);
            $karte = $this->karteRepository->findByUid($kartenUid);

            if (!$karte) {
                continue;
            }

            $position = new BuchungsPosition();
            $position->setKarte($karte);
            $position->setMenge($menge);
            $position->setEinzelPreis($karte->getGrundPreis());
            $position->setBuchung($buchung);

            $buchung->addPosition($position);
        }

        $this->buchungRepository->add($buchung);

        $preis = $this->buchungsPreisService->berechneGesamtPreis($buchung);

        $this->view->assignMultiple([
            'buchung' => $buchung,
            'preis' => $preis,
        ]);

        return $this->htmlResponse();
    }

    public function showAction(Buchung $buchung): ResponseInterface
    {
        $preis = $this->buchungsPreisService->berechneGesamtPreis($buchung);

        $this->view->assignMultiple([
            'buchung' => $buchung,
            'preis' => $preis,
        ]);

        return $this->htmlResponse();
    }
}