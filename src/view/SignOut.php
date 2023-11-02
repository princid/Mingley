<?php

session_start();

require_once("../../config/connectDB.php");

session_unset();

session_destroy();

header("location: SignIn.php")

?>