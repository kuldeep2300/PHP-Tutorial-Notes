<?php

/* Polymorphism in PHP means that different classes can have the same method name but different behaviors. This allows one function to work with multiple types of objects in a flexible way. */

interface Aadhar {
    public function verifyAadhar();
}

interface PanCard {
    public function verifyPan();
}

// DrivingLicense Class
class DrivingLicense implements Aadhar, PanCard {
    public function verifyAadhar()
    {
        echo "Aadhar Verified Successfully. <br>";
    }
    public function verifyPan() {
        echo "Pan Verified Successfully. <br>";
    }
    public function register() {
        echo "Driving License Created Successfully <br>";
    }
}

$car = new DrivingLicense();
$car->verifyAadhar();
$car->verifyPan();
$car->register();

// Bank Account Class
class bankAccount implements Aadhar, PanCard {
    public function verifyAadhar()
    {
        echo "<br><br>Aadhar is Verified Successfully for Bank Account. <br>";
    }

    public function verifyPan()
    {
        echo "Pan is Verified Successfully for Bank Account. <br>";
    }
    public function openAccount() {
        echo "Account is open successfully.";
    }
}

$bank = new bankAccount();
$bank->verifyAadhar();
$bank->verifyPan();
$bank->openAccount();
