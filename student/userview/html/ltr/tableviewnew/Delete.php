<?php

include 'conn.php';
session_start();
$data=$_GET['id'];

$q = " DELETE FROM forms_reason WHERE id = $data ";
$q1 = " DELETE FROM images WHERE id = $data";
mysqli_query($con, $q1);
mysqli_query($con, $q);

header('location:display.php');

?>