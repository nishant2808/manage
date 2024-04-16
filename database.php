<?php
$servername="localhost";
$username= "root";
$password= "password";
$dbname= "newDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed". $conn->connect_error);
}
// $sql = "CREATE TABLE newtable(
//     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(255) NOT NULL,
// lastname VARCHAR(255) NOT NULL,
// email VARCHAR(255) NOT NULL,
// password VARCHAR(255) NOT NULL,
// age INT(255) NOT NULL,
// gender VARCHAR(255) NOT NULL,
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

// )";
// if($conn->query($sql)){
//     echo "creating table successfully";
// }else{
//     echo "Error creating table ". $conn->error;
// }







?>