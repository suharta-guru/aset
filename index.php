<?php 



if($_COOKIE['login']!=''){
    include('views/dashboard.php');

}else{
    include('views/login.php');

}

?>