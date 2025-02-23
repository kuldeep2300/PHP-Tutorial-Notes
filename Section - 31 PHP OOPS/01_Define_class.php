<?php

// From PHP5, you can also write PHP code in an object-oriented style. Object-Oriented programming is faster and easier to execute.

//* PHP What is OOP?
/* OOP stands for Object-Oriented Programming.

Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.

Object-oriented programming has several advantages over procedural programming:

1. OOP is faster and easier to execute
2. OOP provides a clear structure for the programs
3. OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
4. OOP makes it possible to create full reusable applications with less code and shorter development time

Tip: The "Don't Repeat Yourself" (DRY) principle is about reducing the repetition of code. You should extract out the codes that are common for the application, and place them at a single place and reuse them instead of repeating it. */

//* PHP - What are Classes and Objects?
/* Classes and objects are the two main aspects of object-oriented programming.
Example - 1) Class (Fruit) Object(Apple, Banana, Mango)
Example - 2) Class (Car) Object(Volvo, Audi, Toyoto)

So, a class is a template for objects, and an object is an instance of a class.

When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
*/

//? Note: In a class, variables are called properties and functions are called methods!

class fruits{
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

}

?>