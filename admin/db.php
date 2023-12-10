<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srm";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE forms(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    reg_number VARCHAR(30) UNIQUE NOT NULL,
    names VARCHAR(30) NOT NULL,
    form_name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    mobile VARCHAR(30) NOT NULL,
    reason VARCHAR(30) NOT NULL,
    designation VARCHAR(30) NOT NULL,
	from_date VARCHAR(30) NOT NULL,
to_date VARCHAR(30) NOT NULL


    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table users created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
    ?>