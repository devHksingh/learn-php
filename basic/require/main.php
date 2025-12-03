<?php
include 'config.php';
// include_once 'config.php';
// require_once "config.php";
// require "config.php";

// if config file doesnot exist in include statement it give warning but code is executed.
// in require statement it stop the working of code.
// _once is used get the file once . if file or data is present then do not re include /import data 

echo "Database $dbHost:$dbUser";