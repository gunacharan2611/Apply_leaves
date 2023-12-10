<?php
session_start();
if(isset($_POST['medical'])){
     
   
    $reg_number=$_SESSION['suid'];
    $sid=$reg_number;

    $fromdate=$_POST['from_date'];
    $todate=$_POST['to_date'];
    
    $reason=$_POST['reason'];
    $email=$_SESSION['semail'];
    $designation="hod";
    $formname="medical-leave";
    $formid=21;
    $status="pending";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "srm";
    $fid=rand(100,999)*rand(1,10);
    $_SESSION['formid']=$formid;
    $_SESSION['form']=$formname;
    $_SESSION['suid']=$reg_number;
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $connect = mysqli_connect("localhost", "root", "", "srm");  

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{

        $query1 = "SELECT * FROM forms_reason where exists(select F.sid,F.form_id from forms_reason as F where F.sid=$sid and
        F.form_id=$formid)"; 
        $query3 = "SELECT * FROM forms_reason where exists(select F.sid,F.form_id from forms_reason as F where F.sid=$sid and
        F.form_id=$formid and F.fstatus='pending')"; 
     $result1 = mysqli_query($connect, $query1); 
     $result3 = mysqli_query($connect, $query3);
     
     $depart="select department from users where sid='$sid'";
     $departres = mysqli_query($connect, $depart); 
     $rowww = $departres->fetch_assoc();
     $department=$rowww["department"];


     $freg="select reg_number from faculty where department='$department' and designation='$designation'";
     $fregres = mysqli_query($connect, $freg); 
     $roww = $fregres->fetch_assoc();
     //$regnum=$roww["sid"];
    $res1 = mysqli_fetch_array($result1);
    $res3 = mysqli_fetch_array($result3);
    echo "hii".$formid;
    $query2 = "SELECT now()";  
 $result2 = mysqli_query($connect, $query2); 


$res2 = mysqli_fetch_array($result2);
$date= $res2["now()"];
    if(($res1==NULL or $res3==Null)){

        $sql = "INSERT INTO forms_reason (sid,reason,from_date,to_date,fstatus,form_id, uploaded_date)
        VALUES ($sid,'$reason','$fromdate','$todate','$status',$formid, '$date')";
        
if (mysqli_query($conn, $sql)) {
    $query4 = "SELECT id from forms_reason where uploaded_date = '$date'";
    $free = mysqli_query($conn, $query4); 
    $roo = $free->fetch_assoc();
    $_SESSION['id']= $roo['id'];
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
