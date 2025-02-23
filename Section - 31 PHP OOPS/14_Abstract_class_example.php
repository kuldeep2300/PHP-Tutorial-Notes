<?php

abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    public function prefixName($name) {
        if($name == 'John Doe') {
            $prefix = "Mr.";
        } elseif($name == 'Jane Doe') {
            $prefix = "Mrs.";
        } else {
            $prefix = "";
        }

        return "{$prefix} {$name}";
    }
}

$child_class = new ChildClass();
    
echo $child_class->prefixName('Jane Doe') . "<br>";
echo $child_class->prefixName('John Doe') . "<br>";
echo $child_class->prefixName('Kuldeep Verma') . "<br>";


