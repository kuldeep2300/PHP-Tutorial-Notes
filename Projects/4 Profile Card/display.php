<?php include 'includes/connect.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="table_container">
        <table class="table">
            <thead>
                <tr class="head">
                    <th>ID</th>
                    <th>Profile Image</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $select_image_query = "select * from profile";
                    $result = mysqli_query($con, $select_image_query);

                    $i = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $image = $row['image'];

                        echo "
                        <tr>
                            <td>$i</td>
                            <td><img src='$image'></td>
                        </tr>";
                        $i++;
                    }

                ?>
        </table>
    </div>
    <a href="index.php" class="link">Back</a>
</body>

</html>