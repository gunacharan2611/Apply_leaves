
					
<?php
session_start();
if(isset($_SESSION['Auid'])!=NULL){
    //echo "WELCOME".$_SESSION['Auid'];
    if(isset($_POST['insert'])){
        $servername = "localhost";
$username = "root";
$pass = "";
$dbname = "srm";
$mysqli = new mysqli("localhost", $username, $pass, $dbname); 
$query = "SELECT * FROM users";
$flag=1;
//$val = $_POST['select']; 
    
    $regnum=$_POST['regnum'];
    $sid=(int)substr($regnum,2);
    //echo $regnum.'.'.$sid;
    $names=$_POST['names'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
    $department=$_POST['department'];
    $semester=$_POST['semester'];
    $conn = mysqli_connect($servername, $username, $pass, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    if($flag==1){  
        //echo "hii";      
    $sql = "INSERT INTO users (sid,names,email,passwords,mobile,department,semester)
            VALUES ($sid,'$names','$email','$password','$mobile','$department',$semester)";
if (mysqli_query($conn, $sql)) {
    echo "<br><br><br><p align='center'> <font color=green  size='4pt'>NEW RECORD CREATED SUCCESSFULLY</font> </p>";
    echo '<html><body><div align="center"><a href="index.php"><-GO TO DASHBOARD</a></div></body></html>';

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}    

}

mysqli_close($conn);  
    }

    
    
}
    
else{
        echo "PLEASE LOGIN";
    }
	include('footer.php');
?>