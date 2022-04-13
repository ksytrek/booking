<?php
date_default_timezone_set('Asia/Bangkok');
include_once('../../config/config.inc.php');
include_once('../../config/connectdb.php');


if (isset($_POST['key']) && $_POST['key'] == 'editCustomer') {
    $value =  $_POST['data'];

    $id_cm = $value['id_cm'];
    $id_code = $value['id_code'];
    $name_cm = $value['name_cm'];
    $lastname_cm = $value['lastname_cm'];
    $uname_cm = $value['uname_cm'];
    $tel_cm = $value['tel_cm'];
    $pass_cm = $value['pass_cm'];

    $sql_insert = "UPDATE `customer` SET `id_code` = '$id_code', 
                                        `name_cm` = '$name_cm', 
                                        `lastname_cm` = '$lastname_cm', 
                                        `uname_cm` = '$uname_cm', 
                                        `tel_cm` = '$tel_cm', 
                                        `pass_cm` = '$pass_cm' 
                                WHERE `customer`.`id_cm` = '$id_cm';";

    $sql_search_idCode = "SELECT * FROM `customer` WHERE id_code = '$id_code' AND id_cm != '$id_cm'";
    $sql_search_user = "SELECT * FROM `customer` WHERE uname_cm = '$uname_cm' AND id_cm != '$id_cm'";

    $row_search = Database::query($sql_search_idCode, PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);
    if ($row_search == null) {
        $row_search_user  = Database::query($sql_search_user, PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);
        if ($row_search_user == null) {
            if (Database::query($sql_insert)) {
                echo "success";
            } else {
                echo "error";
            }
        } else {
            echo "lcodeX02";
        }
    } else {
        echo "lcodeX01";
    }
}


if(isset($_POST['key']) && $_POST['key'] =='deleteCustomer'){
    $id_cm = $_POST['id_cm'];

    $sql_delete = "DELETE FROM `customer` WHERE `customer`.`id_cm` = '$id_cm'";

    if(Database::query($sql_delete)){
        echo "success";
    }else{
        echo "error";
    }

}
