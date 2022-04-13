<?php
include_once('../config/config.inc.php');
include_once('../config/connectdb.php');
session_start();

$data = null;
$DATA_ = null;

$ID = null;
$name_AD = null;
$id_code = null;
$lastname_AD = null;
$uname_AD = null;
$tel_AD = null;
$pass_AD = null;



if (isset($_SESSION['key']) && $_SESSION['key'] == 'ad') {
    $DATA_ = $_SESSION['data'];
    $ID = $DATA_->id_ad ;

    // print_r($DATA_);
    $data = Database::query("SELECT * FROM `admin` WHERE id_ad = '1';", PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);
    // $data = Database::query("SELECT * FROM `customer` WHERE id_cm = '$ID'", PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);
    // print_r($data);
    $name_AD = $data->name_ad;
    $lastname_AD = $data->lastname_ad;
    $uname_AD = $data->uname_ad;
    $pass_AD = $data->pass_ad;
    $tel_AD = $data->tel_ad;

    

} else {
    header('Location: ' . "../controllers/logout.php");
}
