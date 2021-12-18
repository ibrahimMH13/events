<?php

namespace App\Core\Listeners;

use App\Core\Events\Event;

abstract class Listener
{
    abstract public function handle(Event $event);
}