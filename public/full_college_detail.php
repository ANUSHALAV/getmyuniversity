<!doctype html>
<html lang="en">

<!-- Mirrored from www.getmyuniversity.com/public/university/all-india-institute-of-medical-science-guwahati by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Sep 2023 12:37:42 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIIMS (All India Institute of Medical Science) Guwahati</title>
    <meta name="title" content="AIIMS (All India Institute of Medical Science) Guwahati">
    <meta name="keyword" content="AIIMS (All India Institute of Medical Science) Guwahati">
    <meta name="description"
        content="AIIMS (All India Institute of Medical Science) Guwahati fee structure, mbbs seats, location and college review">
    <meta name="author" content="info@getmyuniversity.com">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="all-india-institute-of-medical-science-guwahati.html">
    <meta property="og:title" content="AIIMS (All India Institute of Medical Science) Guwahati">
    <meta property="og:description"
        content="AIIMS (All India Institute of Medical Science) Guwahati fee structure, mbbs seats, location and college review">
    <meta property="og:image" content="../images/university_images/all-india-institute-of-medical-science-guwahati.jpg">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="all-india-institute-of-medical-science-guwahati.html">
    <meta property="twitter:title" content="AIIMS (All India Institute of Medical Science) Guwahati">
    <meta property="twitter:description"
        content="AIIMS (All India Institute of Medical Science) Guwahati fee structure, mbbs seats, location and college review">
    <meta property="twitter:image"
        content="../images/university_images/all-india-institute-of-medical-science-guwahati.jpg">
    <script
        type="application/ld+json">{"@context":"http://schema.org","@type":"Organization","url":"https://www.getmyuniversity.com","logo":"https://www.getmyuniversity.com/images/logo.png","name":"getmyuniversity Consultants","sameAs":["https://www.facebook.com/getmyuniversityConsultantsManagementServicesPvtLtd/","https://twitter.com/jag_vimal"]}</script>
    <script
        type="application/ld+json">{"@context":"http://schema.org","@type":"WebSite","name":"getmyuniversity Consultants","alternateName":"","url":"https://www.getmyuniversity.com","potentialAction":{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.getmyuniversity.com/abroad/?q={search_term}"},"query-input":{"@type":"PropertyValueSpecification","valueName":"search_term","valueRequired":"http://schema.org/True"}}}</script>
    <link rel="canonical" href="all-india-institute-of-medical-science-guwahati.html">
    <link rel="preload" href="../css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="../css/font-awesome.min.css">
    </noscript>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css" media="all">

    <!--Favicon-->

    <link rel="apple-touch-icon" sizes="180x180" href="public/images/favicon/apple-touch-icon.html">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/site.webmanifest">
    <link rel="mask-icon" href="../images/favicon/safari-pinned-tab.svg" color="#5bbad5">
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
    include "../Components/Navbar.php";
    ?>

    <section class="univercity_banner">
        <div class="container">
            <?php

            $college_name = $_REQUEST['college_name'];
            $conn = mysqli_connect("localhost", "root", "", "collegs");

            $query = "SELECT * FROM `medical_in_india` WHERE `college_name`='$college_name'";

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) { ?>



                    <div class="banner_wrapper">
                        <div class="bg_img">
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['college_img']); ?>" alt=""
                                width="1907" height="513">
                        </div>

                        <div class="row innerBox px-4 pb-md-4">
                            <div class="col-md-auto">
                                <div class="icon">
                                    <img width="180" height="58" alt="" class="fade-in"
                                        src="data:image/jpeg;base64,<?php echo base64_encode($row['college_logo']); ?>">
                                </div>
                            </div>
                            <div class="col-md content py-4">
                                <h1>
                                    <?php echo $row['college_name']; ?>
                                </h1>
                                <div class="meta d-flex align-items-center">
                                    <span class="location mr-4"><i class="fa fa-map-marker mr-1"></i>
                                        <?php echo $row['addres']; ?> ,
                                        <?php echo $row['state']; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="univercity_wrapper content_wrap">
                <div class="steps_menuBar">
                    <div class="container">
                        <ul class="list-unstyled d-flex align-items-center anchor-menu">
                            <li><a class="page-scroll active" href="#overviewTab">Overview</a></li>
                            <li><a class="page-scroll" href="#feeTab">Fee Structure</a></li>
                            <li><a class="page-scroll" href="#cutoffTab">Cutoff</a></li>
                            <li><a class="page-scroll" href="#queryTab">Query</a></li>
                        </ul>
                    </div>
                </div>
                <div class="main pt-5 pb-5 light-bg">
                    <div class="container">
                        <div class="facts_area mb-5">
                            <div class="row">
                                <div class="col-xl col-md-4 col-6 py-2">
                                    <div class="box">
                                        <div class="icon">
                                            <img data-src="https://www.getmyuniversity.com/public/images/facts-icon2.png"
                                                width="64" height="64" alt="" class="fade-in" src="../images/facts-icon2.png">
                                        </div>
                                        <div class="text">
                                            <div class="h3">ESTABLISHED</div>
                                            <p>
                                                <?php echo $row['established'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl col-md-4 col-6 py-2">
                                    <div class="box">
                                        <div class="icon">
                                            <img data-src="https://www.getmyuniversity.com/public/images/facts-icon3.png"
                                                width="64" height="64" alt="" class="fade-in" src="../images/facts-icon3.png">
                                        </div>
                                        <div class="text">
                                            <div class="h3">COLLEGE TYPE</div>
                                            <p>
                                                <?php echo $row['ownership']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl col-md-4 col-6 py-2">
                                    <div class="box">
                                        <div class="icon">
                                            <img data-src="https://www.getmyuniversity.com/public/images/facts-icon4.png"
                                                width="64" height="64" alt="" class="fade-in" src="../images/facts-icon4.png">
                                        </div>
                                        <div class="text">
                                            <div class="h3">LOCATION</div>
                                            <p>
                                                <?php echo $row['addres']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl col-md-4 col-6 py-2">
                                    <div class="box">
                                        <div class="icon">
                                            <img data-src="https://www.getmyuniversity.com/public/images/facts-icon7.png"
                                                width="64" height="64" alt="" class="fade-in" src="../images/facts-icon5.png">
                                        </div>
                                        <div class="text">
                                            <div class="h3">Approval</div>
                                            <p>-</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <section class="columnBox about_column" id="overviewTab">
                                    <h2>
                                        <?php echo $row['college_name']; ?>
                                    </h2>
                                    <p style="text-align:justify"><span style="font-family:Verdana,Geneva,sans-serif"><span
                                                style="font-size:16px"><?php  echo $row['about_the_college'] ?></span></span></p>

                                    <p style="text-align:justify"><span style="font-family:Verdana,Geneva,sans-serif"><span
                                                style="font-size:16px"><?php  echo $row['about_the_faculty'] ?></span></span></p>

                                
                                    <p style="text-align:justify"><span style="font-family:Verdana,Geneva,sans-serif"><span
                                                style="font-size:16px"><?php  echo $row['conclusion'] ?></span></span></p>

                                    <p style="text-align:justify"><span style="font-size:25px; font-weight:bold;"><span
                                                style="font-family:Verdana,Geneva,sans-serif">
                                                <?php echo $row['college_name'] ?> Location
                                                Details
                                            </span></span></p>

                                    <p style="text-align:justify"><span style="font-family:Verdana,Geneva,sans-serif"><span
                                                style="font-size:16px">
                                                <?php echo $row['location_detail'] ?>
                                            </span></span></p>
                                            

                                    <div class="info_table">
                                        <table class="table align-middle mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Particulars</th>
                                                    <th>Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>&nbsp;State</strong></td>
                                                    <td>&nbsp;
                                                        <?php echo $row['state'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>&nbsp;City</strong></td>
                                                    <td>&nbsp;
                                                        <?php echo $row['addres'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>&nbsp;Affiliated By</strong></td>
                                                    <td>&nbsp;<?php  echo $row['affilated_by'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>&nbsp;College Category</strong></td>
                                                    <td>&nbsp;Medical Colleges in Assam</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>


                                <section class="columnBox fee_column" id="feeTab">
                                    <div class="heading">
                                        <h2><span class="subTitle">Course, Fees, Duration and Fees of</span>
                                            <?php echo $row['college_name'] ?>,
                                            <?php echo $row['state'] ?>
                                        </h2>
                                    </div>
                                    <div class="info_table">
                                        <table class="table align-middle mb-0">
                                            <thead>
                                                <tr>
                                                    <th align="center">Course</th>
                                                    <th align="center">Branch</th>
                                                    <th align="center">Total Seat</th>
                                                    <th align="center">Course Duration</th>
                                                    <th align="center">Tution Fee (Per Year)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>MBBS</td>
                                                    <td>General Medicine</td>
                                                    <td>50</td>
                                                    <td>5.5 Years</td>
                                                    <td>5856</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="btnBox text-right mt-4">
                                    <a href="#" class="btn readMore">View Course Wise Fees  <i class="fa fa-angle-right ml-3"></i></a>
                                </div> -->
                                </section>
                                <section class="columnBox cutoff_column" id="cutoffTab">
                                    <div class="heading">
                                        <h2><span class="subTitle">Cut-Offs</span>
                                            <?php echo $row['college_name'] ?>,
                                            <?php echo $row['state'] ?>
                                        </h2>
                                    </div>
                                    <div class="info_table">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <strong class="block">Seat Type</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="block">Counselling Type</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="block">Category</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="block">Sub Category</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="block">Domicile Condition</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="block">Round 1 </br>Rank Yr 2022</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="block">Round 2 </br>Rank Yr 2022</strong>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>AIIMS</td>
                                                    <td>MCC</td>
                                                    <td>EWS</td>
                                                    <td>EWS</td>
                                                    <td>NO</td>
                                                    <td>-</td>
                                                    <td>5817</td>
                                                </tr>
                                                <tr>
                                                    <td>AIIMS</td>
                                                    <td>MCC</td>
                                                    <td>OBC</td>
                                                    <td>OBC</td>
                                                    <td>NO</td>
                                                    <td>-</td>
                                                    <td>5728</td>
                                                </tr>
                                                <tr>
                                                    <td>AIIMS</td>
                                                    <td>MCC</td>
                                                    <td>OBCPwD</td>
                                                    <td>OBCPwD</td>
                                                    <td>NO</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>AIIMS</td>
                                                    <td>MCC</td>
                                                    <td>Open</td>
                                                    <td>Open</td>
                                                    <td>NO</td>
                                                    <td>-</td>
                                                    <td>4643</td>
                                                </tr>
                                                <tr>
                                                    <td>AIIMS</td>
                                                    <td>MCC</td>
                                                    <td>Open PwD</td>
                                                    <td>Open PwD</td>
                                                    <td>NO</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>AIIMS</td>
                                                    <td>MCC</td>
                                                    <td>SC</td>
                                                    <td>SC</td>
                                                    <td>NO</td>
                                                    <td>-</td>
                                                    <td>44687</td>
                                                </tr>
                                                <tr>
                                                    <td>AIIMS</td>
                                                    <td>MCC</td>
                                                    <td>SC PwD</td>
                                                    <td>SC PwD</td>
                                                    <td>NO</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>AIIMS</td>
                                                    <td>MCC</td>
                                                    <td>ST</td>
                                                    <td>ST</td>
                                                    <td>NO</td>
                                                    <td>-</td>
                                                    <td>70850</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-4">
                                <div class="un_sidebar">
                                    <div class="contact column">
                                        <h3>Contact Details</h3>
                                        <p><strong><i class="fa fa-map-marker mr-2"></i>Address</strong>
                                            <?php echo $row['addres'] ?>,
                                            <?php echo $row['state'] ?>
                                        </p>
                                        <p><a href="https://goo.gl/maps/r4wtXg8yiWpP5U2b9">View on Map</a></p>
                                        <p><strong><i class="fa fa-envelope mr-2"></i>Email</strong>
                                            <a href="#"><?php  echo $row['college_email_id'] ?></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="unAfix_sidebar">
                                    <!-- <div class="column">
                                <h3>Student Review</h3>
                                <button class="video_playBtn" data-video="https://www.youtube.com/embed/IptC7oeTNkE"><img data-src="https://www.getmyuniversity.com/public/images/blog_1.jpg" width="867" height="603" alt="" class="fade-in" src="https://www.getmyuniversity.com/public/images/blog_1.jpg"></button>
                            </div> -->
                                    <div class="column interestColumn">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="icon"><img src="../images/university.png" alt="" width="80" height="80">
                                            </div>
                                            <div class="title pl-4">Interested in this College ?</div>
                                        </div>
                                        <a href="#queryTab" class="btn theme-btn btn2 d-block w-100"><i
                                                class="fa fa-group mr-2"></i> Get free counselling</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

                }
            }
            ?>
    <div id="queryTab" class="quoteForm section-padding shape1_bottom"
        style="background-image: url(images/form-bg.html);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md pb-5">
                    <div class="content text-white">
                        <div class="heading">
                            <span class="subTitle">FREE 24/7 SUPPORT</span>
                            <h2>Get Free & Quality Online Consultation</h2>
                        </div>
                        <p><strong>Medical Admission is a complex process and needs a great amount of pre-planning and a
                                professional approach which can match RIGHT FIT FOR RIGHT STUDENTS.</strong></p>
                        <p>Team Get My University assists medical aspirants in the following ways: </p>
                        <ul>
                            <li>College-level profiling which includes analysis of Clinical Facts &amp; Non-Clinical
                                Facts.</li>
                            <li>Proper budget planning by objectively explaining hidden elements.</li>
                            <li>Clarity about the admission process of multiple states Counselling.</li>
                            <li>Systematic analysis of past year Cutoffs and scientific trend analysis about the future.
                            </li>
                            <li>Planning the admission process in detail to prevent any confusion.</li>
                        </ul>
                        <p>It is not JUST about getting an institute, it is MOST about getting the best institute and a
                            poor candidate profile.</p>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="formBox">
                        <h3>Request a callback</h3>
                        <form class="form" method="post" action="https://www.getmyuniversity.com/public/query"
                            id="submitForm">
                            <input type="hidden" name="_token" value="YvoOqzc0Jwsr89Wrf6btBbhmRBaVe1CTbofzKk8N"> <input
                                type="hidden" name="current_url"
                                value="all-india-institute-of-medical-science-guwahati.html">
                            <div class="form-group">
                                <label class="label">Full name</label>
                                <input class="form-control" name="name" id="name" placeholder="Full name" type="text"
                                    required />
                                <span class="error" id="name_error" style="color:Red; display: none;">Please Enter
                                    Name</span>
                            </div>
                            <div class="form-group">
                                <label class="label">Phone</label>
                                <input class="form-control" placeholder="Phone" type="text" name="number" id="number"
                                    required />
                                <span class="error" id="number_error" style="color:Red; display: none;">Please Enter
                                    Number</span>
                            </div>
                            <div class="form-group">
                                <label class="label">Email</label>
                                <input class="form-control" placeholder="Email" type="text" name="email" id="email"
                                    required />
                                <span class="error" id="email_error" style="color:Red; display: none;">Please Enter
                                    Email</span>
                            </div>
                            <div class="form-group">
                                <label class="label">Message</label>
                                <textarea name="service" class="form-control" id="message"></textarea>
                                <span class="error" id="message_error" style="color:Red; display: none;">Please Enter
                                    Message</span>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="one_number" id="one_number" value="40" />
                                <input type="hidden" name="two_number" id="two_number" value="83" />
                                <label class="label">which is Bigger 40 or 83 ?</label>
                                <input class="form-control" placeholder="Enter Big Number" type="text"
                                    name="enter_number" id="enter_number" required />
                                <span class="error" id="enter_number_error" style="color:Red; display: none;"></span>
                            </div>
                            <div class="btnBox">
                                <button type="button" class="btn theme-btn" id="submitQuery">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
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
                                <li class="nav-item"><a href="../md-colleges.html">MD in India</a></li>
                                <li class="nav-item"><a href="../ms-colleges.html">MS in India</a></li>
                                <li class="nav-item"><a href="../dm-colleges.html">DM in India</a></li>
                                <li class="nav-item"><a href="../mch-colleges.html">MCH in India</a></li>
                                <li class="nav-item"><a href="../dip-colleges.html">DIP in India</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8">
                        <div class="box">
                            <h3>Top States</h3>
                            <ul class="footer-menu mbbs_menu list-unstyled">
                                <li class="nav-item"><a href="../../medical-colleges-in-karnataka.html">Karnataka</a>
                                </li>
                                <li class="nav-item"><a href="../../medical-colleges-in-kerala.html">Kerala</a></li>
                                <li class="nav-item"><a href="../../medical-colleges-in-uttar-pradesh.html">Uttar
                                        Pradesh</a></li>
                                <li class="nav-item"><a href="../../medical-colleges-in-rajasthan.html">Rajasthan</a>
                                </li>
                                <li class="nav-item"><a href="../../medical-colleges-in-west-bengal.html">West
                                        Bengal</a></li>
                                <li class="nav-item"><a
                                        href="../../medical-colleges-in-pondicherry.html">Pondicherry</a></li>
                                <li class="nav-item"><a
                                        href="../../medical-colleges-in-maharashtra.html">Maharashtra</a></li>
                                <li class="nav-item"><a
                                        href="../../medical-colleges-in-uttarakhand.html">Uttarakhand</a></li>
                                <li class="nav-item"><a href="../../medical-colleges-in-chandigarh.html">Chandigarh</a>
                                </li>
                                <li class="nav-item"><a href="../../medical-colleges-in-bihar.html">Bihar</a></li>
                                <li class="nav-item"><a href="../../medical-colleges-in-delhi.html">Delhi</a></li>
                                <li class="nav-item"><a href="../../medical-colleges-in-gujarat.html">Gujarat</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mt-5 mt-md-0">
                        <div class="box">
                            <h3>Legal</h3>
                            <ul class="footer-menu list-unstyled">
                                <li><a href="../about-us.html">About Us</a></li>
                                <li><a href="../blog.html">Blog</a></li>
                                <li><a href="../contact-us.html">Contact Us</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="../../privacy-policy.html">Privacy Policy</a></li>

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
                                <div class="imgBox"><img src="../images/main-hero2.png" alt="Abroad Journey" width="745"
                                        height="636" /></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>

    <script src="../js/script.js"></script>
    <div class="modal" id="photoGallery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="closeImg close" data-dismiss="modal"
                        aria-label="Close">&times;</button>
                    <div class="univercityImg owl-carousel">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video_playPopup">
        <button class="close_playPopup">×</button>
        <div class="videoBox">
            <div class="videoBody">
                <iframe id="review_video" width="1268" height="713" src="#" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('.univercityImg').owlCarousel({
                loop: false,
                margin: 10,
                items: 1,
                nav: true,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                dots: false,
            });
            $("#photoGallery").on('show.bs.modal', function () {
                $('.univercityImg').trigger('refresh.owl.carousel');
            });
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

    <script>
        $("#submitQuery").click(function () {
            var x = 1;
            $('.error').hide();
            var name = $('#name').val();
            if (name == '') {
                $('#name_error').show();
                x = 2;
            }
            var number = $('#number').val();
            if (number == '') {
                $('#number_error').show();
                x = 2;
            }
            var email = $('#email').val();
            if (email == '') {
                $('#email_error').show();
                x = 2;
            }
            var message = $('#message').val();
            if (message == '') {
                $('#message_error').show();
                x = 2;
            }
            var enter_number_error = $('#enter_number').val();
            if (enter_number_error == '') {
                $('#enter_number_error').show();
                $('#enter_number_error').text('');
                $('#enter_number_error').text('Please Enter Big Number');
                x = 2;
            }

            var one_number = $('#one_number').val();
            var two_number = $('#two_number').val();
            if (one_number > two_number) {
                if (enter_number_error != one_number) {
                    $('#enter_number_error').show();
                    $('#enter_number_error').text('');
                    $('#enter_number_error').text('Please Enter Big Number');
                    x = 2;
                }
            } else {
                if (enter_number_error != two_number) {
                    $('#enter_number_error').show();
                    $('#enter_number_error').text('');
                    $('#enter_number_error').text('Please Enter Big Number');
                    x = 2;
                }
            }

            if (x == 2) {
                return false;
            }

            $('#submitForm').submit();

        });
    </script>

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

<!-- Mirrored from www.getmyuniversity.com/public/university/all-india-institute-of-medical-science-guwahati by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Sep 2023 12:37:42 GMT -->

</html>