<?php
require_once('./CarFactoryInterface.php');
require_once('./Car.php');

class CarFactory implements CarFactoryInterface
{

    public function create(): Car
    {
        $bmw = new Car();

        return $bmw;
    }
}
