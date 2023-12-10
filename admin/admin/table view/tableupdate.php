<?php
$connect = mysqli_connect("localhost", "root", "", "srm");
if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE users SET ".$_POST["column_name"]."='".$value."' WHERE sid = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>
