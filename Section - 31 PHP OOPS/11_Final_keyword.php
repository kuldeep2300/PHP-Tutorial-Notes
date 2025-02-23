<?php

//* PHP - The final Keyword
/* The final keyword can be used to prevent class inheritance or to prevent method overriding.
The following example shows how to prevent class inheritance: */

//* Prevent Class Inheritance
/* final class Fruit {

}

class Strawberry extends Fruit {
    // Give error
} */

//* Prevent Method Overriding
/* class Fruit {
    final public function intro() {
        echo "Hello";
    }
}

class Strawberry extends Fruit {
    // will give error
    public function intro() {
        echo "I am derived class";
    }
} */