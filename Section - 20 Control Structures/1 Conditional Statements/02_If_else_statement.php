<?php
/* 
$data = false;
if($data || 0) {
    echo "I am true condintion <br>";
} else {
    echo "I am false condition <br>";
} */

//* Person can vote or not
/* 
$age = 18;
if (($age >= 18)) {
    echo "Person can vote <br>";
} else {
    echo "Person can't vote <br>";
} */

//* Reverse the condition
/* 
$age = 2;
if(!($age >= 18)) {
    echo "Person can't vote <br>";
}else {
    echo "Person can vote <br>";
} */


//* Single echo - without curly - braces
/* 
if(true) 
    echo "Yes, I am true condition";
else 
    echo "Yes, I am false condition"; */

//* Multiple echos - With curly braces only
/* 
$username = "Kuldeep";
if(isset($username)) {
    echo "I am true condition <br>";
    echo "My name is => $username <br>"; 
} else {
    echo "I am false condition <br>";
    echo "I am invisible.";
} */

//* One line - if_else statement
/* 
$data = true;
if($data) echo "I am true condition"; else echo "I am false condition"; */

//* Using if-else in HTML

$username = "Kuldeep";
$isLogin = false;

//* Exercise - Find if the student is passed or failed
$percentage = 35;
?>
<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-else Statement</title>
</head>

<body>
    <h1>if_else statements</h1>
    <?php
    if ($username && $isLogin) {
    ?>
        <h2>Welcome to website</h2>
    <?php
    } else {
    ?>
        <h2>Welcome to website, you have limited access!.</h2>
    <?php
    }
    ?>
</body>

</html> -->

<!-- //* Exercise - Find if the student is passed or failed -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Passed</title>
</head>

<body>
    <h1>Student Passed Record</h1>
    <?php
    if ($percentage >= 35) {
    ?>
        <h2>Student is passed.</h2>
    <?php
    } else {
    ?>
        <h2>Student is failed</h2>
    <?php
    }
    ?>
</body>

</html>