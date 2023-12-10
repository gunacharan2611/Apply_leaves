<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srm";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE admins (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    names VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    passwords VARCHAR(30) NOT NULL,
    mobile VARCHAR(30) NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table users created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
    ?>