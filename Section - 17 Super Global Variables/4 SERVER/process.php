<?php

// print_r($_GET);

//* But now I want server configuration details then I can use $_SERVER global variable.

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['REQUEST_TIME'] . "<br>";
