<?php

namespace App\Stubs;

use App\Core\Events\Event;

class EventStub extends Event
{

    public function getName()
    {
       return 'EventStub';
    }
}