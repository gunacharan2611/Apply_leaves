<?php  
 $connect = mysqli_connect("localhost", "root", "", "srm");

 $query2 = "SELECT now()";  
 $result2 = mysqli_query($connect, $query2); 


$res2 = mysqli_fetch_array($result2);
echo $res2["now()"];

 
 ?>