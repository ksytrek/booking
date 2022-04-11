<?php

include_once('../../config/config.inc.php');
include_once('../../config/connectdb.php');


if (isset($_POST['key']) && $_POST['key'] == 'form-reserve') {
    $values = $_POST['data'];

    $id_cm = $values['id_cm'];
    $id_tb = $values['id_tb'];
    $people_sum = $values['people_sum'];
    $date_re = $values['date_re'];
    $timeStart_re = $values['timeStart_re'];
    $timeEnd_re = $values['timeEnd_re'];

    $sql_search = "SELECT * FROM reservation_tb WHERE ((timeStart_re BETWEEN '$timeStart_re:00' and '$timeEnd_re') or (timeEnd_re BETWEEN '$timeStart_re' and '$timeEnd_re:00')) AND id_tb = '$id_tb' AND date_re = '$date_re'  ";
    $row = Database::query($sql_search, PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);
    if ($row == null) {
        // สามารถจองได้
        $sql_insert = "INSERT INTO `reservation_tb` (`id_re`, `id_cm`, `id_tb`, `people_sum`, `date_re`, `timeStart_re`, `timeEnd_re`, `create_time`, `status_re`) VALUES 
                                                    (NULL, '$id_cm', '$id_tb', '$people_sum', '$date_re', '$timeStart_re', '$timeEnd_re', current_timestamp(), '0');";
        if (Database::query($sql_insert)) {
            $sql_search = "SELECT * FROM `reservation_tb`  as rt  INNER JOIN service_table as st ON st.id_tb = rt.id_tb WHERE rt.status_re = '0'";
            $resultArray = array();
            $json_txt = "";

            if ($show_tebelig = Database::query($sql_search, PDO::FETCH_OBJ)) {
                foreach ($show_tebelig  as $row) {
                    $title = 'โต๊ะ '.$row->zone_tb.' '.$row->no_tb;

                    $dateStart = $row->date_re;
                    $timeStart = $row->timeStart_re;
                    $timeEnd = $row->timeEnd_re;

                    $new_row = [
                        "title" => $title,
                        "start" => $dateStart.'T'.$timeStart.'+07:00',
                        "end" => $dateStart.'T'.$timeEnd.'+07:00',
                    ];

                    array_push($resultArray, $new_row);
                }
                $json_txt =  json_encode($resultArray);
            } else {
                $json_txt =  json_encode($resultArray);
            }

            $Afile = "events.json";
            $myfile = fopen("../../json/" . $Afile, "w") or die("error");
            if (fwrite($myfile, $json_txt)) {
                echo "success";
            }
            fclose($myfile);

            
        } else {
            echo "error";
        }
    } else {
        // สามารถจองได้
        echo "error";
    }


    // print_r($row);

}
