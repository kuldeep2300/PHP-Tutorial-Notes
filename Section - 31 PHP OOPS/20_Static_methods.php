<?php

//* PHP - Static Methods
/* Static methods can be called directly - without creating an instance of the class first.
Static methods are declared with the static keyword: */

//* Normal creating class and accessing its properties and methods using an object.
/* class A {
    public $num = 10;
    function test() {
        echo "This is test function of class A.";
    }
}

$obj = new A();
echo $obj->num;
$obj->test(); */

//* Use of static keyword
class A {
    public static $num = 10;
    public static $n;

    public static function test() {
        echo "<br>";
    }

    public static function setValue($no) {
        self::$n = $no; // Self keyword only work this only static properties and methods, not for non-static.
    }

    public static function viewValue() {
        return "<br>" . self::$n;
    }
}

echo A::$num;
// echo A::test();
A::setValue(30);
echo A::viewValue();

