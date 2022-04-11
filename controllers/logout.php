<?php 
date_default_timezone_set('Asia/Bangkok');
session_start();
unset($_SESSION['key']);

if(session_destroy()){
    header("Location:../");
}

?>