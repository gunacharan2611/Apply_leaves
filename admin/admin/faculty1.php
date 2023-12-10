<?php
session_start();
$username = "root";
$pass = "";
$dbname = "srm";
$servername = "localhost";
$mysqli = new mysqli("localhost", $username, $pass, $dbname); 
$query = "SELECT * FROM faculty";
$flag=0;
$conn = mysqli_connect($servername, $username, $pass, $dbname);

if(isset($_SESSION['Auid'])!=NULL){
    //echo "WELCOME".$_SESSION['Auid'];
    if(isset($_POST['insertf'])){
        

//$val = $_POST['select']; 
    $regnum=(int)$_POST['regnum'];
    $desg=$_POST['desg'];
    $names=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
    $dept=$_POST['dept'];
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        
           
    $sql = "INSERT INTO faculty (reg_number,designation,department,names,email,passwords,mobile)
            VALUES ($regnum,'$desg','$dept','$names','$email','$password',$mobile)";
    }
if (mysqli_query($conn, $sql)) {
    echo "<br><br><br><p align='center'> <font color=green  size='4pt'>NEW RECORD CREATED SUCCESSFULLY</font> </p>";
    echo '<html><body><div align="center"><a href="index.php"><-GO TO DASHBOARD</a></div></body></html>';

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}    

}
else{
    echo "REG_NUMBER ALREADY EXISTS..";
}   

    
    mysqli_close($conn); 
}
    else{
        echo "PLEASE LOGIN";
    }
?>