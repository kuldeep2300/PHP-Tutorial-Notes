<!-- Filter Email
 
Basically in php to filter email and validate email we use these filters. 
We can also validate int, string, url, and email using these `FILTER_VALIDATE_URL`, `FILTER_VALIDATE_EMAIL`, `FILTER_VALIDATE_INT`.
We can also sanitize email, meaning if there is special character in mail then we can remove it and insert properly format email inside the database.

//? Syntax : filter_var(variable, filtername, flag)
//? First arguement in which variable we want to apply filter and second argument that filtername for email, int, string, url, third is optional like we use in the `htmlentities` and `htmlspecialchars`.
-->

<?php
$email = "kuldeep_(@gmail.com";
$sanitize = filter_var($email, FILTER_SANITIZE_EMAIL); // This will also apply on email, but only prevent (/) not sanitize #, $, like this.
echo $sanitize."<br>";


// if(filter_var($email, FILTER_VALIDATE_EMAIL)) { // This filter type check only structure like [local]@gmail.com, it not check any special character $, # and give us email valid that's why we use another validation for email. This is only apply for brakcet and underscores.
//     echo "Email is valid";
// } else {
//     echo "Email is not valid";
// }

?>