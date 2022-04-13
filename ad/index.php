<?php
include_once('./header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>ปลาวาฬใจดี</title>
    <link href='../plugins/fullcalendar/main.css' rel='stylesheet' />
    <script src='../plugins/fullcalendar/main.js'></script>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <!-- <script src='js/theme-chooser.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'> -->
    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="../images/logo5.png">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> -->
    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="../plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="../plugins/slick/slick.css">
    <link rel="stylesheet" href="../plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="../plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../plugins/jQuery/jquery.min.js"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>



    <link rel="stylesheet" href="../plugins/dataTable/datatables.min.css">
    <script type="text/javascript" charset="utf8" src="../plugins/dataTable/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="../plugins/dataTable/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="../plugins/dataTable/datatables.min.js"></script>

</head>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'Asia/Bangkok',
            firstDay: 0,
            dateClick: function(info) {
                // alert('Date: ' + info.dateStr);
                // alert('Resource ID: ' + info.resource.id);
                // $("#date-input").val(info.dateStr);

            },
            headerToolbar: {
                left: 'title',
                center: 'dayGridMonth,listWeek',
                right: 'today prev,next'

            },
            locale: 'th',
            initialDate: new Date(),
            editable: false,
            eventLimit: true,
            navLinks: false, // can click day/week names to navigate views
            selectable: false,
            selectMirror: false,
            select: function(arg) {
                alert('Select')
                // var calendar_input = {
                //     title: title,
                //     start: arg.start,
                //     end: arg.end,
                //     allDay: arg.allDay
                // };



                // $('#reserve_table').modal('show');
                // $("#dataStarts").val(convert(arg.start));
                // $("#dataStarts1").val("17:00:00");
                // alert(arg.start)


                // var title = prompt('Event Title:');
                // if (title) {
                //     calendar.addEvent({
                //         title: title,
                //         start: arg.start,
                //         end: arg.end,
                //         allDay: arg.allDay
                //     })
                // }
                calendar.unselect()
            },
            dayMaxEvents: true, // allow "more" link when too many events
            events: {
                url: '../php/get-events.php',
                failure: function() {
                    document.getElementById('script-warning').style.display = 'block'
                }
            },
            loading: function(bool) {
                document.getElementById('loading').style.display =
                    bool ? 'block' : 'none';
            },
            eventTimeFormat: { // รูปแบบการแสดงของเวลา เช่น '14:30' 
                hour: '2-digit',
                minute: '2-digit',
                meridiem: false
            }
        });

        calendar.render();
        calendar.setOption('themeSystem', 'lux');
    });
</script>
<style>
    .font_krub {
        font-family: 'Krub', sans-serif;
        font-size: 13px;
    }

    #script-warning {
        display: none;
        background: #eee;
        border-bottom: 1px solid #ddd;
        padding: 0 10px;
        line-height: 40px;
        text-align: center;
        font-weight: bold;
        font-size: 12px;
        color: red;
    }

    #loading {
        display: none;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    #calendar {
        max-width: 1100px;
        margin: 40px auto;
        padding: 0 10px;
    }
</style>

<body>
    <?php //include_once('./reserve_model.php'); 
    ?>
    <div class="body-inner">

        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-info text-center text-md-left">
                            <li><i class="fas fa-map-marker-alt"></i>
                                <p class="info-text">เลขที่ 40,42 ถนน พิชิตรังสรรค์ ในเมือง อำเภอเมืองอุบลราชธานี อุบลราชธานี 34000</p>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top info end -->

                    <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                        <ul class="list-unstyled">
                            <li>
                                <a title="Facebook" href="https://www.facebook.com/curacao174">
                                    <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                                </a>

                            </li>
                        </ul>
                    </div>
                    <!--/ Top social end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div>

        <!--/ Topbar end -->
        <!-- Header start -->
        <header id="header" class="header-two">
            <div class="site-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">

                                <div class="logo">
                                    <a class="d-block" href="./">
                                        <img loading="lazy" src="../images/logo1.png" alt="Constra">
                                    </a>
                                </div>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">

                                    <?php include_once('./menu.php'); ?>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </header>

        <!-- ตารางจองลูกค้า  -->
        <section class="call-to-action no-padding">
            <div class="container">
                <div class="action-style-box">
                    <div class="row">
                        <div class="col-md-8 text-center text-md-left">
                            <div class="call-to-action-text">
                                <h3 class="action-title">ตารางจัดการจองคิวลูกค้า</h3>
                            </div>
                        </div>
                        <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                            <div class="call-to-action-btn">
                                <!-- <a class="btn btn-primary" href="contact.html">Request Quote</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ts-features_r" style="padding-top: 30px; " class="ts-features pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <div class="ts-service-box">

                            <table id="mgBook_table" class="table  table-borderless " style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับ</th>
                                        <th class="text-center">ชือลูกค้า</th>
                                        <th class="text-center">โต๊ะ</th>
                                        <th class="text-center">จำนวนคน</th>
                                        <th class="text-center">เบอร์</th>
                                        <th>เวลาจองเข้าร้าน</th>
                                        <th>เวลาที่ร้านกำหนด</th>
                                        <th>สถานะ</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $thaiweek = array("วันอาทิตย์", "วันจันทร์", "วันอังคาร", "วันพุธ", "วันพฤหัส", "วันศุกร์", "วันเสาร์");
                                    $thaimonth = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];

                                    $sql_search = "SELECT *, 
                                                            DATE_FORMAT(rt.date_re, '%d') as Dd , 
                                                            DATE_FORMAT(rt.date_re, '%c') as month , 
                                                            DATE_FORMAT(rt.date_re, '%Y') as year, 
                                                            DATE_FORMAT(rt.timeStart_re, '%H : %i ') as timeStart_n , 
                                                            DATE_FORMAT(rt.timeEnd_re, '%H : %i ') as timeEnd_n 
                                                    FROM `reservation_tb` as rt 
                                                            INNER JOIN service_table as st ON st.id_tb = rt.id_tb 
                                                            INNER JOIN customer as cm ON cm.id_cm = rt.id_cm 
                                                        WHERE (rt.status_re != 2 AND rt.status_re != 3);";
                                    $i_r = null;
                                    foreach (Database::query($sql_search, PDO::FETCH_OBJ) as $row) :
                                        // $date = 'วันที่ '.$row->Dd.' เดือน'.$thaimonth[$row->month-1].' พ.ศ.'.$row->year+543;
                                        $date = '' . $row->Dd . ' ' . $thaimonth[$row->month - 1] . ' ' . (543 + intval($row->year));;
                                        $timeStart_re = $date . "</br> " . $row->timeStart_n . ' น.';
                                        $timeEnd_re = $date . "</br> " . $row->timeEnd_n . ' น.';
                                    ?>
                                        <tr>
                                            <td class="text-center"><?php echo ++$i_r; ?></td>
                                            <td class="text-center"><?php echo $row->name_cm . " " . $row->lastname_cm ?></td>
                                            <td class="text-center"><?php echo $row->zone_tb . "" . $row->no_tb ?></td>
                                            <td class="text-center"><?php echo $row->people_sum; ?></td>
                                            <td><?php echo $row->tel_cm; ?></td>

                                            <td><?php echo $timeStart_re; ?></td>
                                            <td><?php echo $timeEnd_re; ?></td>
                                            <td>
                                                <?php
                                                if ($row->status_re == '0') {
                                                    echo '<span class="badge badge-primary">รอยืนยัน</span>';
                                                } else {
                                                    echo '<span class="badge badge-warning">ยืนยันแล้ว</span>';
                                                }
                                                ?>

                                            </td>
                                            <td>
                                                <?php
                                                if ($row->status_re == '0') {
                                                    echo "<a href=\"javascript:update_reAd('$row->id_re')\" class='badge badge-success'>ยืนยัน</a>";
                                                } else {
                                                    echo "<a href=\"javascript:success_reAd('$row->id_re')\" class='badge badge-primary'>สำเร็จ</a>";
                                                }
                                                ?>
                                                &nbsp;&nbsp;
                                                <a href="javascript:cencel_reAd('<?php echo $row->id_re ?>')" class="badge badge-danger">ยกเลิก</a>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                            <script>
                                function update_reAd(id) {
                                    if (confirm('ต้องการตอบรับจากจองโต๊ะนี้ ใช่หรือไม่')) {
                                        $.ajax({
                                            url: "../controllers/reserve_cl.php",
                                            type: "POST",
                                            data: {
                                                key: "update_reAd",
                                                id: id
                                            },
                                            success: function(result, statusText, jqXHR) {
                                                console.log(result);
                                                if (result == 'success') {
                                                    alert("ตอบรับการจองสำเร็จ");
                                                    location.reload();
                                                } else {
                                                    alert('ตอบรับการจองโต๊ะไม่สำเร็จ')
                                                    location.reload();

                                                }
                                            },
                                            error: function(jqXHR, statusText, error) {
                                                alert('ตอบรับการจองโต๊ะไม่สำเร็จ')
                                            }
                                        });
                                    }
                                }

                                function success_reAd(id) {
                                    if (confirm('ลูกค้าชำระเงินเสร็จสิ้น ใช่หรือไม่')) {
                                        $.ajax({
                                            url: "../controllers/reserve_cl.php",
                                            type: "POST",
                                            data: {
                                                key: "success_reAd",
                                                id: id
                                            },
                                            success: function(result, statusText, jqXHR) {
                                                console.log(result);
                                                if (result == 'success') {
                                                    alert("บันทึกลงประวัติการจองสำเร็จ");
                                                    location.reload();
                                                } else {
                                                    alert('บันทึกลงประวัติการจองไม่สำเร็จ')
                                                    location.reload();

                                                }
                                            },
                                            error: function(jqXHR, statusText, error) {
                                                alert('บันทึกลงประวัติการจองไม่สำเร็จ')
                                            }
                                        });
                                    }
                                }

                                function cencel_reAd(id) {
                                    if (confirm('ต้องการยกเลิกจากจองใช้หรือไม่')) {
                                        $.ajax({
                                            url: "../controllers/reserve_cl.php",
                                            type: "POST",
                                            data: {
                                                key: "cencel_reserveAd",
                                                id: id
                                            },
                                            success: function(result, statusText, jqXHR) {
                                                console.log(result);
                                                if (result == 'success') {
                                                    alert("ยกเลิกการจองสำเร็จ");
                                                    location.reload();
                                                } else {
                                                    alert('ยกเลิกการจองโต๊ะไม่สำเร็จ')
                                                    location.reload();

                                                }
                                            },
                                            error: function(jqXHR, statusText, error) {
                                                alert('ยกเลิกการจองโต๊ะไม่สำเร็จ')
                                            }
                                        });
                                    }
                                }

                                $(document).ready(function() {
                                    ad_mgBook_table();
                                });

                                function ad_mgBook_table() {
                                    $('#mgBook_table').DataTable({
                                        dom: 'lBfrtip',
                                        lengthMenu: [
                                            [10, 25, 50, 60, -1],
                                            [10, 25, 50, 60, "All"]
                                        ],
                                        language: {
                                            sProcessing: "กำลังดำเนินการ...",
                                            sLengthMenu: "แสดง  _MENU_  แถว",
                                            sZeroRecords: "ไม่พบข้อมูล",
                                            sInfo: "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                                            sInfoEmpty: "แสดง 0 ถึง 0 จาก 0 แถว",
                                            sInfoFiltered: "(กรองข้อมูล _MAX_ ทุกแถว)",
                                            sInfoPostFix: "",
                                            sSearch: "ค้นหา: ",
                                            sUrl: "",
                                            oPaginate: {
                                                "sFirst": "เริ่มต้น",
                                                "sPrevious": "ก่อนหน้า",
                                                "sNext": "ถัดไป",
                                                "sLast": "สุดท้าย"
                                            }
                                        }, // sInfoEmpty: "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                                        processing: true, // แสดงข้อความกำลังดำเนินการ กรณีข้อมูลมีมากๆ จะสังเกตเห็นง่าย
                                        //serverSide: true, // ใช้งานในโหมด Server-side processing
                                        // กำหนดให้ไม่ต้องการส่งการเรียงข้อมูลค่าเริ่มต้น จะใช้ค่าเริ่มต้นตามค่าที่กำหนดในไฟล์ php
                                        retrieve: true,
                                        buttons: []
                                    });
                                }
                            </script>

                        </div>
                        <!-- Service1 end -->
                    </div>
                    <!-- Col 1 end -->


                </div>
                <!-- Content row end -->
            </div>
            <!-- Container end -->
        </section>


        <!-- ปฎิทินจองคิว -->
        <section style="margin-top: 50px;" class="call-to-action no-padding">
            <div class="container">
                <div class="action-style-box">
                    <div class="row">
                        <div class="col-md-8 text-center text-md-left">
                            <div class="call-to-action-text">
                                <h3 class="action-title">ตารางการจองลูกค้า</h3>
                            </div>
                        </div>
                        <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                            <div class="call-to-action-btn">
                                <!-- <a class="btn btn-primary" href="contact.html">Request Quote</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ts-features" class="ts-features pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <div class="ts-service-box">
                            <div id='script-warning'>
                                <code>php/get-events.php</code> must be running.
                            </div>

                            <div id='loading'>loading...</div>

                            <div id='calendar'></div>
                        </div>
                        <!-- Service1 end -->
                    </div>
                    <!-- Col 1 end -->


                </div>
                <!-- Content row end -->
            </div>
            <!-- Container end -->
        </section>

        <footer id="footer" class="footer bg-overlay">

            <div class="copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright-info text-center text-md-left">
                                <span>Copyright &copy; <script>
                                        document.write(new Date().getFullYear())
                                    </script>, A-nanyaporn Chuachanthuek
                            </div>
                        </div>
                    </div>


                    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                        <button class="btn btn-primary" title="Back to Top">
                            <i class="fa fa-angle-double-up"></i>
                        </button>
                    </div>

                </div>

            </div>

        </footer>



        <!-- Javascript Files
  ================================================== -->
        <!-- initialize jQuery Library -->
        <!-- Bootstrap jQuery -->
        <script src="../plugins/bootstrap/bootstrap.min.js" defer></script>
        <!-- Slick Carousel -->
        <script src="../plugins/slick/slick.min.js"></script>
        <script src="../plugins/slick/slick-animation.min.js"></script>
        <!-- Color box -->
        <script src="../plugins/colorbox/jquery.colorbox.js"></script>
        <!-- shuffle -->
        <script src="../plugins/shuffle/shuffle.min.js" defer></script>


        <!-- Template custom -->
        <script src="../js/script.js"></script>


    </div>

</body>

</html>