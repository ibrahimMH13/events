<?php

namespace App\Tests\Feature;

use App\Stubs\EventStub;
use App\Stubs\ListenerStub;
use App\Tests\AbstractTestCase;

class ListenerTest extends AbstractTestCase
{

    /**
     * @test
     */
    public function handel_method_throws_error_if_invalid_event_given(){
        $this->expectException(\TypeError::class);
        $listener = new ListenerStub();
        $listener->handle('not event');
    }

    /**
     * @test
     */
    public function handel_method_accept_event(){
        $listener = new ListenerStub();
        $listener->handle(new EventStub());
        $this->addToAssertionCount(1);
    }
}