<?php
session_start();
$username = "root"; 
$password = ""; 
$database = "srm"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM admins";
 $flag=0;
if(isset($_POST["login"])){
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["passwords"];
	
        $emails=$row["email"];
        $uname=$row["names"];      
 if($_POST["email"]==$emails && $_POST["password"]==$field1name)
 {
     $_SESSION['Auid']=$emails;
     $_SESSION['Auname']=$uname;
     $flag=1;
 break;
 }
    }
    $result->free();
} 
}

if($flag==1){
    header("Location:admin\index.php");
    echo "welcome".$_SESSION['Auid'];

}
else{
echo "<br><br><br><p align='center'> <font color=red  size='4pt'>USERNAME OR PASSWORD IS INCORRECT</font> </p>";
}
?>