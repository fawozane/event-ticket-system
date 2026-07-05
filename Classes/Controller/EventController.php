<?php

namespace Oklahoma\TicketSystem\Controller;

use Oklahoma\TicketSystem\Domain\Model\Event;
use Psr\Http\Message\ResponseInterface;
use Oklahoma\TicketSystem\Domain\Repository\EventRepository;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class EventController extends ActionController
{
    public function __construct(
        protected readonly EventRepository $eventRepository,
    ){}

    public function listAction(): ResponseInterface
    {

        $events = $this->eventRepository->findAll();
        $this->view->assign('events', $events);
        return $this->htmlResponse();
    }

    public function showAction(Event $event): ResponseInterface
    {
        $this->view->assign('event', $event);
        return $this->htmlResponse();
    }
}