<?php 
  session_start(); 
//require('user_info.php');
//$ip= UserInfo::get_ip();
//echo $ip;
  session_destroy();
    unset($_SESSION['suid']);
    unset($_SESSION['semail']);
      header("location: ../../../index.html");

?>