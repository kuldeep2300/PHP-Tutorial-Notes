<?php

//* PHP - What are Interfaces?
/* Interfaces allow you to specify what methods a class should implement.
Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

To implement an interface, a class must use the implements keyword.
A class that implements an interface must implement all of the interface's methods.

Interfaces are declared with the interface keyword: */

interface interfaceName
{
    public function someMethod1();
    public function someMethod2($name, $color);
    public function someMethod3(): string;
}

/* 
1. Interface support multiple inheritance
2. Interface can only contain abstract function
3. In Interface we can't create variables(properties)
4. No constructor in Interface
5. All functions must be public */

interface AadharCard {
    public function verifyAadhar();
}

interface PanCard {
    public function verifyPan();
}

class DrivingLicense implements AadharCard, PanCard {
    public function verifyAadhar()
    {
        // Logic
        echo "Aadhar is verified. <br>";
    }

    public function verifyPan()
    {
        // Logic
        echo "Pan is verified. <br>";
    }

    public function register() {
        // Logic
        echo "Driving License is created. <br>";
    }
}

$obj = new DrivingLicense();
$obj->verifyAadhar();
$obj->verifyPan();
$obj->register();
