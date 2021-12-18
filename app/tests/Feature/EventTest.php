<?php

namespace App\Tests\Feature;
use App\Stubs\EventStub;
use App\Stubs\EventStubNoName;
use App\Tests\AbstractTestCase;

class EventTest extends AbstractTestCase
{
    /**
     * @test
     */
    public function can_get_event_name(){
       $event = new EventStub();
       $this->assertEquals('EventStub',$event->getName());
    }

    /**
     * @test
     */
    public function its_defaults_to_an_event_name(){
        $event = new EventStubNoName();
        $this->assertEquals('EventStubNoName',$event->getName());
    }
}