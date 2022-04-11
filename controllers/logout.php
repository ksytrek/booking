<?php 
session_start();
unset($_SESSION['key']);

if(session_destroy()){
    header("Location:../");
}

?>