<?php

if (isset($_GET['submit'])) {
    echo $_GET['username'] . "<br>";
    echo $_GET['age'] . "<br>";
} else {
    echo "Please fill the form details!!!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER - SUPERGLOBAL VARIABLE</title>
</head>

<body>
    <h1>$_SEVER - SUPER GLOBAL VARIABLE</h1>
    <!-- <form action="process.php" method="get"> -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="text" name="username" placeholder="Enter your name"><br><br>
        <input type="text" name="age" placeholder="Enter your age"><br><br>
        <input type="submit" value="submit" name="submit"><br><br>
    </form>
</body>

</html>