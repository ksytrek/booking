<?php
date_default_timezone_set('Asia/Bangkok');
include_once('../../config/config.inc.php');
include_once('../../config/connectdb.php');


if (isset($_POST['key']) && $_POST['key'] == 'addSv_tb'){
    $values = $_POST['data'];

    $zone_tb = $values['zone_tb'];
    $no_tb = $values['no_tb'];


    $sql_add = "INSERT INTO `service_table` (`id_tb`, `zone_tb`, `no_tb`, `status_tb`) VALUES (NULL, '$zone_tb', '$no_tb', '0');";
    if(Database::query($sql_add)){
        echo "success";
    }else{
        echo "error";
    }
}

if (isset($_POST['key']) && $_POST['key'] == 'deleteSv_tb'){
    $id_tb = $_POST['id'];

    $sql_delete = "UPDATE `service_table` SET `status_tb` = '1' WHERE `service_table`.`id_tb` = '$id_tb';";

    if(Database::query($sql_delete)){
        echo "success";
    }else{
        echo "error";
    }



    
}

if (isset($_POST['key']) && $_POST['key'] == 'editSv_tb'){
    $values = $_POST['data'];

    $id_tb = $values['id_tb'];
    $zone_tb = $values['zone_tb'];
    $no_tb = $values['no_tb'];


    $sql_edit = "UPDATE `service_table` SET `zone_tb` = '$zone_tb', 
                                            `no_tb` = '$no_tb' 
                            WHERE `service_table`.`id_tb` = '$id_tb';";
    if(Database::query($sql_edit)){
        echo "success";
    }else{
        echo "error";
    }
    
}