<?php

abstract class ParentClass
{
    // Abstract method with an argument
    abstract protected function intro($name);
}

class ChildClass extends ParentClass
{
    // The child class may define optional arguments that are not in the parent's abstract method
    public function intro($name, $separator = ".", $greet = "Dear") {
        if($name == 'Kuldeep Verma') {
            $prefix = 'Mr';
        } else if($name == 'Jane Doe') {
            $prefix = 'Mrs';
        } else {
            $prefix = '';
        }

        return "{$greet} {$prefix}{$separator} {$name}.";
    }
}

$class = new ChildClass();
echo $class->intro('John Doe') . "<br>";
echo $class->intro('Jane Doe') . "<br>";
echo $class->intro('Kuldeep Verma') . "<br>";
