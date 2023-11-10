<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="title" content="">
    <meta name="keyword" content="">
    <meta name="description" content="">
    <meta name="author" content="nikunj.jain2305@gmail.com">
    <link rel="canonical" href="https://getmyuniversity.com/videos/medical-college-review">
    <link rel="preload" href="https://getmyuniversity.com/css/font-awesome.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://getmyuniversity.com/css/font-awesome.min.css">
    </noscript>
    <link rel="stylesheet" href="https://getmyuniversity.com/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getmyuniversity.com/css/style.css" media="all">

    <!--Favicon-->

    <link rel="apple-touch-icon" sizes="180x180" href="public/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/public/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/public/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
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

    <?php include './components/navbar.php' ?>


    <section class="videoList_wrapper section-padding">

        <div class="container">
            <div class="heading">
                <?php $video_related_on = $_REQUEST['review'];
                ?>
                <h1 class="text-capitalize">
                    <?php echo $video_related_on ?>
                </h1>
            </div>
            <div class="row">
                <?php

                $conn = mysqli_connect('localhost', 'root', '', 'collegs');
                $video_related_on = $_REQUEST['review'];

                $query = "SELECT * FROM `university_videos` WHERE `video_related_on`='$video_related_on'";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) { ?>


                        <div class="col-lg-4">
                            <div class="blogItem video_item">
                                <div class="imgBox">
                                    <a class="video_playBtn" href="<?php echo $row['video_link'] ?>"><img
                                            src="data:image/jpeg;base64,<?php echo base64_encode($row['video_thumbnail']); ?>"
                                            width="867" height="603" alt="" /></a>
                                    <!--<iframe width="283" height="150" src="https://www.youtube.com/embed/M_ClwEBSdWY?rel=0&modestbranding=1&autohide=1&showinfo=0&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                                </div>
                                <div class="text">
                                    <span class="date"><i class="fa fa-calendar"></i><?php echo $row['video_post_date'] ?></span>
                                    <h3><a href="#" target="_blank">
                                            <?php echo $row['video_heading'] ?>
                                        </a></h3>
                                    <div class="btnBox mt-2">
                                        <a class="btn readMore" href="<?php echo $row['video_link'] ?>" target="_blank">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }
                } ?>

                <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
                    <div class="flex justify-between flex-1 sm:hidden">
                        <span
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                            &laquo; Previous
                        </span>

                        <a href="https://getmyuniversity.com/videos/medical-college-review?page=2"
                            class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            Next &raquo;
                        </a>
                    </div>

                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700 leading-5">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">18</span>
                                of
                                <span class="font-medium">80</span>
                                results
                            </p>
                        </div>

                        <div>
                            <span class="relative z-0 inline-flex shadow-sm rounded-md">

                                <span aria-disabled="true" aria-label="&amp;laquo; Previous">
                                    <span
                                        class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5"
                                        aria-hidden="true">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </span>





                                <span aria-current="page">
                                    <span
                                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">1</span>
                                </span>
                                <a href="https://getmyuniversity.com/videos/medical-college-review?page=2"
                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                    aria-label="Go to page 2">
                                    2
                                </a>
                                <a href="https://getmyuniversity.com/videos/medical-college-review?page=3"
                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                    aria-label="Go to page 3">
                                    3
                                </a>
                                <a href="https://getmyuniversity.com/videos/medical-college-review?page=4"
                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                    aria-label="Go to page 4">
                                    4
                                </a>
                                <a href="https://getmyuniversity.com/videos/medical-college-review?page=5"
                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                    aria-label="Go to page 5">
                                    5
                                </a>


                                <a href="https://getmyuniversity.com/videos/medical-college-review?page=2" rel="next"
                                    class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                                    aria-label="Next &amp;raquo;">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </section>



    <section class="getQuote consultants_form section-padding" id="get-quote">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="heading text-center">
                        <h2>Get a Quote</h2>
                        <p>Fill the form below to get a FREE QUOTE!</p>
                    </div>
                    <div class="formBox">
                        <form class="form" onsubmit="return false;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="visitor_name" value="" class="form-control"
                                            placeholder="Your Name" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="age" id="visitor_age" value="" class="form-control"
                                            placeholder="Age" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="passport_status" id="passport_status" class="form-control"
                                            required>
                                            <option value="">Select Passport Status</option>
                                            <option value="Yes">Yes</option>
                                            <option value="NO">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><input type="text" name="city" id="visitor_city" value=""
                                            class="form-control" placeholder="Address" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><input type="text" name="email" id="visitor_email" value=""
                                            class="form-control" placeholder="Email" autocomplete="off" required></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><input type="text" name="phone" id="visitor_phone" value=""
                                            class="form-control" placeholder="Phone" autocomplete="off" required></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"><textarea name="comment" cols="40" rows="4"
                                            id="visitor_comment" placeholder="Write Your Query or Message Here"
                                            class="form-control" required></textarea></div>
                                </div>
                            </div>
                            <div class="buttonBox">
                                <input type="hidden" name="page" id="page" value="https://getmyuniversity.com">
                                <button type="submit" id="queryid" class="btn theme-btn">Send Message</button>
                                <span id="showerror" style="display: none;">Fill all Information.</span>
                                <span id="show" style="display: none;">Information Send Successfully</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="video_playPopup">
        <button class="close_playPopup">×</button>
        <div class="videoBox">
            <div class="videoBody">
                <iframe id="review_video" width="1268" height="713" src="" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <footer id="footer" class="footer dark-bg">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-2 col-md-8">
                        <div class="box">
                            <h3>Top Courses</h3>
                            <ul class="footer-menu list-unstyled">
                                <li class="nav-item"><a href="https://getmyuniversity.com/md-colleges">MD in India</a>
                                </li>
                                <li class="nav-item"><a href="https://getmyuniversity.com/ms-colleges">MS in India</a>
                                </li>
                                <li class="nav-item"><a href="https://getmyuniversity.com/dm-colleges">DM in India</a>
                                </li>
                                <li class="nav-item"><a href="https://getmyuniversity.com/mch-colleges">MCH in India</a>
                                </li>
                                <li class="nav-item"><a href="https://getmyuniversity.com/dip-colleges">DIP in India</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8">
                        <div class="box">
                            <h3>Top States</h3>
                            <ul class="footer-menu mbbs_menu list-unstyled">
                                <li class="nav-item"><a href="/medical-colleges-in-karnataka">Karnataka</a></li>
                                <li class="nav-item"><a href="/medical-colleges-in-kerala">Kerala</a></li>
                                <li class="nav-item"><a href="/medical-colleges-in-uttar-pradesh">Uttar Pradesh</a></li>
                                <li class="nav-item"><a href="/medical-colleges-in-rajasthan">Rajasthan</a></li>
                                <li class="nav-item"><a href="/medical-colleges-in-west-bengal">West Bengal</a></li>
                                <li class="nav-item"><a href="/medical-colleges-in-pondicherry">Pondicherry</a></li>
                                <li class="nav-item"><a href="/medical-colleges-in-maharashtra">Maharashtra</a></li>
                                <li class="nav-item"><a href="/medical-colleges-in-uttarakhand">Uttarakhand</a></li>
                                <li class="nav-item"><a href="/medical-colleges-in-chandigarh">Chandigarh</a></li>
                                <li class="nav-item"><a href="/medical-colleges-in-bihar">Bihar</a></li>
                                <li class="nav-item"><a href="/medical-colleges-in-delhi">Delhi</a></li>
                                <li class="nav-item"><a href="/medical-colleges-in-gujarat">Gujarat</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mt-5 mt-md-0">
                        <div class="box">
                            <h3>Legal</h3>
                            <ul class="footer-menu list-unstyled">
                                <li><a href="https://getmyuniversity.com/about-us">About Us</a></li>
                                <li><a href="https://getmyuniversity.com/blog">Blog</a></li>
                                <li><a href="https://getmyuniversity.com/contact-us">Contact Us</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="/privacy-policy">Privacy Policy</a></li>

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
                                <div class="imgBox"><img src="https://getmyuniversity.com/images/main-hero2.png"
                                        alt="Abroad Journey" width="745" height="636" /></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://getmyuniversity.com/js/jquery-3.4.1.min.js"></script>
    <script src="https://getmyuniversity.com/js/bootstrap.min.js"></script>
    <script src="https://getmyuniversity.com/js/owl.carousel.min.js"></script>

    <script src="https://getmyuniversity.com/js/script.js"></script>
    <style>
        nav[role="navigation"] {
            width: 100%;
            max-width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        nav[role="navigation"] .flex.justify-between.sm\:hidden {
            display: none;
        }

        nav[role="navigation"] .hidden.sm\:justify-between {
            text-align: center;
        }

        nav[role="navigation"] span.inline-flex {
            display: flex;
        }

        nav[role="navigation"] span.inline-flex svg {
            width: 20px;
            height: 20px;
        }

        nav[role="navigation"] span.inline-flex a.inline-flex,
        nav[role="navigation"] span.inline-flex span.inline-flex {
            border: none !important;
            padding: 0 !important;
            margin: 0 3px;
            width: 24px;
            height: 24px;
            line-height: 24px;
            text-align: center !important;
            align-items: center;
            justify-content: center;
        }

        nav[role="navigation"] span.inline-flex span[aria-current="page"] span.inline-flex {
            background: #000000 !important;
            color: #ffffff;
        }
    </style>
    <script>
        jQuery(document).ready(function ($) {

            $(".video_playBtn").on('click', function () {
                var video_src = $(this).attr('data-video');
                $(".video_playPopup").show(400);
                $("#review_video").attr('src', video_src);

            });

            $(".close_playPopup").on('click', function () {
                $(".video_playPopup").hide(200);
                $("#review_video").attr('src', '');
            });

        });
    </script>
    <script src="//code.jivosite.com/widget/aVH5YN7CUx" async></script>

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
                location.href = "https://getmyuniversity.com/university" + '/' + $('#show_name_student1').val();
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
                        url: "https://getmyuniversity.com/ajax_seach_application",
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
                            url: "https://getmyuniversity.com/ajax_seach_application",
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
                        url: "https://getmyuniversity.com/ajax_seach_application2",
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
                            url: "https://getmyuniversity.com/ajax_seach_application2",
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

</html>