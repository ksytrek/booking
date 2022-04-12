<?php
date_default_timezone_set('Asia/Bangkok');
include_once('../config/config.inc.php');
include_once('../config/connectdb.php');


if (isset($_POST['key']) && $_POST['key'] == 'edit_customer_cl') {

    $values = $_POST['data'];

    $id_cm = $values['id_cm'];
    $id_code = $values['id_code'];
    $name_cm = $values['name_cm'];
    $lastname_cm = $values['lastname_cm'];
    $uname_cm = $values['uname_cm'];
    $pass_cm = $values['pass_cm'];
    $tel_cm = $values['tel_cm'];

    $sql_update  = "UPDATE `customer` SET `id_code` = '$id_code', 
                                            `name_cm` = '$name_cm', 
                                            `lastname_cm` = '$lastname_cm', 
                                            `uname_cm` = '$uname_cm', 
                                            `tel_cm` = '$tel_cm', 
                                            `pass_cm` = '$pass_cm' 
                                WHERE `customer`.`id_cm` = '$id_cm';";

    $sql_search_idCode = "SELECT * FROM `customer` WHERE id_code = '$id_code' AND id_cm != '$id_cm'";

    $row_search = Database::query($sql_search_idCode, PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);

    if($row_search == null){
        if (Database::query($sql_update)) {
            echo "success";
        } else {
            echo "error";
        }
    }else{
        echo "error";
    }

}

if (isset($_POST['key']) && $_POST['key'] == '') {

    
}
