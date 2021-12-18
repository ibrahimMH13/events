<?php

namespace App\Tests\Feature;

use App\Core\Dispatcher;
use App\Stubs\ListenerStub;
use App\Tests\AbstractTestCase;

class DispatcherTest extends AbstractTestCase
{
    /**
     * @test
     */
    public function it_hold_listeners_in_an_array(){
        $dispatch = new Dispatcher();
        $this->assertEmpty($dispatch->getListeners());
        $this->assertIsArray($dispatch->getListeners());
    }

    /**
     * @test
     */
    public function it_can_add_listener(){
        $dispatch = new Dispatcher();
        $dispatch->addListener('singUp',new ListenerStub());
        $this->assertCount(1,$dispatch->getListeners()['singUp']);
    }

    /**
     * @test
     */
    public function can_get_listener_by_event_name(){
        $dispatch = new Dispatcher();
        $dispatch->addListener('singUp',new ListenerStub());
        $this->assertCount(1,$dispatch->getListenersByEventName('singUp'));
    }

    /**
     * @test
     */
    public function its_return_empty_when_no_event(){
        $dispatch = new Dispatcher();
         $this->assertCount(0,$dispatch->getListenersByEventName('singUpxxxxxxx'));

    }

}