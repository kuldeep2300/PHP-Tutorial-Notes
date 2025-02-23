<?php

//* PHP - What are Traits?
/* PHP only supports single inheritance: a child class can inherit only from one single parent.

So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

Traits are declared with the trait keyword: */

//* Here multi-level inheritance is used, and like A class extended again and again, same like B will be inherited by C and D class, so to reduce class unnecessary duplication we can use trait.
/* class A {
    function fun1() {
        echo "Fun1<br>";
    }
}

class B extends A {
    function fun2() {
        echo "Fun2<br>";
    }
}

class C extends B {
    function fun3() {
        echo "Fun3<br>";
    }
}

class D extends C {
    function fun4() {
        echo "Fun4<br>";
    }
}

$obj = new D();
$obj->fun4(); */

//* Traits Example - Single Trait

/* trait A {
    function fun1() {
        echo "Fun1<br>";
    }
}

class B {
    use A;
    function fun2() {
        echo "Fun2<br>";
    }
}

class C extends B {
    function fun3() {
        echo "Fun3<br>";
    }
}

class D extends C {
    function fun4() {
        echo "Fun4<br>";
    }
}

$obj = new D();
$obj->fun1();

$obj = new B();
$obj->fun1(); */

//* Trait Example - Multiple Traits
/* trait A {
    function fun1() {
        echo "A: Fun1<br>";
    }
}

trait B {
    function fun2() {
        echo "B: Fun2<br>";
    }
}

class Class1 {
    use A, B;
    function fun3() {
        echo "Class1: Fun3<br>";
    }
}

$obj = new Class1();
$obj->fun1();
$obj->fun2();   // If same name function exist in our class1 then it will print class1 function because it first check in its class fun2() method exist or not, if exist it will print the output otherwise print trait method.
$obj->fun3(); */

//* Trait Example - If Both trait having same name function

trait A {
    function fun1() {
        echo "A: Fun1<br>";
    }
}

trait B {
    function fun1() {
        echo "B: Fun2<br>";
    }
}

class Class1 {
    use A, B {
        A::fun1 insteadof B;
        B::fun1 as fun2;
    } 
    function fun3() {
        echo "Class1: Fun3<br>";
    }
}

$obj = new Class1();
$obj->fun1();
$obj->fun2();
$obj->fun3();