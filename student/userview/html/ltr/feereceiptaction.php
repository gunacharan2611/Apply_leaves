<?php
session_start();
if(isset($_POST['feereceipt'])){
     
   
    $reg_number=$_SESSION['suid'];
    $sid=$reg_number;

    $fromdate=$_POST['from_date'];
    $todate=$_POST['to_date'];
    $reason=$_POST['reason'];
    $email=$_SESSION['semail'];
    $designation="deputy-registar";
    $formname="fee-receipt";
    $status="pending";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "srm";
    $formid=4;
    $_SESSION['formid']=$formid;
    $_SESSION['form']=$formname;
    $_SESSION['suid']=$reg_number;
    $sid=$reg_number;
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $connect = mysqli_connect("localhost", "root", "", "srm");  

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{

     $query1 = "SELECT * FROM forms_reason where exists(select F.sid,F.form_id from forms_reason as F where F.sid=$sid and
     F.form_id='$formid')";  
     $result1 = mysqli_query($connect, $query1); 
     
     $depart="select department from users where sid='$reg_number'";
     $departres = mysqli_query($connect, $depart); 
     $rowww = $departres->fetch_assoc();
     $department=$rowww["department"];


        $freg="select reg_number from faculty where department='management' and designation='$designation'";
        $fregres = mysqli_query($connect, $freg); 
        $roww = $fregres->fetch_assoc();
        $regnum=$roww["sid"];
        $res1 = mysqli_fetch_array($result1);
        $query2 = "SELECT now()";  
        $result2 = mysqli_query($connect, $query2);
        //echo $sid; 
        //echo $res1[5];

    $res2 = mysqli_fetch_array($result2);
    $date= $res2["now()"];

    if($res1[5]==NULL){

        $sql = "INSERT INTO forms_reason (sid,reason,from_date,to_date,fstatus,form_id)
        VALUES ($sid,'$reason','$fromdate','$todate','$status',$formid)
        
        ";

if (mysqli_query($conn, $sql)) {
     //header("Location:imagesup.php");
     //echo ''.$_SESSION['form'];
     echo "<br><br><br><p align='center'> <font color=green size='4pt'>FORM SUBMITTED SUCCESSFULLY</font> </p>";

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
