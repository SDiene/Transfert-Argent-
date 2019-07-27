<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EventSubscriber implements EventSubscriberInterface
{
    public function onExceptionSubscriber($event)
    {
        // ...
    }

    public static function getSubscribedEvents()
    {
        return [
            'ExceptionSubscriber' => 'onExceptionSubscriber',
        ];
    }
}
