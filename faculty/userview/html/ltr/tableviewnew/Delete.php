<?php

include 'conn.php';
session_start();
//$id = $_GET['id'];
$data=$_GET['id'];

echo $data;
//$fname=$_SESSION['form'];
$q = " DELETE FROM forms_reason WHERE id = $data";
$q1 = " DELETE FROM images WHERE id = $data";
mysqli_query($con, $q1);
mysqli_query($con, $q);
//header("Location:faculty\userview\html\ltr\newindex.php");
header('location:display.php');

?>