<?php
/* 
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
echo "<pre>";
print_r($_POST);
echo "</pre>"; */

//* Using request superglobal variable we can access both method data post and get, but it is recommended to use get or post based on their use case, if we are using $_REQUEST super global variable then we are making project open for injections for hacking.

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

