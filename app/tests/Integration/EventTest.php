<?php

namespace App\Tests\Integration;

use App\Core\Dispatcher;
use App\Stubs\EventStub;
use App\Stubs\ListenerStub;
use App\Tests\AbstractTestCase;

class EventTest extends AbstractTestCase
{

    /**
     * @test
     */
    public function it_can_dispatch_event(){
        $dispatcher   = new Dispatcher();
        $event        = new EventStub();
        $mockListener = $this->createMock(ListenerStub::class);
        $mockListener->expects($this->once())->method('handle')->with($event);
        $dispatcher->addListener('EventStub',$mockListener);
        $dispatcher->dispatch($event);
    }
    /**
     * @test
     */
    public function it_can_dispatch_event_with_multi_listener(){
        $dispatcher   = new Dispatcher();
        $event        = new EventStub();
        $mockListener = $this->createMock(ListenerStub::class);
        $mockListener2 = $this->createMock(ListenerStub::class);
        $mockListener->expects($this->once())->method('handle')->with($event);
        $mockListener2->expects($this->once())->method('handle')->with($event);
        $dispatcher->addListener('EventStub',$mockListener);
        $dispatcher->addListener('EventStub',$mockListener2);
        $dispatcher->dispatch($event);
    }
}