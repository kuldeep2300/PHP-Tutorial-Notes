<?php
if (isset($_POST['submit'])) {
    $image = $_FILES['image-file'];
    echo "<pre>";
    print_r($image);
    echo "</pre>";
    echo $image['name'] . "<br>";
    echo $image['type'] . "<br>";
    echo $image['size'] . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File - Super Global variable</title>
</head>

<body>
    <!-- Here when submit the file is not going to the server, because of this we can't access upload file using $_FILES variable. -->
    <!-- <form action="" method="post"> -->
    <!--//? That's why have to pass an attribute `enctype = multipart/form-data` so that data can be sent to the server and access through $_FILES superglobal variable. -->
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image-file">
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>