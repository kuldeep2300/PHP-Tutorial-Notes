<?php

// To use this in our project we should be understand number function and these are completely different from string function.

//? 1) Check provided data is number or not.
// echo is_numeric("1");   // Output : 1 (because it is number true meaning 1)
// echo is_numeric("12");   // Output : 1 (because it is number true meaning 1)
// echo is_numeric(12);    // Output : 1

// echo is_numeric("12cd") ? "It's a number" : "It's not a number"; // Output : nothing (because it is false, it is not a number)

// echo is_numeric("12.89"); // Output : true print 1 (because it is true and print 1, it will convert float into integer that's why)
// echo is_numeric("12.89") ? "It's a number" : "It's not a number";; // Output : It's a number

//? 2) intval() : Checking only integer value directly return int value as it is.

// echo intval(12);         // Output : 12 
// echo intval('12sd');     // Output : 12 (converting string into integer and return only int value)
// echo intval('20.09');       // Output : 20