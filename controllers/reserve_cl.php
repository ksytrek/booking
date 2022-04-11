<?php
date_default_timezone_set('Asia/Bangkok');
include_once('../config/config.inc.php');
include_once('../config/connectdb.php');

if (isset($_POST['key']) && $_POST['key'] == 'cencel_reserve') {
    $id = $_POST['id'];


    $timeNow = $_POST['timeNow'];
    $timeEn = $_POST['timeEn'];

    $date = date('Y-m-d');
    $TimeNP = date('H:i', strtotime('+0 minutes'));
    $TimeEP = date('H:i', strtotime('+100 minutes'));

    // echo $newDate;

    $sql_search = "SELECT * FROM `reservation_tb` WHERE 
    ((timeStart_re BETWEEN '$timeNow' AND '$TimeEP') OR (timeEnd_re BETWEEN '$TimeNP' AND '$TimeEP')) AND date_re <= '$date' AND id_re = '$id';";
    $row_search = Database::query($sql_search, PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);

    if ($row_search == null) {
        // 
        // echo " สามารถยกเลิกการจองได้ (ไม่พบข้อมูล) ";
        // echo $date." ".$TimeNP." ".$TimeEP;
        if (Database::query("UPDATE `reservation_tb` SET `status_re` = '3' WHERE `reservation_tb`.`id_re` = '$id';")) {
            $sql_search = "SELECT * FROM `reservation_tb`  as rt  INNER JOIN service_table as st ON st.id_tb = rt.id_tb WHERE rt.status_re = '0'";
            $resultArray = array();
            $json_txt = "";

            if ($show_tebelig = Database::query($sql_search, PDO::FETCH_OBJ)) {
                foreach ($show_tebelig  as $row) {
                    $title = 'โต๊ะ ' . $row->zone_tb . ' ' . $row->no_tb;

                    $dateStart = $row->date_re;
                    $timeStart = $row->timeStart_re;
                    $timeEnd = $row->timeEnd_re;

                    $new_row = [
                        "title" => $title,
                        "start" => $dateStart . 'T' . $timeStart . '+07:00',
                        "end" => $dateStart . 'T' . $timeEnd . '+07:00',
                    ];

                    array_push($resultArray, $new_row);
                }
                $json_txt =  json_encode($resultArray);
            } else {
                $json_txt =  json_encode($resultArray);
            }

            $Afile = "events.json";
            $myfile = fopen("../json/" . $Afile, "w") or die("error");
            if (fwrite($myfile, $json_txt)) {
                echo "success";
            }
            fclose($myfile);
        }
    } else {
        // echo "ไม่สามารถยกเลิกการจองได้ (พบข้อมูล)";
        // echo $date." ".$TimeNP." ".$TimeEP;
        echo "error";
    }



    // echo $newDate;


    // $date = date_format(time(), '%H:%i');
    // $newDate = date('H:i:s', strtotime($date. ' +100 minutes'));
    //   
    // echo $timeNow. " " . $timeEn;
    // echo $TimeNP." " .$TimeEP ;
}
