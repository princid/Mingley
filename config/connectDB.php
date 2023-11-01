<?php
define('SERVER_NAME', 'localhost');
define('USER_NAME', 'phpmyadmin');
define('USER_PASSWORD', 'root');
define('DB_NAME', 'mingley');

// For windows if there's no username and pssword assigned
// define('SERVER_NAME', 'localhost');
// define('USER_NAME', 'root');
// define('USER_PASSWORD', '');
// define('DB_NAME', 'adventaplate');

$conn = mysqli_connect(SERVER_NAME, USER_NAME, USER_PASSWORD, DB_NAME) or die("Connection error");

// if ($conn->connect_error) {
//     die("Connection error" . $conn->connect_error);
// } else {
//     // echo "Database Connection Successful ! ";
// }
