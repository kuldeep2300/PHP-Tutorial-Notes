<?php
//*----------------------------------------------------------------------------------------
//* PHP - What are Abstract Classes and Methods?
//*----------------------------------------------------------------------------------------

/* Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

An abstract class or method is defined with the abstract keyword:
NOTE : Abstract class can't have object.
*/

abstract class ParentClass {
    abstract public function someMethod1();
    abstract public function someMethod2($name, $color);
    abstract public function someMethod3() : string;
}
//*----------------------------------------------------------------------------------------
//* So, when a child class is inherited from an abstract class, we have the following rules:
//*----------------------------------------------------------------------------------------
/* 
The child class method must be defined with the same name and it redeclares the parent abstract method
The child class method must be defined with the same or a less restricted access modifier
The number of required arguments must be the same. However, the child class may have optional arguments in addition. 

Example Explained:

The Audi, Volvo, and Citroen classes are inherited from the Car class. This means that the Audi, Volvo, and Citroen classes can use the public $name property as well as the public __construct() method from the Car class because of inheritance.

But, intro() is an abstract method that should be defined in all the child classes and they should return a string.

*/

/* USE OF ABSTRACT CLASS : 
FOR EXAMPLE A UNIVERSITY IS A ABSTRACT CLASS DEFINE ONE ABSTRACT METHOD IS12THPASSOUT SO EVERY COLLEGE MUST DEFINE THIS FUNCTION OTHERWISE THEY ARE NOT ELIGIBLE FOR DEGRESS.  */

abstract class Car {
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
    public function intro() : string {
        return "Choose German Quality ! I'am {$this->name}.";
    }
}

class Volvo extends Car {
    public function intro() : string {
        return "Proud to be Swedish ! I'am {$this->name}.";
    }
}

class Citrogen extends Car {
    public function intro() : string {
        return "French extravagance ! I'am {$this->name}.";
    }
}

// Creating objects from the child classes
$audi = new Audi('Audi');
echo $audi->intro() . "<br>";

$volvo = new Volvo('Volvo');
echo $volvo->intro() . "<br>";

$citrogen = new Citrogen('Citrogen');
echo $citrogen->intro() . "<br>";


