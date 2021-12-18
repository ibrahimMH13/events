<?php

namespace App\Core;

use App\Core\Events\Event;
use App\Core\Listeners\Listener;

class Dispatcher
{

    protected $listeners = [];

    public function getListeners()
    {
        return $this->listeners;
    }

    public function getListenersByEventName(string $name)
    {
        return $this->listeners[$name] ?? [];
    }

    public function addListener(string $name, Listener $listener)
    {
        $this->listeners[$name][] = $listener;
    }

    public function dispatch(Event $event)
    {
        foreach ($this->getListenersByEventName($event->getName()) as $listener) {
            $listener->handle($event);
        }
    }
}