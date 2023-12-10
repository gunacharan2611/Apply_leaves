<?php
$connect = mysqli_connect("localhost", "root", "", "srm");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM faculty WHERE reg_number = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>