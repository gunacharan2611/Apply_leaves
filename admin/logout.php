<?php 
  session_start(); 
  session_destroy();
    unset($_SESSION['Auid']);
    unset($_SESSION['Auname']);
      header("location: index.html");

?>