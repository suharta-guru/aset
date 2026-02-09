<?php 

session_start();
error_reporting(0);

if($_SESSION['status']!=''){
   include('views/dashboard.php');
    
}else{
    include('views/login.php');
    
}

?>