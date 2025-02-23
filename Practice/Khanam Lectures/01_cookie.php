<?php

setcookie("username", "Kuldeep", time() + 3600, "/");
echo $_COOKIE["username"];  