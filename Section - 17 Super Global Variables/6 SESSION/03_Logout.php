<?php

//? In this logout file we are going to destroy the session.

//* Step - 1) Start the session
//* Step - 2) Unset the session - Remove all the session variables
//* Step - 3) Destroy Session

session_start();
session_unset();
session_destroy();

echo "Session is destroyed";