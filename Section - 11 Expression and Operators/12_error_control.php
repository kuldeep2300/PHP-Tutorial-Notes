<?php
// * We can use try catch for error handling but there is another way of doing this using 'one operator' by using this we can supress error. We can't supress for all type error okay.

// @ - Error control operator
// include 'file_not_present.php'; // When we write this it will show us warning and don't stop execution it will print further data.
// echo "Hello World";

@include 'file_not_present.php';    // This will supress error meaning not showing us warning if file not found, and simply print Hello World without any warning or error.
echo "Hello World";

// For warning we can supress it and continue our execution, but here it will show us 'fetal error' and fetal error stop execution & can't be supressed by error_control_operator and will also not show echo statement.

@$value = 1/0;
echo $value;
echo "Hello World";
?>


 