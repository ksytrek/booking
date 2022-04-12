<?php
date_default_timezone_set('Asia/Bangkok');
include_once('../config/config.inc.php');
include_once('../config/connectdb.php');
session_start();

if (isset($_POST['key']) && $_POST['key'] == 'form-login-ad') {
    $row_ad = null;
    $values = $_POST['data'];

    $uname_ad = $values['uname_ad'];
    $pass_ad = $values['pass_ad'];

    $sql_login = "SELECT * FROM `admin` WHERE uname_ad = '$uname_ad' AND pass_ad ='$pass_ad'";
    $row_ad = Database::query($sql_login, PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);

    // print_r($row_ad);
    if($row_ad != null){
        if($uname_ad == $row_ad->uname_ad && $pass_ad == $row_ad->pass_ad ){
            $_SESSION['key'] = 'ad';
            $_SESSION['data'] = $row_ad;
            echo "success";
        }else{
            echo "error";
        }
    }else{
        echo "error";
    }
}
