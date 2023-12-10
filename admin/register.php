<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srm";

// Create connection
//if(isset($_SESSION['uid'])){
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['names'];
$email = $_POST['mail'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];
$mobile = $_POST['mobile'];
if($password==$rpassword){
$sql = "INSERT INTO admins(names,email,passwords,mobile)
VALUES ('$name','$email','$password','$mobile')";

if (mysqli_query($conn, $sql)) {
    echo "<br><br><br><p align='center'> <font color=green  size='5pt'>REGISTRATION SUCCESSFUL</font> </p>";
	echo '
<div align="center">
<a href="index.html"><-GO TO LOG-IN</a>
</div>
';
    mysqli_close($conn); 

}
}

else {
    echo "PASSWORDS DOESNOT MATCH";
}
}


?>