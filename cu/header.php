<?php
include_once('../config/config.inc.php');
include_once('../config/connectdb.php');
session_start();

$data = null;
$DATA_ = null;

$ID = null;
$name_cm = null;
$id_code = null;
$lastname_cm = null;
$uname_cm = null;
$tel_cm = null;
$pass_cm = null;


if (isset($_SESSION['key']) && $_SESSION['key'] == 'cm') {
    $DATA_ = $_SESSION['data'];
    $ID = $DATA_->id_cm;

    $data = Database::query("SELECT * FROM `customer` WHERE id_cm = '$ID'", PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);

    $id_code = $data->id_code;
    $name_cm = $data->name_cm;
    $lastname_cm = $data->lastname_cm;
    $uname_cm = $data->uname_cm;
    $tel_cm = $data->tel_cm;
    $pass_cm = $data->pass_cm;

} else {
    header('Location: ' . "../controllers/logout.php");
}
?>

