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
                                <h3 class="action-title">ตารางจัดการข้อมูลลูกค้า</h3>
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

                            <table id="mgCustomer" class="table  table-borderless " style="width:100%">
                                <thead>
                                    <tr class="text-center">
                                        <th>ลำดับ</th>
                                        <th>รหัสบัตร ปปช.</th>
                                        <th>ชื่อ - สกุล</th>
                                        <th>เบอร์โทร</th>
                                        <th>ชื่อผู้ใช้</th>
                                        <th>รหัสผ่าน</th>
                                        <th><a href="javascript:$('#addCustomer_modal').modal('show');">เพิ่มลูกค้าใหม่</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = null;
                                    foreach (Database::query("SELECT * FROM `customer` WHERE status_cm = '0'", PDO::FETCH_OBJ) as $row) :
                                    ?>
                                        <tr class="text-center">
                                            <td><?php echo ++$i; ?></td>
                                            <td><?php echo $row->id_code; ?></td>
                                            <td><?php echo $row->name_cm . ' ' . $row->lastname_cm; ?></td>
                                            <td><?php echo $row->tel_cm ?></td>
                                            <td><?php echo $row->uname_cm ?></td>
                                            <td><?php echo $row->pass_cm ?></td>
                                            <td>
                                                <a href="javascript:editCustomer_modal('<?php echo $row->id_cm; ?>','<?php echo $row->id_code; ?>','<?php echo $row->name_cm; ?>', '<?php echo $row->lastname_cm; ?>', '<?php echo $row->tel_cm ?>', '<?php echo $row->uname_cm ?>', '<?php echo $row->pass_cm ?>')" class="badge badge-success">แก้ไข</a>&nbsp;&nbsp;
                                                <a href="javascript:deleteCustomer('<?php echo $row->id_cm ?>')" class="badge badge-danger">ลบ</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <script>
                                // $('#editCustomer_modal').modal('show');
                                function deleteCustomer(id) {
                                    if (confirm('ต้องการลบ ใช่หรือไม่')) {
                                        $.ajax({
                                            url: "./controller/mgecustomer_cl.php",
                                            type: "POST",
                                            data: {
                                                key: "deleteCustomer",
                                                id_cm: id
                                            },
                                            success: function(result, statusText, jqXHR) {
                                                console.log(result);
                                                if (result == 'success') {
                                                    alert('ลบข้อมูลลูกค้าสำเร็จ');
                                                    location.reload();
                                                } else {
                                                    alert('ไม่สามารถลบข้อมูลลูกค้าได้ กรุณาลองใหม่อีกครั้ง');
                                                    location.reload();
                                                }
                                            },
                                            error(jqXHR, statusText) {
                                                alert('ไม่สามารถลบข้อมูลลูกค้าได้ กรุณาลองใหม่อีกครั้ง');
                                                location.reload();
                                            }
                                        });
                                    }
                                }

                                $(document).ready(function() {
                                    ad_mgCustomer();
                                });

                                function ad_mgCustomer() {
                                    $('#mgCustomer').DataTable({
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

        <footer style="margin-top: 30px;" id="footer" class="footer bg-overlay">

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
    <div class="modal fade" id="addCustomer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="form-addCustomer" action="javascript:void(0)" method="POST">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มลูกค้าใหม่</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="" class="form-control-label">ข้อมูลทั่วไป</label>
                        <div class="form-group">
                            <input type="text" name="id_code" value="" class="form-control" placeholder="รหัสบัตรประชาชน">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name_cm" value="" class="form-control" placeholder="ชื่อ">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastname_cm" value="" class="form-control" placeholder="นามสกุล">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="tel_cm" value="" class="form-control" placeholder="เบอร์">
                        </div>
                        <label for="" class="form-control-label">ข้อมูลล็อกอิน</label>
                        <div class="form-group">
                            <input type="text" name="uname_cm" value="" class="form-control" placeholder="ชื่อผู้ใช้">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass_cm" value="" class="form-control" placeholder="รหัสผ่าน">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="submit" class="btn btn-primary">เพิ่มลูกค้า</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $("#form-addCustomer").submit(function() {
            var $inputs = $("#form-addCustomer :input");
            var values = {};
            $inputs.each(function() {
                values[this.name] = $(this).val();
            });
            console.log(values);

            $.ajax({
                url: "../controllers/register_index.php",
                type: "POST",
                data: {
                    key: "form_register",
                    data: values
                },
                success: function(result, statusText, jqXHR) {
                    if (result == "lcodeX01") {
                        alert('มีรหัสประชาชนลูกค้าในระบบแล้ว');
                    } else if (result == 'success') {
                        alert('สมัครสมาชิกสำเร็จ');
                        location.reload();
                    } else if (result == 'lcodeX02') {
                        alert('ไม่สามารถใช้ ชื่อผู้ใช้ นี้ได้');
                    } else {
                        alert('ไม่สามารถสมัครสมาชิกได้ กรุณาลองใหม่อีกครั้ง');
                        location.reload();
                    }
                },
                error(jqXHR, statusText) {
                    alert('ไม่สามารถสมัครสมาชิกได้ กรุณาลองใหม่อีกครั้ง');
                    location.reload();
                }
            });
        });
    </script>

    <div class="modal fade" id="editCustomer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="form-editCustomer" action="javascript:void(0)" method="POST">
                    <input type="hidden" name="id_cm" value="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูลลูกค้าใหม่</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="" class="form-control-label">ข้อมูลทั่วไป</label>
                        <div class="form-group">
                            <input type="text" name="id_code" value="" class="form-control" placeholder="รหัสบัตรประชาชน">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name_cm" value="" class="form-control" placeholder="ชื่อ">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastname_cm" value="" class="form-control" placeholder="นามสกุล">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="tel_cm" value="" class="form-control" placeholder="เบอร์">
                        </div>
                        <label for="" class="form-control-label">ข้อมูลล็อกอิน</label>
                        <div class="form-group">
                            <input type="text" name="uname_cm" value="" class="form-control" placeholder="ชื่อผู้ใช้">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass_cm" value="" class="form-control" placeholder="รหัสผ่าน">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="submit" class="btn btn-primary">แก้ไขข้อมูลลูกค้า</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $("#form-editCustomer").submit(function() {
            var inputs = $("#form-editCustomer :input");
            var values = {};
            inputs.each(function() {
                values[this.name] = $(this).val();
            });
            console.log(values);

            if (confirm("กดยืนยันเพื่อแก้ไขข้อมูลลูกค้า")) {
                $.ajax({
                    url: "./controller/mgecustomer_cl.php",
                    type: "POST",
                    data: {
                        key: "editCustomer",
                        data: values
                    },
                    success: function(result, statusText, jqXHR) {
                        console.log(result);
                        if (result == "lcodeX01") {
                            alert('มีรหัสประชาชนลูกค้าในระบบแล้ว');
                        } else if (result == 'success') {
                            alert('แก้ไข้ข้อมูลลูกค้าสำเร็จ');
                            location.reload();
                        } else if (result == 'lcodeX02') {
                            alert('ไม่สามารถใช้ ชื่อผู้ใช้ นี้ได้');
                        } else {
                            alert('ไม่สามารถแก้ไข้ข้อมูลได้ กรุณาลองใหม่อีกครั้ง');
                            location.reload();
                        }
                    },
                    error(jqXHR, statusText) {
                        alert('ไม่สามารถแก้ไข้ข้อมูลได้ กรุณาลองใหม่อีกครั้ง');
                        location.reload();
                    }
                });
            }

        });



        function editCustomer_modal(id_cm, id_code, name_cm, lastname_cm, tel_cm, uname_cm, pass_cm) {
            $("#form-editCustomer :input:hidden[name=id_cm]").val(id_cm);
            $("#form-editCustomer :input:text[name=id_code]").val('' + id_code);
            $("#form-editCustomer :input:text[name=name_cm]").val('' + name_cm);
            $("#form-editCustomer :input:text[name=lastname_cm]").val('' + lastname_cm);
            $("#form-editCustomer :input:text[name=uname_cm]").val('' + uname_cm);
            $("#form-editCustomer :input:text[name=pass_cm]").val('' + pass_cm);
            $("#form-editCustomer :input[type=tel][name=tel_cm]").val(tel_cm);


            $('#editCustomer_modal').modal('show');
        }
    </script>
</body>

</html>