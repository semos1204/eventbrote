<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EventsController extends AbstractController
{

    public function index()
    {
        $events = [
            'Symfony Conference',
            'Laravel Conference',
            'PHP Conference',
            'Rails Conference',
            'Django Conference'
        ];
        return $this->render('events/index.html.twig',compact('events'));
    }
}