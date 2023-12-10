<?php

include 'conn.php';
session_start();
//$id = $_GET['id'];
$data=$_GET['id'];
            //     $formid=21;

            //    $data=substr($_GET['id'],2);
            //    $sid=$data;
            //    echo $formid;
            //    echo "\r\n";
               echo $data;
$q = " UPDATE forms_reason SET fstatus='accepted' where id=$data";

mysqli_query($con, $q);

header('location:display.php');

?>