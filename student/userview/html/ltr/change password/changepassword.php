<?php
session_start();
if(isset($_SESSION['uid'])!=NULL){
$username = "root"; 
$password = ""; 
$database = "srm"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM users";
 $flag=0;
 $id="";
 $newpass=$_POST["newpassword"];
if(isset($_POST["reset"])){
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["passwords"];
        $reg=$row["reg_number"];
        $emails=$row["email"];
        $mobilee=$row["mobile"];
        if($reg==$_SESSION["uid"] && $_POST["password"]==$field1name && $_POST["mobile"]==$mobilee){
            $id=$row["id"];
            $flag=1;
        break;
    }
       }
       $result->free();
   } 
   }
   
   if($flag==1){
    $sql = "UPDATE users SET passwords=$newpass WHERE id=$id";
if ($mysqli->query($sql) === TRUE) {
      
    echo "<br><br><br><p align='center'> <font color=green  size='4pt'>PASSWORD UPDATED</font> </p>";
   
   }
}
   else{
    echo "<br><br><br><p align='center'> <font color=red  size='4pt'>WRONG CREDENTIALS</font> </p>";
   }
}
?>
