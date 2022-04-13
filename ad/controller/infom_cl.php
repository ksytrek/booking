<?php
date_default_timezone_set('Asia/Bangkok');
include_once('../../config/config.inc.php');
include_once('../../config/connectdb.php');


if (isset($_POST['key']) && $_POST['key'] == 'form-edit_ad'){
    $values = $_POST['data'];

    $id_ad = $values['id_ad'];
    $name_ad = $values['name_ad'];
    $lastname_ad = $values['lastname_ad'];
    $tel_ad = $values['tel_ad'];
    $uname_ad = $values['uname_ad'];
    $pass_ad = $values['pass_ad'];

    $sql_add = "UPDATE `admin` SET `name_ad` = '$name_ad', 
                                    `lastname_ad` = '$lastname_ad', 
                                    `uname_ad` = '$uname_ad', 
                                    `pass_ad` = '$pass_ad', 
                                    `tel_ad` = '$tel_ad'
                             WHERE `admin`.`id_ad` = '$id_ad';";
    if(Database::query($sql_add)){
        echo "success";
    }else{
        echo "error";
    }
}

