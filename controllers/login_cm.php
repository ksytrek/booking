<?php
date_default_timezone_set('Asia/Bangkok');
include_once('../config/config.inc.php');
include_once('../config/connectdb.php');
session_start();

if (isset($_POST['key']) && $_POST['key'] == 'form-login') {
    $row_cm = null;
    $values = $_POST['data'];

    $uname_cm = $values['uname_cm'];
    $pass_cm = $values['pass_cm'];

    $sql_login = "SELECT * FROM `customer` WHERE uname_cm = '$uname_cm' AND pass_cm ='$pass_cm'";
    $row_cm = Database::query($sql_login, PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);

    // print_r($row_cm);
    if($row_cm != null){
        if($uname_cm == $row_cm->uname_cm && $pass_cm == $row_cm->pass_cm ){
            $_SESSION['key'] = 'cm';
            $_SESSION['data'] = $row_cm;
            echo "success";
        }else{
            echo "error";
        }
    }else{
        echo "error";
    }
}
