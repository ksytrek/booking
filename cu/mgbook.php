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
    <link href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
     -->
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


    <!-- <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/data-table/dataTables.buttons.min.js"></script>
    <script src="../plugins/data-table/buttons.flash.min.js"></script>
    <script src="../plugins/data-table/jszip.min.js"></script>
    <script src="../plugins/data-table/pdfmake.min.js"></script>
    <script src="../plugins/data-table/vfs_fonts.js"></script>
    <script src="../plugins/data-table/buttons.html5.min.js"></script>
    <script src="../plugins/data-table/buttons.print.min.js"></script> -->

    <link rel="stylesheet" href="../plugins/dataTable/datatables.min.css">
    <script type="text/javascript" charset="utf8" src="../plugins/dataTable/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="../plugins/dataTable/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="../plugins/dataTable/datatables.min.js"></script>



</head>

<body>
    <?php include_once('./reserve_model.php'); ?>
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


        <section id="main-container" class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 order-1 order-lg-0">
                        <div class="sidebar sidebar-left">
                            <div class="widget">
                                <h3 class="widget-title">จัดการการจอง</h3>
                                <ul class="arrow nav nav-tabs">
                                    <!-- <li><a href="#">แก้ไขข้อมูล</a></li> -->
                                    <li><a href="javascript:show_div('mgBook_show')">จัดการการจอง</a></li>
                                    <li><a href="javascript:show_div('hi_show')">ประวัติการจอง</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            // alert("dlskjf")
                            $("#mgBook_show").css("display", "block");
                            // $("#info_show").css("display", "none");
                        });

                        function show_div(id) {
                            if (id == 'hi_show') {
                                $("#mgBook_show").css("display", "none");
                                $("#hi_show").css("display", "block");
                                update_hiShow_table();

                            } else if (id == 'mgBook_show') {
                                $("#mgBook_show").css("display", "block");
                                $("#hi_show").css("display", "none");
                            }
                        } 
                        
                    </script>

                    <div id="mgBook_show" style="display: block;" class="col-lg-10 mb-5 mb-lg-0 order-0 order-lg-1">
                        <div class="post">
                            <div class="post-body">
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="javascript:void(0)">จัดการการจอง</a>
                                    </h2>
                                </div><!-- header end -->

                                <div class="entry-content">

                                    <table id="mgBook_table" class="table  table-borderless " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ลำดับ</th>
                                                <th class="text-center">โต๊ะ</th>
                                                <th class="text-center">เวลาจองเข้าร้าน</th>
                                                <th class="text-center">เวลาที่ร้านกำหนด (ประมาณ)</th>
                                                <th>สถานะ</th>
                                                <th>จัดการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
 
                                            <?php
                                            $thaiweek = array("วันอาทิตย์", "วันจันทร์", "วันอังคาร", "วันพุธ", "วันพฤหัส", "วันศุกร์", "วันเสาร์");
                                            $thaimonth = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];

                                            $sql_search = "SELECT *,DATE_FORMAT(rt.date_re, '%d') as Dd ,DATE_FORMAT(rt.date_re, '%c') as month ,DATE_FORMAT(rt.date_re, '%Y') as year FROM `reservation_tb` as rt INNER JOIN service_table as st ON st.id_tb = rt.id_tb WHERE rt.id_cm = '$ID' AND (rt.status_re != 2 AND rt.status_re != 3);";
                                            $i_r = null;
                                            foreach (Database::query($sql_search, PDO::FETCH_OBJ) as $row) :
                                                $date = 'วันที่ '.$row->Dd .' '.$thaimonth[2].' พ.ศ.'.$row->year+543;
                                                $timeStart_re = $date . "</br>เวลา " . $row->timeStart_re.' น.';
                                                $timeEnd_re = $date . "</br>เวลา " . $row->timeEnd_re.' น.';
                                            ?>
                                                <tr>
                                                    <td class="text-center"><?php echo ++$i_r; ?></td>
                                                    <td class=""><?php echo 'โต๊ะ' . $row->zone_tb . '' . $row->no_tb ?></td>
                                                    <td><?php echo $timeStart_re; ?> </td>
                                                    <td><?php echo $timeEnd_re; ?> </td>
                                                    <td><span class="badge badge-primary">รอยืนยัน</span></td>
                                                    <td><a href="javascript:void(0)" class="badge badge-danger">ยกเลิก</a></td>
                                                </tr>
                                            <?php endforeach; ?>


                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="">B15</td>
                                                <td>Thursday June 15 2022 16:58 </td>
                                                <td>Thursday June 10 2022 16:58</td>
                                                <td><span class="badge badge-warning">ยืนยันแล้ว</span></td>
                                                <td><a href="javascript:void(0)" class="badge badge-danger">ยกเลิก</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <script>
                                        $(document).ready(function() {
                                            update_mgBook_table();
                                            update_hiShow_table();
                                        });

                                        function update_mgBook_table() {
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
                            </div>
                        </div>
                    </div>

                    <div id="hi_show" style="display: none;" class="col-lg-10 mb-5 mb-lg-0 order-0 order-lg-1">
                        <div class="post">
                            <div class="post-body">
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="javascript:void(0)">ประวัติการจอง</a>
                                    </h2>
                                </div><!-- header end -->

                                <div class="entry-content">
                                    <table id="hiShow_table" class="table  table-borderless " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ลำดับ</th>
                                                <th class="text-center">โต๊ะ</th>

                                                <th>เวลาจองเข้าร้าน</th>
                                                <th>วันที่จองในระบบ</th>
                                                <th>สถานะ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center">B15</td>
                                                <td>Thursday June 15 2022 16:58 </td>
                                                <td>Thursday June 10 2022 16:58</td>
                                                <td><span class="badge badge-success">สำเร็จ</span></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-center">B15</td>
                                                <td>Thursday June 15 2022 16:58 </td>
                                                <td>Thursday June 10 2022 16:58</td>
                                                <td><span class="badge badge-success">สำเร็จ</span></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <script>
                                        function update_hiShow_table() {
                                            $('#hiShow_table').DataTable({
                                                dom: 'lBfrtip',
                                                lengthMenu: [
                                                    [10, 25, 50, 60, -1],
                                                    [10, 25, 50, 60, "All"]
                                                ],
                                                language: {
                                                    sProcessing: " กำลังดำเนินการ...",
                                                    sLengthMenu: " แสดง  _MENU_  แถว ",
                                                    sZeroRecords: " ไม่พบข้อมูล ",
                                                    sInfo: " แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว ",
                                                    sInfoEmpty: "แสดง 0 ถึง 0 จาก 0 แถว",
                                                    sInfoFiltered: "( กรองข้อมูล  _MAX_  ทุกแถว )",
                                                    sInfoPostFix: "",
                                                    sSearch: "ค้นหา:",
                                                    sUrl: "",
                                                    oPaginate: {
                                                        "sFirst": " เริ่มต้น ",
                                                        "sPrevious": " ก่อนหน้า ",
                                                        "sNext": " ถัดไป ",
                                                        "sLast": " สุดท้าย "
                                                    }
                                                }, // sInfoEmpty: "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                                                processing: true, // แสดงข้อความกำลังดำเนินการ กรณีข้อมูลมีมากๆ จะสังเกตเห็นง่าย
                                                //serverSide: true, // ใช้งานในโหมด Server-side processing
                                                // กำหนดให้ไม่ต้องการส่งการเรียงข้อมูลค่าเริ่มต้น จะใช้ค่าเริ่มต้นตามค่าที่กำหนดในไฟล์ php

                                                buttons: [{
                                                    extend: 'excel',
                                                    text: 'ส่งออก EXCEL',
                                                    messageTop: '',
                                                    filename: function() {
                                                        // const d = new Date();
                                                        // // let time = d.getTime();
                                                        // let hour = d.getHours();
                                                        // let minutes = d.getMinutes();
                                                        // let day = d.getDay();
                                                        // let month = d.getMonth();
                                                        // let year = d.getFullYear();
                                                        return "ประวัติการจอง "; //+hour+'-'+minutes + '-'+days +'-'+month +'-'+years
                                                    },
                                                    // title: 'รายชื่อสิทเข้าห้อง',
                                                    exportOptions: {
                                                        // columns: [0, 1, 2]
                                                        // คอลัมส์ที่จะส่งออก
                                                        // modifier: {
                                                        //     page: 'all' // หน้าที่จะส่งออก all / current
                                                        // },
                                                        // stripHtml: true
                                                    }
                                                }, {
                                                    extend: 'print',
                                                    text: 'พิมพ์',
                                                    messageTop: '',
                                                    filename: function() {
                                                        // const d = new Date();
                                                        // // let time = d.getTime();
                                                        // let hour = d.getHours();
                                                        // let minutes = d.getMinutes();
                                                        // let day = d.getDay();
                                                        // let month = d.getMonth();
                                                        // let year = d.getFullYear();
                                                        return "ประวัติการจอง "; //+hour+'-'+minutes + '-'+days +'-'+month +'-'+years
                                                    },
                                                    // title: 'รายชื่อสิทเข้าห้อง',
                                                    exportOptions: {
                                                        // columns: [0, 1, 2]
                                                        // คอลัมส์ที่จะส่งออก
                                                        // modifier: {
                                                        //     page: 'all' // หน้าที่จะส่งออก all / current
                                                        // },
                                                        // stripHtml: true
                                                    }
                                                }],
                                                retrieve: true,
                                            });
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </div>

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

                    <!-- <div class="col-md-6">
                            <div class="footer-menu text-center text-md-right">
                                <ul class="list-unstyled">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="team.html">Our people</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="news-left-sidebar.html">Blog</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                </ul>
                            </div>
                        </div> -->
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
    <div class="modal fade" id="editInfo_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="" action="javascript:void(0)" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูลส่วนตัว</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="" class="form-control-label">ข้อมูลทั่วไป</label>
                        <div class="form-group">
                            <input type="text" name="" value="xxxx" class="form-control" placeholder="ชื่อ">
                        </div>
                        <div class="form-group">
                            <input type="text" name="" value="xxxx" class="form-control" placeholder="นามสกุล">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="" value="0xxxxxxxxxx" class="form-control" placeholder="เบอร์">
                        </div>
                        <label for="" class="form-control-label">ข้อมูลล็อกอิน</label>
                        <div class="form-group">
                            <input type="text" name="" value="xxxxxxx" class="form-control" placeholder="ชื่อผู้ใช้">
                        </div>
                        <div class="form-group">
                            <input type="password" name="" value="xxxxxx" class="form-control" placeholder="รหัสผ่าน">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="button" class="btn btn-primary">จองโต๊ะ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>