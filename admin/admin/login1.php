<?php
session_start();
if(isset($_SESSION['Auid'])!=NULL){
  header("Location:index.php");

}
else{
    echo "unable to process your request";
}