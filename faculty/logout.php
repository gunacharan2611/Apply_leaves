<?php 
  session_start(); 
  session_destroy();
  	unset($_SESSION['fuid']);
	unset($_SESSION['designation']);
    unset($_SESSION['funame']);
      header("location: index.html");

?>