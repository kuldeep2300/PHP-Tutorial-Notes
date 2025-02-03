<?php include './includes/connect.php';

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    // echo $id;

    // Delete Query 
    $delete_query = "Delete from crud where id=$id";
    $result = mysqli_query($con, $delete_query);

    if ($result) {
        echo "<script>
        alert('Record Deleted Successfully');
        </script>";
        echo "<script>
        window.open('display.php', '_self');
        </script>";
    } else {
        die(mysqli_error($con));
    }
}
