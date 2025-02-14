<?php

//*  // Instead of passing variable name, directly pass cookie name, because variable name gives error, that it is undefined, if we pass the value directly then we can access this cookie directly because we give the path '/' that's why we can use cookie in the entire page by its name.

echo $_COOKIE['Food'];