
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "database1";


$conn = new mysqli($servername, $username, $password, $db_name, 3308);
                     
if ($conn->connect_errno) {
    die("Connection error: " . $conn->connect_error);
}

return $conn;



 