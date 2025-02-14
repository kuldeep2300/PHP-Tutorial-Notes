<?php

include 'includes/connect.php';
$error = "";

if (isset($_POST['submit'])) {
    if (empty($_FILES['image_file']['name'])) {
        $error = "Please insert an image first!";
    } else {
        $image = $_FILES['image_file'];
        // echo "<pre>";
        // print_r($image);
        // echo "</pre>";

        // echo $image['size'] . " bytes <br>"; // size of image in bytes
        $imageFilename = $image['name'];
        $tempFilename = $image['tmp_name']; // Another way to access this
        // $tempFilename = $_FILES['image_file']['tmp_name']; // First it will return an array in which we want tmp_name key value.

        // echo "$imageFilename <br> $tempFilename <br>";

        //* Separate the file name  
        $separateFilename = explode('.', $imageFilename);
        // print_r($separateFilename);
        /* 
        $fileExtension = strtolower($separateFilename[1]); // If file extension in uppercase then instead of showing first we convert it into lowercase then show the result.
        echo "<br> $fileExtension"; */

        //* Another way to show file extension
        $fileExtension = strtolower(end($separateFilename)); // end() method print the last index element of an array.
        // echo "<br> $fileExtension";

        //* Check Extension of image

        $image_extension = ['jpeg', 'jpg', 'png'];
        if (in_array($fileExtension, $image_extension)) {
            //* When we are uploading an image then we must pass the complete file name, but when we are moving or uploading file then we must pass the tmp_name.

            $upload_img = 'images/' . $imageFilename;     // When we are uploading an image so that we can store this in the server then first we have to store these file at the client side, here we first creating a images folder in root directory then we write this inside images folder store the complete image file name.
            move_uploaded_file($tempFilename, $upload_img); // This method is used to upload or send an image to the database or a specific destination, 1st arg it take tmp_name and 2nd is the destination where we are storing these images.

            //* Insert data into database

            //? Here before inserting data into the database we are checking that this same name image is already present inside the database or not, if present then don't insert data & show error message, otherwise insert data.

            $check_same_image_query = "Select * from profile where image='$upload_img'";

            $is_imgage_present = mysqli_query($con,     $check_same_image_query);   // Remember it is always going to return something so instead of directly write this into if-else, if part is always execute, that's why use `mysqli_num_row()` this method and pass this in the agrument it will check, the rows of this record if greater than 0 meaning there is already this profile present, otherwise insert the data into the database.

            if (mysqli_num_rows($is_imgage_present) > 0) {
                $error = "This image already present inside the database!!!, choose another image";
            } else {
                $insert_image = "insert into profile (image) values ('$upload_img')";

                $result = mysqli_query($con, $insert_image);
                if ($result) {
                    echo "<br>Data inserted Successfully";
                } else {
                    die(mysqli_errno($con));
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php if (!empty($error)) : ?>
        <p class="error_message"><?php echo $error ?></p>
    <?php endif; ?>
    <div class="container">
        <div class="form_container">
            <h2>Profile Card</h2>
            <!-- If we don't use `enctype = multipart/form-data` attribute then we can't send or insert images or data or files to the database. -->
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form_group">
                    <input type="file" class="input_field" name="image_file">
                </div>
                <div class="form_group">
                    <input type="submit" class="submit_btn" name="submit">
                </div>
            </form>
            <a href="display.php" class="link">View Profile</a>
        </div>
    </div>
</body>

</html>