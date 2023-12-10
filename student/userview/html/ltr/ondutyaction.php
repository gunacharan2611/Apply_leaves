<?php
session_start();
if(isset($_POST['onduty'])){
     
    
    $sid=$_SESSION['suid'];

    $fromdate=$_POST['from_date'];
    $todate=$_POST['to_date'];
    $reason=$_POST['reason'];
    $email=$_SESSION['semail'];
    $designation="hod";
    $formname="on-duty";
    $formid=21;
    $status="pending";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "srm";
    $fid=rand(100,999)*rand(1,10);
    $_SESSION['formid']=$formid;
    $_SESSION['form']=$formname;
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $connect = mysqli_connect("localhost", "root", "", "srm");  

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{

        $query1 = "SELECT * FROM forms_reason where exists(select F.sid,F.form_id from forms_reason as F where F.sid=$sid and F.form_id=$formid)"; 
     $result1 = mysqli_query($connect, $query1); 
     echo $sid, $formid;
     $depart="select department from users where sid='$sid'";
     $departres = mysqli_query($connect, $depart); 
     $rowww = $departres->fetch_assoc();
     $department=$rowww["department"];


     $freg="select reg_number from faculty where department='$department' and designation='$designation'";
     $fregres = mysqli_query($connect, $freg); 
     $roww = $fregres->fetch_assoc();
     $regnum=$roww["reg_number"];
     $res1 = mysqli_fetch_array($result1);
     // echo "hii".$res1;
    $query2 = "SELECT now()";  
 $result2 = mysqli_query($connect, $query2); 


$res2 = mysqli_fetch_array($result2);
$date= $res2["now()"];
    if(is_null($res1)){
        $sql = "INSERT INTO forms_reason (sid,reason,from_date,to_date,fstatus)
        VALUES ($sid,'$reason','$fromdate','$todate','$status')";

if (mysqli_query($conn, $sql)) {
     header("Location:imagesup.php");
     //echo ''.$_SESSION['form'];
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 
 mysqli_close($conn);
        
    }
    else{
     echo "<br><br><br><p align='center'> <font color=red  size='4pt'>FORM ALREADY SUBMITTED</font> </p>";
}

        

        
        
    }
}
?>
