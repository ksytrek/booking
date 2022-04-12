<?php
include_once('../config/config.inc.php');
include_once('../config/connectdb.php');
session_start();

$data = null;
$DATA = null;
$ID = null;

if (isset($_SESSION['key']) && $_SESSION['key'] == 'ad') {
    $DATA_ = $_SESSION['data'];
    $ID = $DATA_->id_ad;

    $data = Database::query("SELECT * FROM `admin` WHERE id_ad = '$ID'", PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);

} else {
    header('Location: ' . "../controllers/logout.php");
}
?>

