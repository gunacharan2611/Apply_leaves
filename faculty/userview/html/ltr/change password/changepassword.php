<?php
session_start();
if(isset($_SESSION['fuid'])!=NULL){
$username = "root"; 
$password = ""; 
$database = "srm"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM faculty";
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
    $sql = "UPDATE faculty SET passwords=$newpass WHERE id=$id";
if ($mysqli->query($sql) === TRUE) {
      
       echo '<h5>Password Updated </h5>';
   
   }
}
   else{
    echo '<h5>Wrong credentials</h5>';
   }
}
?>
