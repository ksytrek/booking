<?php
include_once('./header.php');

$row = $data;
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

    <link rel="icon" type="image/png" href="../images/logo5.png">


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

</head>

<body>
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
                                <h3 class="widget-title">ข้อมูลทั่วไป</h3>
                                <ul class="arrow nav nav-tabs">
                                    <li><a href="javascript:show_div('info_show')">ข้อมูลส่วนตัว</a></li>
                                    <!-- <li><a href="#">แก้ไขข้อมูล</a></li> -->
                                    <!-- <li><a href="javascript:show_div('hi_show')">ประวัติการจอง</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            // alert("dlskjf")
                            // $("#hi_show").css("display", "block");
                            // $("#info_show").css("display", "none");
                        });

                        function show_div(id) {
                            if (id == 'hi_show') {
                                $("#info_show").css("display", "none");
                                $("#hi_show").css("display", "block");
                                update_hiShow_table();

                            } else if (id == 'info_show') {
                                $("#info_show").css("display", "block");
                                $("#hi_show").css("display", "none");
                            }
                        }
                    </script>
                    <div id="info_show" style="display: block;" class="col-lg-10 mb-5 mb-lg-0 order-0 order-lg-1">
                        <div class="post">
                            <div class="post-body">
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="javascript:void(0)">ข้อมูลส่วนตัว</a>
                                    </h2>
                                </div><!-- header end -->

                                <div class="entry-content">
                                    <strong class="info_name">ชื่อ : </strong> <?php echo $name_AD . ' ' . $lastname_AD  ?>
                                    <br>
                                    <strong class="info_name">เบอร์ : </strong> <?php echo $tel_AD; ?>
                                </div>

                                <div class="post-footer">
                                    <a href="javascript:$('#editInfo_model').modal('show');" class="btn btn-primary">แก้ไขข้อมูล</a>

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
                <form id="form-edit_ad" action="javascript:void(0)" method="POST">
                    <input type="hidden" name="id_ad" value="<?php echo $ID ?>" required>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูลส่วนตัว</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="" class="form-control-label">ข้อมูลทั่วไป</label>
                        <div class="form-group">
                            <input type="text" name="name_ad" value="<?php echo $name_AD ?>" class="form-control" placeholder="ชื่อ" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastname_ad" value="<?php echo $lastname_AD ?>" class="form-control" placeholder="นามสกุล" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="tel_ad" value="<?php echo $tel_AD ?>" class="form-control" placeholder="เบอร์มือถือ" required>
                        </div>
                        <label for="" class="form-control-label">ข้อมูลล็อกอิน</label>
                        <div class="form-group">
                            <input type="text" name="uname_ad" value="<?php echo $uname_AD ?>" class="form-control" placeholder="ชื่อผู้ใช้" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass_ad" value="<?php echo $pass_AD ?>" class="form-control" placeholder="รหัสผ่าน" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $("#form-edit_ad").submit(function() {
            var inputs = $("#form-edit_ad :input");
            var values = {};
            inputs.each(function() {
                values[this.name] = $(this).val();
            });

            // console.log(values);
            if (confirm("กดยืนยันเพื่อแก้ไขข้อมูล")) {
                $.ajax({
                    url: "./controller/infom_cl.php",
                    type: "POST",
                    data: {
                        key: "form-edit_ad",
                        data: values
                    },
                    success: function(result, statusText) {
                        console.log(result);
                        if (result == 'success') {
                            alert("แก้ไขข้อมูลสำเร็จ");
                            location.reload();
                        } else {
                            alert("ไม่สามารถแก้ไขข้อมูลได้ กรุณาลองใหม่อีกครั้ง");
                            location.reload();
                        }
                    },
                    error: function(result, statusText) {
                        alert("ไม่สามารถแก้ไขข้อมูลได้ กรุณาลองใหม่อีกครั้ง");
                        location.reload();
                    }
                });
            }

        });
    </script>
</body>

</html>