<?php

namespace App\Core\Events;

abstract class Event
{
    public function getName(){
        return (new \ReflectionClass($this))->getShortName();
    }
}