<?php

namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class ResponseListener extends \Symfony\Component\HttpKernel\EventListener\ResponseListener
{
    public function __construct()
    {
        parent::__construct("UTF8");
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        parent::onKernelResponse($event);
        $event->getResponse()->headers->add(["Access-Control-Allow-Origin" => "*"]);
    }
}