<?php

declare(strict_types=1);

class LightSwitch
{
    private $on = false;

    public function turnOn() : LightSwitch
    {
        $this->on = true;
        return $this;
    }

    public function turnOff() : LightSwitch
    {
        $this->on = false;
        return $this;
    }

    public function isOn() : bool
    {
        return $this->on;
    }
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
var_dump($lightSwitch->isOn()); // bool(false)

// you can turn it on
$lightSwitch->turnOn();
var_dump($lightSwitch->isOn()); // bool(true)

// you can turn it off
$lightSwitch->turnOff();
var_dump($lightSwitch->isOn()); // bool(false)

// Create a class that represents a light switch