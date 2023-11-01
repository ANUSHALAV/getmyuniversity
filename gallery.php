<!doctype html>
<html lang="en">

<!-- Mirrored from www.getmyuniversity.com/public/gallery by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Sep 2023 12:25:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overseas Education Consultants in India, Study Abroad Consultant</title>
    <meta name="title" content="getmyuniversity gallery">
    <meta name="keyword" content="getmyuniversity gallery">
    <meta name="description" content="getmyuniversity gallery">
    <meta name="author" content="getmyuniversity Consultant">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="">
    <meta property="twitter:title" content="">
    <meta property="twitter:description" content="">
    <meta property="twitter:image" content="">
    <link rel="stylesheet" href="css/front_css/jquery.fancybox.css">

    <link rel="canonical" href="gallery.html">
    <link rel="preload" href="css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="css/font-awesome.min.css">
    </noscript>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" media="all">

    <!--Favicon-->

    <link rel="apple-touch-icon" sizes="180x180" href="public/images/favicon/apple-touch-icon.html">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8NBEX89NHQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-8NBEX89NHQ');
    </script>
</head>

<body>
    <?php
    include './Components/navbar.php';
    ?>
    <section class="gallery_banner">
        <div class="container">
            <h1>Gallery</h1>
        </div>
    </section>
    <section class="gallery_wrapper innerSlide py-md-5 py-4">
        <div class="container">
            <div class="gallery-container">
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'collegs');

                $query = "SELECT * FROM `gallery`";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) { ?>

                        <div class="gallery-item">
                            <a href="" data-fancybox="gallery">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['college_image']); ?>"
                                    class="img-grid shadow-1-strong rounded">
                                <span class="caption">
                                    <?php echo $row['college_name'] ?>
                                </span>
                            </a>
                        </div>

                        <?php
                    }
                }
                ?>


            </div>
        </div>
        <!-- Gallery -->
    </section>
    <footer id="footer" class="footer dark-bg">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-2 col-md-8">
                        <div class="box">
                            <h3>Top Courses</h3>
                            <ul class="footer-menu list-unstyled">
                                <li class="nav-item"><a href="md-colleges.html">MD in India</a></li>
                                <li class="nav-item"><a href="ms-colleges.html">MS in India</a></li>
                                <li class="nav-item"><a href="dm-colleges.html">DM in India</a></li>
                                <li class="nav-item"><a href="mch-colleges.html">MCH in India</a></li>
                                <li class="nav-item"><a href="dip-colleges.html">DIP in India</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8">
                        <div class="box">
                            <h3>Top States</h3>
                            <ul class="footer-menu mbbs_menu list-unstyled">
                                <li class="nav-item"><a href="../medical-colleges-in-karnataka.html">Karnataka</a></li>
                                <li class="nav-item"><a href="../medical-colleges-in-kerala.html">Kerala</a></li>
                                <li class="nav-item"><a href="../medical-colleges-in-uttar-pradesh.html">Uttar
                                        Pradesh</a></li>
                                <li class="nav-item"><a href="../medical-colleges-in-rajasthan.html">Rajasthan</a></li>
                                <li class="nav-item"><a href="../medical-colleges-in-west-bengal.html">West Bengal</a>
                                </li>
                                <li class="nav-item"><a href="../medical-colleges-in-pondicherry.html">Pondicherry</a>
                                </li>
                                <li class="nav-item"><a href="../medical-colleges-in-maharashtra.html">Maharashtra</a>
                                </li>
                                <li class="nav-item"><a href="../medical-colleges-in-uttarakhand.html">Uttarakhand</a>
                                </li>
                                <li class="nav-item"><a href="../medical-colleges-in-chandigarh.html">Chandigarh</a>
                                </li>
                                <li class="nav-item"><a href="../medical-colleges-in-bihar.html">Bihar</a></li>
                                <li class="nav-item"><a href="../medical-colleges-in-delhi.html">Delhi</a></li>
                                <li class="nav-item"><a href="../medical-colleges-in-gujarat.html">Gujarat</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mt-5 mt-md-0">
                        <div class="box">
                            <h3>Legal</h3>
                            <ul class="footer-menu list-unstyled">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="../privacy-policy.html">Privacy Policy</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-5 mt-lg-0">
                        <div class="box">
                            <h3>Office Location</h3>
                            <div class="contactInfo box">
                                <h4>Delhi</h4>
                                <p class="text">Office Number 209 C, Crown Height, <br>Sector 10, Rohini, Delhi, 110085
                                </p>
                                <h4>Bangalore</h4>
                                <p class="text">Office No. 135, Evoma, Prestige Featherlite Tech Park<br>EPIP Zone,
                                    Whitefield, Bangalore, 560066</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--            <div class="startJourney text-white d-md-flex align-items-center text-center text-md-left">
            <div class="content d-lg-flex align-items-center justify-content-between mt-5 mt-md-0">
                <div class="heading m-0 pr-lg-5">
                    <h2>Subsribe To Our Newsletter</h2>
                    <P>Stay in touch with us to get latest news and special offers.</P>
                </div>
                <div class="formBox pl-lg-5 pl-0 mt-4 mt-lg-0">
                    <div class="newsletterForm d-sm-flex">
                        <input class="form-control" type="email" placeholder="Enter Email Address.." />
                        <button class="btn theme-btn ml-sm-2">Subscribe Us</button>
                    </div>
                </div>
            </div>
        </div>
-->
            <div class="connect_wraper mt-5">
                <div class="row text-center text-md-left">
                    <div class="col-lg-4">
                        <div class="box">
                            <h3>Follow Us on</h3>
                            <div class="socialLinks mt-3">
                                <a href="https://www.facebook.com/getmyuniversity"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/get_my_university/"><i
                                        class="fa fa-instagram"></i></a>
                                <a href="https://twitter.com/getmyuniversity"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/@GetMyUniversity"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <div class="box">
                            <h3>Need Help?</h3>
                            <div class="contact-info d-md-flex align-items-center justify-content-between">
                                <a href="https://wa.me/917678676001" target="_blank"><i class="fa fa-whatsapp"></i>+91
                                    76-786-76-001</a>
                                <a href="tel:+917678676001"><i class="fa fa-phone"></i> +91 7678 676 001</a>
                                <a href="mailto:info@getmyuniversity.com"><i class="fa fa-envelope"></i>
                                    info@getmyuniversity.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright text-center text-md-left">
                <p class="m-0">Copyright©️GMU ADMISSION SERVICES PRIVATE LIMITED. All rights reserved</p>
            </div>
        </div>

    </footer>
    <a class="whatsapp_chat" href="https://wa.me/917678676001" target="_blank"><i class="fa fa-whatsapp"></i></a>
    <div class="search_modal modal fade" id="searchModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                    <div class="search_modalForm">
                        <div class="row">

                            <div class="col-md-7 order-md-12">
                                <h2>Data Driven Admission <span>Counselling for Medical</span> Aspirants</h2>
                                <ul class="searchTab nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                            href="#searchUnivercity2">Search by University</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                            href="#searchCources2">Search by State/City</a></li>
                                </ul>
                                <div class="searchBar tab-content">
                                    <div id="searchUnivercity2" class="tab-pane show active">
                                        <form class="searchForm clearfix" role="form">
                                            <input class="form-control" placeholder="Search University"
                                                id="searchNames1" autocomplete="off" />
                                            <input type="hidden" id="show_name_student1" value="" />
                                            <button class="btn searchBtn" type="button" id="univercity1"><i
                                                    class="fa fa-search"></i></button>

                                            <span class="error_message" id="searchNames_error1"
                                                style="display:none; color:red;"> Search User name</span>
                                            <ul class="search_result" id='search_datas1' style="display: none;">

                                            </ul>
                                        </form>
                                    </div>
                                    <div id="searchCources2" class="tab-pane fade">
                                        <form class="searchForm clearfix" role="form">
                                            <input class="form-control" placeholder="Search State/City"
                                                id="searchNames12" />
                                            <input type="hidden" id="show_name_student12" value="" />
                                            <span class="error_message" id="searchNames_error12"
                                                style="display:none; color:red;"> Search User name</span>
                                            <ul class="search_result" id='search_datas12' style="display: none;">

                                            </ul>
                                            <input class="form-control" placeholder="Search Courses"
                                                id="searchNames22" />
                                            <input type="hidden" id="show_name_student22" value="" />
                                            <span class="error_message" id="searchNames_error22"
                                                style="display:none; color:red;"> Search User name</span>
                                            <ul class="search_result" id='search_datas22' style="display: none;">

                                            </ul>
                                            <button class="btn searchBtn" type="button" id="univercity12"><i
                                                    class="fa fa-search"></i></button>

                                        </form>
                                    </div>
                                </div>
                                <div class="info">200+ Colleges, 400+ Courses, 1000+ Reviews </div>
                            </div>
                            <div class="col-md-5 text-center mt-4 mt-md-0">
                                <div class="imgBox"><img src="images/main-hero2.png" alt="Abroad Journey" width="745"
                                        height="636" /></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/script.js"></script>

    <script src="js/front_js/jquery.fancybox.js"></script>
    <script src="js/front_js/prefixfree.min.js"></script>



    <script src="http://code.jivosite.com/widget/aVH5YN7CUx" async></script>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $("#searchNames1").keyup(function (event) {
                if (event.keyCode === 13) {
                    $("#univercity1").click();
                }
            });

            $('#univercity1').click(function () {
                //alert($('#show_name_student').val());
                if ($('#show_name_student1').val() == '') {
                    return false;
                }
                location.href = "https://www.getmyuniversity.com/public/university" + '/' + $('#show_name_student1').val();
            });


        });


    </script>



    <script>
        $(document).ready(function () {
            $('#searchNames1').keypress(function () {
                setTimeout(function () {
                    var dInput = $('#searchNames1').val();
                    //alert(dInput);
                    $.ajax({
                        type: 'get',
                        url: "https://www.getmyuniversity.com/public/ajax_seach_application",
                        data: { dInput: dInput },
                        success: function (response) {
                            $('#search_datas1').show();
                            $('#search_datas1').html('');
                            $('#search_datas1').html(response);
                            $('#primary_email_error1').hide();

                            $('#search_datas1 li').click(function () {
                                //alert('hello');
                                $('#searchNames1').val($(this).text());
                                $('#search_student_ids1').val($(this).data('id'));
                                $('#show_id_student1').text($(this).data('ida'));
                                $('#show_name_student1').val($(this).data('name'));
                                $('#search_datas1').hide();
                                $('#search_datas1').html('');
                            });
                        },
                        error: function (response) {
                            //$("#LoadingImage").hide();
                            //alert("Error");
                            //var NewSTIEURL = STIEURL+'/ajax_model_type';
                        }
                    });
                }, 10);
            }).on('keydown', function (e) {
                if (e.keyCode == 8) {
                    setTimeout(function () {
                        var dInput = $('#searchNames1').val();
                        //alert(dInput);
                        $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/public/ajax_seach_application",
                            data: { dInput: dInput },
                            success: function (response) {
                                $('#search_datas1').html('');
                                $('#search_datas1').html(response);
                                $('#primary_email_error1').hide();

                                $('#search_datas1 li').click(function () {
                                    $('#searchNames1').val($(this).text());
                                    $('#search_student_ids1').val($(this).data('id'));
                                    $('#show_name_student1').val($(this).data('name'));
                                    $('#search_datas1').hide();
                                    $('#search_datas1').html('');
                                });
                            },
                            error: function (response) {
                                //$("#LoadingImage").hide();
                                //alert("Error");
                                //var NewSTIEURL = STIEURL+'/ajax_model_type';
                            }
                        });
                    }, 10);
                }
            });

        });
    </script>


    <script>
        $(document).ready(function () {
            $('#searchNames22').keypress(function () {
                setTimeout(function () {
                    var dInput = $('#searchNames22').val();
                    //alert(dInput);
                    $.ajax({
                        type: 'get',
                        url: "https://www.getmyuniversity.com/public/ajax_seach_application2",
                        data: { dInput: dInput },
                        success: function (response) {
                            $('#search_datas22').show();
                            $('#search_datas22').html('');
                            $('#search_datas22').html(response);
                            $('#primary_email_error22').hide();

                            $('#search_datas22 li').click(function () {
                                //alert('hello');
                                $('#searchNames22').val($(this).text());
                                $('#search_student_ids22').val($(this).data('id'));
                                $('#show_id_student22').text($(this).data('ida'));
                                $('#show_name_student22').val($(this).data('name'));
                                $('#search_datas22').hide();
                                $('#search_datas22').html('');
                            });
                        },
                        error: function (response) {
                            //$("#LoadingImage").hide();
                            //alert("Error");
                            //var NewSTIEURL = STIEURL+'/ajax_model_type';
                        }
                    });
                }, 10);
            }).on('keydown', function (e) {
                if (e.keyCode == 8) {
                    setTimeout(function () {
                        var dInput = $('#searchNames22').val();
                        //alert(dInput);
                        $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/public/ajax_seach_application2",
                            data: { dInput: dInput },
                            success: function (response) {
                                $('#search_datas22').html('');
                                $('#search_datas22').html(response);
                                $('#primary_email_error22').hide();

                                $('#search_datas22 li').click(function () {
                                    $('#searchNames22').val($(this).text());
                                    $('#search_student_ids22').val($(this).data('id'));
                                    $('#c22').val($(this).data('name'));
                                    $('#search_datas22').hide();
                                    $('#search_datas22').html('');
                                });
                            },
                            error: function (response) {
                                //$("#LoadingImage").hide();
                                //alert("Error");
                                //var NewSTIEURL = STIEURL+'/ajax_model_type';
                            }
                        });
                    }, 10);
                }
            });

        });
    </script>
</body>

<!-- Mirrored from www.getmyuniversity.com/public/gallery by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Sep 2023 12:25:40 GMT -->

</html>