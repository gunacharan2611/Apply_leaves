<?php
session_start();
$username = "root"; 
$password = ""; 
$database = "srm"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM faculty";
 $flag=0;
if(isset($_POST["login"])){
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["passwords"];
	$emails=$row["email"];
        $designation=$row["designation"];
        $regnum=$row["reg_number"];  
        $uname=$row["names"];      
 if($_POST["username"]==$emails && $_POST["pass"]==$field1name)
 {
    $_SESSION['fuid']=$regnum;
    $_SESSION['designation']=$designation;
    $_SESSION['funame']=$uname;
    
     $flag=1;
 break;
    
 }

 
    }
    $result->free();
} 
}
if($flag==1){
    
    header('Location:userview\html\ltr\newindex.php');

 }
 else{
    echo "<br><br><br><p align='center'> <font color=red  size='4pt'>USERNAME OR PASSWORD IS INCORRECT</font> </p>";

 }
?>