<?php
session_start();
$username = "root"; 
$password = ""; 
$database = "srm"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM users";
 $flag=0;
if(isset($_POST["login"])){
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["passwords"];
        $email=$row["email"];
        echo $email;
        $regnum=$row["sid"]; 
        echo $email;       
 if($_POST["username"]==$email && $_POST["pass"]==$field1name)
 {
    $_SESSION['suid']=$regnum;
    $_SESSION['semail']=$email;
    $flag=1;
 break;
 }

 
    }
    $result->free();
} 
}
if($flag==1){
    header('Location:userview\html\ltr\newindex.php');
    echo "welcome".$_SESSION['semail'];


 }
 else{
    echo "<br><br><br><p align='center'> <font color=red  size='4pt'>USERNAME OR PASSWORD IS INCORRECT</font> </p>";

 }
?>