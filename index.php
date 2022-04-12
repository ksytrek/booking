<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>ปลาวาฬใจดี</title>
    <link href='./plugins/fullcalendar/main.css' rel='stylesheet' />
    <script src='./plugins/fullcalendar/main.js'></script>

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
    <link rel="icon" type="image/png" href="images/logo5.png">

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css">
    <script src="plugins/jQuery/jquery.min.js"></script>

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
            dayMaxEvents: true, // allow "more" link when too many events
            events: {
                url: './php/get-events.php',
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
                <form id="form-login" action="javascript:void(0)" method="POST">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">

                                    <div class="logo">
                                        <a class="d-block" href="">
                                            <img loading="lazy" src="images/logo1.png" alt="Constra">
                                        </a>
                                    </div>

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div id="navbar-collapse" class="collapse navbar-collapse">

                                        <ul class="nav navbar-nav ml-auto align-items-center" style="padding:10px ;">



                                            <li class="nav-item"><input type="text" name="uname_cm" class="form-control" placeholder="ชื่อผู้ใช้" required></li>
                                            <li class="nav-item"><input type="password" name="pass_cm" class="form-control" placeholder="รหัสผ่าน" required></li>
                                            <li class="header-get-a-quote">
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </li>
                                            <li class="header-get-a-quote">
                                                <a href="Javascript::void(0)" class="btn btn-primary" data-toggle="modal" data-target="#modal_register">สมัครสมาชิก</a>
                                            </li>
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <script>
                $("#form-login").submit(function() {
                    var inputs = $("#form-login :input");
                    var values = {};
                    inputs.each(function() {
                        values[this.name] = $(this).val();
                    });
                    console.log(values);

                    $.ajax({
                        url : "./controllers/login_cm.php",
                        type : "POST",
                        data : {
                            key : "form-login",
                            data : values
                        },
                        success : function(result, statusText, jqXHR){
                            // console.log(result)
                            if(result == 'success') {
                                location.assign('./cu/')
                            }else{
                                alert("กรอกข้อมูลไม่ถูกต้องกรุณาตรวจสอบ ชื่อผู้ใช้และรหัสผ่าน ใหม่");
                            }
                        },error : function(jqXHR, statusText, errorTh){
                            alert('ไม่สามารถเข้าสู่ระบบได้ กรุณาลองใหม่อีกครั้ง');
                        }
                    });
                });
            </script>
        </header>
        <div class="banner-carousel banner-carousel-2 mb-0">
            <div class="banner-carousel-item" style="background-image:url(images/ch2.png)">
                <div class="container">
                    <div class="box-slider-content">
                        <div class="box-slider-text">
                            <h2 class="box-slide-title">ยินดีต้อนรับเข้าสู่ร้านปลาวาฬใจดี</h2>
                            <h3 class="box-slide-sub-title">WELCOME!</h3>
                            <p class="box-slide-description">เปิดให้บริการทุกวันตั้งแต่เวลา16:00-23:00 น.</p>
                            <p>
                                <a href="Javascript:alert('กรุณาล็อกอินเข้าสู่ระบบ');$('#modal_register').modal('show');" class="slider btn btn-primary">จอง</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-carousel-item" style="background-image:url(images/ch.png)">
                <div class="container">
                    <div class="box-slider-content">
                        <div class="box-slider-text">
                            <h2 class="box-slide-title">ยินดีต้อนรับเข้าสู่ร้านปลาวาฬใจดี</h2>
                            <h3 class="box-slide-sub-title">WELCOME!</h3>
                            <p class="box-slide-description">เปิดให้บริการทุกวันตั้งแต่เวลา16:00-23:00 น.</p>
                            <p>
                                <a href="Javascript:alert('กรุณาล็อกอินเข้าสู่ระบบ');$('#modal_register').modal('show');" class="slider btn btn-primary">จอง</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="call-to-action no-padding">
            <div class="container">
                <div class="action-style-box">
                    <div class="row">
                        <div class="col-md-8 text-center text-md-left">
                            <div class="call-to-action-text">
                                <h3 class="action-title">ตารางการจอง</h3>
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

        <section id="project-area" class="project-area solid-bg">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <!-- <h2 class="section-title">ภาพบรรยากาศ</h2> -->
                        <h3 class="section-sub-title">ภาพบรรยากาศ</h3>
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div class="col-12">

                        <div class="row shuffle-wrapper">
                            <div class="col-1 shuffle-sizer"></div>

                            <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="images/ishow/c1.jpg" aria-label="project-img">
                                        <img class="img-fluid" src="images/ishow/c1.jpg" alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- shuffle item 1 end -->

                            <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="images/ishow/c4.jpg" aria-label="project-img">
                                        <img class="img-fluid" src="images/ishow/c4.jpg" alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- shuffle item 2 end -->

                            <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="images/ishow/c3.jpg" aria-label="project-img">
                                        <img class="img-fluid" src="images/ishow/c3.jpg" alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- shuffle item 3 end -->

                            <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="images/ishow/c2.jpg" aria-label="project-img">
                                        <img class="img-fluid" src="images/ishow/c2.jpg" alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- shuffle item 4 end -->

                            <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="images/ishow/c5.jpg" aria-label="project-img">
                                        <img class="img-fluid" src="images/ishow/c5.jpg" alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- shuffle item 5 end -->

                            <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;residential&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="images/ishow/c6.jpg" aria-label="project-img">
                                        <img class="img-fluid" src="images/ishow/c6.jpg" alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
                                </span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="footer-menu text-center text-md-right">
                                <ul class="list-unstyled">
                                    <li><a href="javascript:location.assign('./index_ad.php')">เฉพาะพนักงาน</a></li>
                                </ul>
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
        <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
        <!-- Slick Carousel -->
        <script src="plugins/slick/slick.min.js"></script>
        <script src="plugins/slick/slick-animation.min.js"></script>
        <!-- Color box -->
        <script src="plugins/colorbox/jquery.colorbox.js"></script>
        <!-- shuffle -->
        <script src="plugins/shuffle/shuffle.min.js" defer></script>


        <!-- Template custom -->
        <script src="js/script.js"></script>

    </div>
    <!-- Body inner end -->
    <!-- Modal -->

</body>

<div class="modal fade" id="modal_register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="form_register" method="POST" action="javascript::void(0);">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">สมัครสมาชิกใหม่</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <label for="" class="form-control-label">ข้อมูลทั่วไป</label>
                    <div class="form-group">
                        <input type="text" name="id_code" class="form-control" placeholder="รหัสบัตรประชาชน" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name_cm" class="form-control" placeholder="ชื่อ" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname_cm" class="form-control" placeholder="นามสกุล" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="tel_cm" class="form-control" placeholder="เบอร์" required>
                    </div>
                    <label for="" class="form-control-label">ข้อมูลล็อกอิน</label>
                    <div class="form-group">
                        <input type="text" name="uname_cm" class="form-control" placeholder="ชื่อผู้ใช้" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass_cm" class="form-control" placeholder="รหัสผ่าน" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {

        });
        $("#form_register").submit(function() {
            var $inputs = $("#form_register :input");
            var values = {};
            $inputs.each(function() {
                values[this.name] = $(this).val();
            });
            console.log(values);

            $.ajax({
                url: "./controllers/register_index.php",
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
</div>

</html>