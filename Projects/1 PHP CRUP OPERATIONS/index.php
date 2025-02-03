<?php include './includes/connect.php';

if (isset($_POST['submit'])) {
  // 1) Access data from the form data
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $place = $_POST['place'];

  // 2) Insert data into the database
  $insert_query = "insert into crud (username, email, phone, place) values ('$username', '$email', '$phone', '$place')";

  $result = mysqli_query($con, $insert_query);

  if ($result) {
    // echo "Data Inserted Successfully";
    echo "<script>
    alert('Data Inserted Successfully');
    </script>";
    echo "<script>
    window.open('index.php', '_self');
    </script>";
  } else {
    die(mysqli_error($con));
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP - CRUD Operation</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="form_container">
    <form action="" method="post">
      <fieldset>
        <legend>Personal Details</legend>
        <label for="username"></label>
        <span>Name <span class="required">*</span></span><input
          type="text"
          placeholder="Enter your Username"
          autocomplete="off"
          autofocus
          name="username"
          required />

        <label for="email"></label>
        <span>Email <span class="required">*</span></span><input
          type="email"
          placeholder="Enter your Email"
          autocomplete="off"
          name="email"
          required />

        <label for="phone"></label>
        <span>Phone <span class="required">*</span></span><input
          type="number"
          placeholder="Enter your Mobile"
          autocomplete="off"
          name="phone"
          required />

        <label for="place"></label>
        <span>Place <span class="required">*</span></span><input
          type="text"
          placeholder="Enter your Place"
          autocomplete="off"
          name="place"
          required />

        <input type="submit" class="submit_btn" name="submit" />

        <a href="display.php" class="view_data">Details</a>
        <!-- <a
          href="https://www.youtube.com/c/StepbyStep_KhanamCoding"
          class="view_data"
          target="_blank">Channel</a> -->
      </fieldset>
    </form>
  </div>

  <div class="footer">
    <p>All r ight reserved- Made with 💖 by Khanam</p>
  </div>
</body>

</html>