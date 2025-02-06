<?php include './includes/connect.php';

$username_msg = "Username Should be between 3 to 30 Characters";
$place_msg = "Place Should be between 3 to 30 Characters";
$invalid_email = "Invalid Email Address";
$phone_msg = "Phone number must be of 10 digits ";
$fill_all_fields = "Please fill all the fields";
$error_messages = array();

if (isset($_POST['submit'])) {
  $username = htmlspecialchars($_POST['username']);
  $email = $_POST['email'];
  $place = htmlspecialchars($_POST['place']);
  $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);  // 0 to 9 other than these will be empty printed.

  // 1) str_replace() For - Extra spaces
  $username = str_replace(" ", "", $username);
  $place = str_replace(" ", "", $place);

  // 2) ucfirst() or ucwords() and strtolower() For - Proper naming format
  $username = ucfirst(strtolower($username));
  $place = ucfirst(strtolower($place));


  if (empty($username) || empty($email) || empty($phone) || empty($place)) { // Empty() function returns true if variable field is empty otherwise false when field is not empty
    $error_messages[] = $fill_all_fields;
  } else {
    // 3) strlen() For - To prevent inserting very large or very small or repetative value in the database.

    if (strlen($username) < 3 || strlen($username) > 30) {
      $error_messages[] = $username_msg;
    }

    if (strlen($place) < 3 || strlen($place) > 30) {
      $error_messages[] = $place_msg;
    }

    // 4) Validate email using - filter_var()
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
      $error_messages[] = $invalid_email;
    }

    // 5) Phone number field validation
    if (strlen($phone) !== 10 || !ctype_digit($phone) || strlen($phone) <= 0) {
      $error_messages[] = $phone_msg;
    }

    // 6) Before Inserting check existing username, or email exist in database or not
    if (empty($error_messages)) {    // If there is no error or invalid messages in array then
      $check_query = "Select * from validate where username = '$username' or email = '$email'";
      $check_result = mysqli_query($con, $check_query);

      if (!$check_result) {
        echo "<script>
          alert('Error checking existing data');
        </script>";
      }

      if (mysqli_num_rows($check_result) > 0) {
        $existing_user_email_error = "Username or Email already exist";
        // echo "<script>
        // alert('Username or Email already exist');
        // </script>";
      } else {
        // Validating and sanitiging the values
        $username = mysqli_real_escape_string($con, $username);
        $email = mysqli_real_escape_string($con, $email);
        $place = mysqli_real_escape_string($con, $place);
        $phone = mysqli_real_escape_string($con, $phone);

        $insert_query = "insert into validate (username,email,phone,place) values ('$username','$email','$phone','$place')";
        $result = mysqli_query($con, $insert_query);
        if ($result) {
          echo "<script>alert('Data inserted successfully')</script>";
          echo "<script>window.open('index.php','_self')</script>";
        } else {
          die(mysqli_error($con));
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
  <title>Form Validation</title>
  <link rel="stylesheet" href="style.css?v1=a">
</head>

<body>
  <div class="form_container">
    <h1 class="heading">Form Validation</h1>
    <?php
    if (in_array($fill_all_fields, $error_messages)) {
      echo '<span class="error_messages" id="all_fields_error">' . $fill_all_fields . '</span>';
    }
    ?>
    <div>
      <form action="" method="post">
        <div class="form_group" id="user_email_exist">
          <span class="error_messages">
            <?php echo isset($existing_user_email_error) ? $existing_user_email_error : ""; ?>
          </span>
        </div>
        <input type="text" name="username" placeholder="Enter your username" class="input_field" autocomplete="off" />
        <!-- 4) Using In array to show messages -->
        <?php
        if (in_array($username_msg, $error_messages)) {
          echo '<span class="error_messages">' . $username_msg . '</span>';
        }
        ?>
        <input type="email" name="email" placeholder="Enter your email" class="input_field" autocomplete="off" />
        <?php
        if (in_array($invalid_email, $error_messages)) {
          echo '<span class="error_messages">' . $invalid_email . '</span>';
        }
        ?>
        <input type="number" name="phone" placeholder="Enter your phone" class="input_field" autocomplete="off" />
        <?php
        if (in_array($phone_msg, $error_messages)) {
          echo '<span class="error_messages">' . $phone_msg . '</span>';
        }
        ?>
        <input type="place" name="place" placeholder="Enter your place" class="input_field" autocomplete="off" />
        <?php
        if (in_array($place_msg, $error_messages)) {
          echo '<span class="error_messages">' . $place_msg . '</span>';
        }
        ?>
        <button type="submit" class="btn" name="submit">Submit Form</button>
      </form>
    </div>
  </div>

  <!-- JavaScript code to clear input fields -->
  <script>
    // Clear error message when input fields are focused
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      const inputFields = form.querySelectorAll('input');
      const allFieldsError = document.getElementById('all_fields_error');
      const userEmailError = document.getElementById('user_email_exist');

      inputFields.forEach(function(input) {
        input.addEventListener('focus', function() {
          if (allFieldsError) {
            allFieldsError.textContent = ''; // Clear the "Please fill in all fields".
          }
          if (userEmailError) {
            userEmailError.textContent = '';
          }

          const errorSpan = this.nextElementSibling;
          if (errorSpan && errorSpan.classList.contains('error_messages')) {
            errorSpan.textContent = '';
          }
        });
      });
    });
  </script>
</body>

</html>