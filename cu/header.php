<?php 
include_once('../config/config.inc.php');
include_once('../config/connectdb.php');
session_start();

$DATA = null;
$ID = null;
if(isset($_SESSION['key']) && $_SESSION['key'] == 'cm'){
    $DATA = $_SESSION['data'];
    $ID = $DATA->id_cm;
}else{
    header('Location: '."../controllers/logout.php");
}
?>