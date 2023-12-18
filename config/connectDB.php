<?php

require("constants.php");

$conn = mysqli_connect(SERVER_NAME, USER_NAME, USER_PASSWORD, DB_NAME) or die("Connection error");

// if ($conn->connect_error) {
//     die("Connection error" . $conn->connect_error);
// } else {
//     // echo "Database Connection Successful ! ";
// }
