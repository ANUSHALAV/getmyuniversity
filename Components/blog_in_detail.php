<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur?</title>
    <meta name="title" content="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur?">
    <meta name="keyword" content="Intake, Admission">
    <meta name="description"
        content="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur? We have prepared a complete reports of the universities.">
    <meta name="author" content="info@getmyuniversity.com">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url"
        content="https://www.getmyuniversity.com/blog/what-should-i-choose-mdi-murshidabad-or-imi-kolkata-or-imt-nagpur">
    <meta property="og:title" content="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur?">
    <meta property="og:description"
        content="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur? We have prepared a complete reports of the universities.">
    <meta property="og:image"
        content="https://www.getmyuniversity.com/images/country_images/large/What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur.jpg-25883.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url"
        content="https://www.getmyuniversity.com/blog/what-should-i-choose-mdi-murshidabad-or-imi-kolkata-or-imt-nagpur">
    <meta property="twitter:title" content="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur?">
    <meta property="twitter:description"
        content="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur? We have prepared a complete reports of the universities.">
    <meta property="twitter:image"
        content="https://www.getmyuniversity.com/images/country_images/large/What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur.jpg-25883.jpg">
    <script
        type="application/ld+json">{"@context":"http://schema.org","@type":"Organization","url":"https://www.getmyuniversity.com","logo":"https://www.getmyuniversity.com/images/logo.png","name":"getmyuniversity Consultants","sameAs":["https://www.facebook.com/getmyuniversityConsultantsManagementServicesPvtLtd/","https://twitter.com/jag_vimal"]}</script>
    <script
        type="application/ld+json">{"@context":"http://schema.org","@type":"WebSite","name":"getmyuniversity Consultants","alternateName":"","url":"https://www.getmyuniversity.com","potentialAction":{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.getmyuniversity.com/abroad/?q={search_term}"},"query-input":{"@type":"PropertyValueSpecification","valueName":"search_term","valueRequired":"http://schema.org/True"}}}</script>
    <link rel="canonical"
        href="https://www.getmyuniversity.com/blog/what-should-i-choose-mdi-murshidabad-or-imi-kolkata-or-imt-nagpur">
    <link rel="preload" href="https://www.getmyuniversity.com/css/font-awesome.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://www.getmyuniversity.com/css/font-awesome.min.css">
    </noscript>
    <link rel="stylesheet" href="https://www.getmyuniversity.com/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.getmyuniversity.com/css/style.css" media="all">

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


    <?php
    include("navbar.php");
    ?>

    <div class="post_progress"></div>
    <div class="singlePost_wrapper pt-5 section-padding">
        <div class="container">
            <div class="detail_wraper">

                <?php
                $id = $_REQUEST['id'];
                $conn = mysqli_connect("localhost", "root", "", "collegs");

                $query = "SELECT * FROM `blogs` WHERE `id`= '$id'";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="breadcrumbs">
                                    <a href="https://www.getmyuniversity.com">Home</a>
                                    <span class="devider">/</span>
                                    <a href="https://www.getmyuniversity.com/blog">Blog</a>
                                    <span class="devider">/</span>
                                    <span>
                                        <?php echo $row['blog_heading']; ?>
                                    </span>
                                </div>
                                <div class="blogItem single_post">
                                    <h1>
                                        <?php echo $row['blog_heading']; ?>?
                                    </h1>
                                    <div class="meta">
                                        <span class="auther">Team getmyuniversity</span>
                                        <span class="date"><i class="fa fa-calendar"></i>
                                            <?php echo $row['blog_date']; ?>
                                        </span>
                                        <span class="views"><i class="fa fa-eye"></i> 2401 views</span>
                                        <!-- <span class="views"><i class="fa fa-share-alt"></i> 10 shares</span> -->
                                    </div>
                                    <a class="imgBox" href="#">
                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($row['blog_front_image']); ?>"
                                            width=" 300" height="300"
                                            alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                    </a>
                                    <div class="text">
                                        <p>
                                        <p style="text-align:justify">
                                            <?php echo $row['discription']; ?>
                                        </p>

                                        <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align:justify">The following metric is used to compare MDI
                                                        Murshidabad, IMI Kolkata, and IMT Nagpur:
                                                        <ul>
                                                            <li><a class="page-scroll" href="#section1">Location</a></li>
                                                            <li><a class="page-scroll" href="#section2">History</a></li>
                                                            <li><a class="page-scroll" href="#section3">Campus Area</a></li>
                                                            <li><a class="page-scroll" href="#section4">Seat Matrix</a></li>
                                                            <li><a class="page-scroll" href="#section5">Fees</a></li>
                                                            <li><a class="page-scroll" href="#section6">Cut Off&nbsp;</a></li>
                                                            <li><a class="page-scroll" href="#section7">Placement</a></li>
                                                            <li><a class="page-scroll" href="#section8">Accreditation</a></li>
                                                            <li><a class="page-scroll" href="#section9">Ranking</a></li>
                                                            <li><a class="page-scroll" href="#section10">Specialization</a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify">Get My University is committed to offering truthful,
                                            critical evaluations free of any sugarcoating so that candidates can make
                                            well-informed decisions. To the best of our knowledge, our team of experts is always
                                            ready to assist with any professional needs and can provide full information.</p>

                                        <div class="gmu" id="section1">
                                            <h2 style="text-align:justify">Campus Location</h2>

                                            <ul>
                                                <!-- <li style="text-align:justify">&nbsp;</li> -->
                                                <li style="text-align:justify">
                                                    <?php echo $row['locationcompresion1'] ?>
                                                </li>
                                                <li style="text-align:justify">
                                                    <?php echo $row['locationcompresion2'] ?>
                                                </li>
                                            </ul>

                                            <div class="gmu" id="section2">
                                                <h2 style="text-align:justify">History</h2>

                                                <ul>
                                                    <li style="text-align:justify">
                                                        <?php echo $row['historycompresion1'] ?>&nbsp; &nbsp; &nbsp;
                                                    </li>
                                                    <li style="text-align:justify">
                                                        <?php echo $row['historycompresion2'] ?>
                                                    </li>
                                                </ul>

                                                <div class="gmu" id="section3">
                                                    <h2 style="text-align:justify">Campus Area</h2>

                                                    <ul>
                                                        <li style="text-align:justify">
                                                            <?php echo $row['campuscompresion1'] ?>
                                                        </li>

                                                        <li style="text-align:justify">
                                                            <?php echo $row['campuscompresion2'] ?>
                                                        </li>
                                                    </ul>

                                                    <div class="gmu" id="section4">
                                                        <h2 style="text-align:justify">Seat Matrix</h2>

                                                        <ul>
                                                            <li style="text-align:justify">MDI Murshidabad offers 180 seats for
                                                                its PGDM/MBA programs. Accepted exams: CAT or GMAT.&nbsp;&nbsp;
                                                            </li>
                                                            <li style="text-align:justify">IMI Kolkata offers 180 seats for its
                                                                PGDM/MBA programs. Accepted exams: CAT, XAT, CMAT, GMAT.</li>
                                                            <li style="text-align:justify">IMT Nagpur offers 360 seats for its
                                                                PGDM programme. Accepted exams: CAT, XAT, CMAT, GMAT.</li>
                                                        </ul>

                                                        <div class="gmu" id="section5">
                                                            <h2 style="text-align:justify">Fees</h2>

                                                            <ul>
                                                                <li style="text-align:justify">MDI Murshidabad overall programme
                                                                    fees cost around 11 lakhs &nbsp; &nbsp; &nbsp;&nbsp;</li>
                                                                <li style="text-align:justify">The total fees for IMI Kolkata
                                                                    MBA program is INR 13 Lakhs.</li>
                                                                <li style="text-align:justify">The fees for the post graduate
                                                                    Diploma in Management [PGDM] program at Institute of
                                                                    Management Technology (IMT), Nagpur is INR 823,000 for the
                                                                    first year. The total fees (including hostel and mess) for
                                                                    PGDM 2024-26 is 14.5 Lakhs INR.</li>
                                                            </ul>

                                                            <div class="gmu" id="section6">
                                                                <h2 style="text-align:justify">Cut Off</h2>

                                                                <ul>
                                                                    <li style="text-align:justify">The minimum overall and
                                                                        sectional cutoffs needed for admission to MDI
                                                                        Murshidabad will remain 85 percentile and 90 percentile,
                                                                        respectively. &nbsp; &nbsp; &nbsp;&nbsp;</li>
                                                                    <li style="text-align:justify">Although IMI Kolkata has no
                                                                        specific cut-off, a percentile of 80 per cent or above
                                                                        in CAT/XAT/CMAT exams is generally the cut-off required
                                                                        to get successful admission into the institute. The
                                                                        general cutoff trend shows a score of 650 or above in
                                                                        GMAT for the same.&nbsp;</li>
                                                                    <li style="text-align:justify">According to the recent
                                                                        trends, the required CAT cutoff for IMT Nagpur is around
                                                                        85 percentile. &nbsp;&nbsp;</li>
                                                                </ul>

                                                                <div class="gmu" id="section7">
                                                                    <h2 style="text-align:justify"><br />
                                                                        Placements</h2>

                                                                    <ul>
                                                                        <li style="text-align:justify">According to the MDI
                                                                            Murshidabad placement data 2023 provided, the total
                                                                            number of recruiters including new recruiters
                                                                            participated in the campus placement drive is 88.
                                                                            MDI placement average salary package is Rs.
                                                                            12,67,000. Whereas, the MDI Murshidabad placement
                                                                            highest salary package is Rs. 20,00,000. Some of the
                                                                            top recruiters that participate in the MDI
                                                                            Murshidabad placement drive are Airtel, Havells,
                                                                            TVS, Infosys, TCS, TATA Steel, Tech Mahindra and
                                                                            many more.&nbsp;</li>
                                                                        <li style="text-align:justify">According to the IMI
                                                                            Kolkata placement data 2023 provided, the total
                                                                            number of recruiters including new recruiters
                                                                            participated in the campus placement drive is 79+.
                                                                            The average salary of IMI Kolkata placement stood at
                                                                            INR 10.45 LPA. whereas, the IMI Kolkata placement
                                                                            highest salary offered was INR 14 LPA. ICICI Bank
                                                                            Limited, KPMG Global Services, Deloitte, PwC
                                                                            Acceleration Centers, and many more.&nbsp;</li>
                                                                        <li style="text-align:justify">According to the IMT
                                                                            Nagpur placement data 2023 provided, the highest
                                                                            package of the IMT Nagpur placement offered was INR
                                                                            20.14 LPA and the average package stood at INR 10.81
                                                                            LPA. Some of the top recruiters included Capegemini,
                                                                            KPMG, Wipro, Cognizant, Barclays, Deloitte, E&amp;Y,
                                                                            Schneider, etc.</li>
                                                                    </ul>

                                                                    <div class="gmu" id="section8">
                                                                        <h2 style="text-align:justify">Accreditation</h2>

                                                                        <ul>
                                                                            <li style="text-align:justify">MDI is the first
                                                                                business school in India with international
                                                                                accreditation from the Association of MBAs
                                                                                (AMBA) in the United Kingdom in addition to an
                                                                                A-grade accreditation for their flagship
                                                                                academic program, the Postgraduate Diploma in
                                                                                Management (PGDM), awarded by the National Board
                                                                                of Accreditation (NBA) of All India Council for
                                                                                Technical Education (AICTE).</li>
                                                                            <li style="text-align:justify">International
                                                                                Management Institute Kolkata is approved and
                                                                                recognized by All India Council for Technical
                                                                                Education (AICTE), Ministry of HRD, Government
                                                                                of India .The flagship programme &ldquo;Post
                                                                                Graduate Diploma in Management&rdquo; of IMI
                                                                                Kolkata is accredited by National Board of
                                                                                Accreditation (NBA), Ministry of HRD. IMI
                                                                                Kolkata accredited by AMBA for five years
                                                                                (2022-2027)</li>
                                                                            <li style="text-align:justify">The Institute of
                                                                                Management Technology (IMT), Nagpur has been
                                                                                accredited by the All India Council for
                                                                                Technical Education (AICTE), NBA (National Board
                                                                                of Accreditation), Association of Indian
                                                                                Universities (AIU) and SAQS. IMT Nagpur is a
                                                                                member of the AACSB and AMDISA. IMT, Nagpur was
                                                                                established in 2004. &nbsp; &nbsp;&nbsp;</li>
                                                                        </ul>

                                                                        <div class="gmu" id="section9">
                                                                            <h2 style="text-align:justify">Rankings</h2>

                                                                            <ul>
                                                                                <li style="text-align:justify">MDI Murshidabad
                                                                                    Ranking in India, The National Institutional
                                                                                    Ranking Framework or NIRF ranked Management
                                                                                    Development Institute 12th out of 150 B-
                                                                                    seminaries.&nbsp;</li>
                                                                                <li style="text-align:justify">IMI Kolkata
                                                                                    Ranking was 70th out of 125 colleges in
                                                                                    management category under NIRF Ranking 2023,
                                                                                    63rd out of 272 colleges in India in the
                                                                                    India Today Ranking 2023 and 31st out of 120
                                                                                    colleges in India in the IIRF Ranking
                                                                                    2023.&nbsp;</li>
                                                                                <li style="text-align:justify">IMT Nagpur
                                                                                    Ranking was 101 out of 125 colleges in
                                                                                    management category under NIRF Ranking 2023,
                                                                                    44 out of 272 colleges in India in the India
                                                                                    Today Ranking 2023. &nbsp; &nbsp; &nbsp;
                                                                                </li>
                                                                            </ul>

                                                                            <div class="gmu" id="section10">
                                                                                <h2 style="text-align:justify">Specialization
                                                                                </h2>

                                                                                <ul>
                                                                                    <li style="text-align:justify">MDI
                                                                                        Murshidabad offers a two year Post
                                                                                        Graduate Diploma in Management (PGDM)
                                                                                        with four specializations:</li>
                                                                                </ul>

                                                                                <ol>
                                                                                    <li style="text-align:justify">Finance&nbsp;
                                                                                    </li>
                                                                                    <li style="text-align:justify">Human
                                                                                        Resource Management</li>
                                                                                    <li style="text-align:justify">Marketing
                                                                                        Management &nbsp;</li>
                                                                                    <li style="text-align:justify">Supply Chain
                                                                                        Management.</li>
                                                                                </ol>

                                                                                <ul>
                                                                                    <li style="text-align:justify">IMI Kolkata
                                                                                        offers following options of
                                                                                        specializations for its PGDM programme:
                                                                                    </li>
                                                                                </ul>

                                                                                <ol>
                                                                                    <li style="text-align:justify">Economics,
                                                                                        Strategy &amp; Business</li>
                                                                                    <li style="text-align:justify">Finance</li>
                                                                                    <li style="text-align:justify">Marketing
                                                                                    </li>
                                                                                    <li style="text-align:justify">Information
                                                                                        Systems &amp; Operations Management</li>
                                                                                    <li style="text-align:justify">OB &amp; HR
                                                                                    </li>
                                                                                </ol>

                                                                                <ul>
                                                                                    <li style="text-align:justify">&nbsp;
                                                                                        &nbsp;&nbsp;&nbsp;IMT NAGPUR offers a
                                                                                        full-time two years Post Graduate
                                                                                        Diploma in Management (PGDM) residential
                                                                                        programme equivalent to MBA in various
                                                                                        specializations such as</li>
                                                                                </ul>

                                                                                <ol>
                                                                                    <li style="text-align:justify">Marketing
                                                                                    </li>
                                                                                    <li style="text-align:justify">IT Management
                                                                                    </li>
                                                                                    <li style="text-align:justify">Operations
                                                                                        Management&nbsp;</li>
                                                                                    <li style="text-align:justify">Business
                                                                                        Analytics&nbsp;</li>
                                                                                    <li style="text-align:justify">HR &amp;
                                                                                        OB,&nbsp;</li>
                                                                                    <li style="text-align:justify">Economics and
                                                                                        Finance &nbsp;</li>
                                                                                </ol>

                                                                                <h2 style="text-align:justify">Get My University
                                                                                    Analysis</h2>

                                                                                <p style="text-align:justify">One of the main
                                                                                    factors influencing a candidate&#39;s choice
                                                                                    of business school is the expected salary
                                                                                    after earning an MBA. Management education
                                                                                    is not inexpensive, so it&#39;s crucial for
                                                                                    applicants to consider an institution&#39;s
                                                                                    return on investment (ROI). Based on data we
                                                                                    observed, the ROI of MDI Murshidabad is
                                                                                    significantly higher than that of IMI
                                                                                    Kolkata and IMT Nagpur, and students ranked
                                                                                    MDI Murshidabad first, IMI Kolkata second,
                                                                                    and IMT Nagpur third in their reviews. The
                                                                                    fact that MDI Murshidabad is a recently
                                                                                    established institution is its only
                                                                                    drawback.</p>

                                                                                <p style="text-align:justify">In summary, MDI
                                                                                    Murshidabad, IMI Kolkata and IMT Nagpur are
                                                                                    reputable institutions that offer a variety
                                                                                    of management programs, have experienced
                                                                                    faculty, excellent placement histories, and
                                                                                    vibrant alumni networks.</p>

                                                                                <p style="text-align:justify">An MBA aspirant
                                                                                    should take into account parameters like
                                                                                    program specializations, location
                                                                                    preferences, and your individual goals and
                                                                                    interests. To make an informed choice, you
                                                                                    must visit the campus and talk to the
                                                                                    existing students.&nbsp;</p>

                                                                                <p>&nbsp;</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                                <!-- <div class="postTag_list">
                            <span>Tags:</span>
                            <a href="#">LLM courses for january 2022</a>
                            <a href="#">LLM in UK</a>
                            <a href="#">Study in UK</a>
                        </div> -->
                                <div class="postShare_block">
                                    <h3>Share this article</h3>
                                    <div class="shareLinks">
                                        <a href="#" class="facebook link"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="twitter link"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="whatsapp link"><i class="fa fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <!-- <div class="postComment_block">
                            <div class="comment_formBox">
                                <h3>Leave a Reply</h3>
                                <div class="form-group">
                                    <label>Your contact details will not be published. Required fields are marked *</label>
                                    <textarea class="form-control" placeholder="What are your thoughts ?"></textarea>
                                </div>
                                <div class="btnBox text-right">
                                    <button class="btn theme-btn btn2">Submit</button>
                                </div>
                            </div>
                            <div class="commentList">
                                <h4>4 COMMENTS</h4>
                                <div class="commentItem">
                                    <div class="userInfo">
                                        <img src="https://www.getmyuniversity.com/images/user-default.png" alt="" />
                                        <div class="info">
                                            <div class="name">Rizna diwan</div>
                                            <div class="date">September 24, 2021 at 1:18 pm</div>
                                        </div>
                                    </div>
                                    <div class="comment">I have completed my LLM from Sardar Patel University in 2021. I want to do my further study in UK related law course</div>
                                </div>
                                <div class="commentItem">
                                    <div class="userInfo">
                                        <img src="https://www.getmyuniversity.com/images/user-default.png" alt="" />
                                        <div class="info">
                                            <div class="name">Rizna diwan</div>
                                            <div class="date">September 24, 2021 at 1:18 pm</div>
                                        </div>
                                    </div>
                                    <div class="comment">I have completed my LLM from Sardar Patel University in 2021. I want to do my further study in UK related law course</div>
                                </div>
                            </div>
                        </div> -->


                            </div>
                            <div class="col-lg-4 pl-lg-5">
                                <div class="blog_sidebar">
                                    <div class="related_list">
                                        <h3 class="title">You May Also Like</h3>
                                        <div class="blogItem">
                                            <div class="category">MBBS IN INDIA</div>
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/mbbs-2024-exam-schedule-admission-process-top-mbbs-colleges">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/mbbs 2024.png-50811.png"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/mbbs-2024-exam-schedule-admission-process-top-mbbs-colleges">MBBS
                                                        2024: Exam, Schedule, Admission Process, Top MBBS Colleges</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">02 Nov 2023</span>
                                                    <span class="views">1013 views</span>
                                                </div>
                                                <p>MBBS 2024: Exam, Schedule, Admission Process, Top MBBS Colleges <a
                                                        class="readMore"
                                                        href="https://www.getmyuniversity.com/blog/mbbs-2024-exam-schedule-admission-process-top-mbbs-colleges">Read
                                                        More</a></p>
                                            </div>
                                        </div>
                                        <div class="blogItem">
                                            <div class="category">NEET UG 2023 Updates</div>
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/neet-ug-round-6-counselling-2023-mcc-announced-special-stray-vacancy-round">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/Care (1).png-44715.png"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/neet-ug-round-6-counselling-2023-mcc-announced-special-stray-vacancy-round">NEET
                                                        UG Round 6 Counselling 2023: MCC Announced Special Stray Vacancy
                                                        Round</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">02 Nov 2023</span>
                                                    <span class="views">1087 views</span>
                                                </div>
                                                <p>NEET UG Round 6 Counselling 2023: MCC Announced Special Stray Vacancy Round
                                                    <a class="readMore"
                                                        href="https://www.getmyuniversity.com/blog/neet-ug-round-6-counselling-2023-mcc-announced-special-stray-vacancy-round">Read
                                                        More</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="blogItem">
                                            <div class="category">MBA IN INDIA</div>
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/a-comprehensive-comparison-imt-ghaziabad-vs-nmims-mumbai">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/IMT Ghaziabad vs NMIMS Mumbai.jpg-22533.jpg"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/a-comprehensive-comparison-imt-ghaziabad-vs-nmims-mumbai">A
                                                        Comprehensive Comparison - IMT Ghaziabad vs NMIMS Mumbai</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">30 Oct 2023</span>
                                                    <span class="views">1067 views</span>
                                                </div>
                                                <p>A Comprehensive Comparison - IMT Ghaziabad vs NMIMS Mumbai <a
                                                        class="readMore"
                                                        href="https://www.getmyuniversity.com/blog/a-comprehensive-comparison-imt-ghaziabad-vs-nmims-mumbai">Read
                                                        More</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list_items">
                                        <h3 class="title">Study</h3>
                                        <div class="blogItem">
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/uttarakhand-neet-ug-stray-vacancy-round-counselling-schedule-out">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/Uttarakhand NEET UG Stray Vacancy Round Counselling Schedule Out.jpg-75090.jpg"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/uttarakhand-neet-ug-stray-vacancy-round-counselling-schedule-out">Uttarakhand
                                                        NEET UG Stray Vacancy Round Counselling Schedule Out</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">26 Oct 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blogItem">
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/nursing-in-germany-for-indian-students-after-12th">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/Nursing in Germany for Indian Students after 12th.png-40485.png"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/nursing-in-germany-for-indian-students-after-12th">Nursing
                                                        in Germany for Indian Students after 12th</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">20 Oct 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blogItem">
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/top-10-mba-colleges-in-pune">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/Top 10 MBA Colleges in Pune.png-79021.png"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a href="https://www.getmyuniversity.com/blog/top-10-mba-colleges-in-pune">Top
                                                        10 MBA Colleges in Pune</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">09 Oct 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blogItem">
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/bihar-neet-ug-counselling-2023-round-3-merit-list-out-check-now">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/Bihar UG NEET Counselling 2023- Round 3 Counselling Dates.jpg-70979.jpg"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/bihar-neet-ug-counselling-2023-round-3-merit-list-out-check-now">Bihar
                                                        NEET UG Counselling 2023 : Round 3 Merit List Out - Check Now</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">29 Sep 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blogItem">
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/tamil-nadu-ug-2023-stray-vacancy-round-will-close-today">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/Tamil Nadu UG 2023 Stray Vacancy Round Will Close Today.jpg-25376.jpg"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/tamil-nadu-ug-2023-stray-vacancy-round-will-close-today">Tamil
                                                        Nadu UG 2023 Stray Vacancy Round Will Close Today</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">25 Sep 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blogItem">
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/bihar-neet-ug-counselling-2023-round-3-merit-list-out">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/Bihar NEET UG Counselling 2023 Round 3 Merit List Out .jpg-49893.jpg"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/bihar-neet-ug-counselling-2023-round-3-merit-list-out">Bihar
                                                        NEET UG Counselling 2023 : Round 3 Merit List Out - Check Now</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">25 Sep 2023</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="list_items mt-5">
                                        <h3 class="title">Popular Posts</h3>
                                        <div class="blogItem">
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/mbbs-2024-exam-schedule-admission-process-top-mbbs-colleges">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/mbbs 2024.png-50811.png"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/mbbs-2024-exam-schedule-admission-process-top-mbbs-colleges">MBBS
                                                        2024: Exam, Schedule, Admission Process, Top MBBS Colleges</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">02 Nov 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blogItem">
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/neet-ug-round-6-counselling-2023-mcc-announced-special-stray-vacancy-round">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/Care (1).png-44715.png"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/neet-ug-round-6-counselling-2023-mcc-announced-special-stray-vacancy-round">NEET
                                                        UG Round 6 Counselling 2023: MCC Announced Special Stray Vacancy
                                                        Round</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">02 Nov 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blogItem">
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/uttarakhand-neet-ug-stray-vacancy-round-counselling-schedule-out">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/Uttarakhand NEET UG Stray Vacancy Round Counselling Schedule Out.jpg-75090.jpg"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/uttarakhand-neet-ug-stray-vacancy-round-counselling-schedule-out">Uttarakhand
                                                        NEET UG Stray Vacancy Round Counselling Schedule Out</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">26 Oct 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blogItem">
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/what-is-the-process-of-getting-nri-seats-in-deemed-colleges">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/What is the process of getting NRI SEATS in Deemed College.jpg-48715.jpg"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/what-is-the-process-of-getting-nri-seats-in-deemed-colleges">What
                                                        is the Process of Getting NRI SEATS in Deemed Colleges?</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">25 Oct 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blogItem">
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/nursing-in-germany-for-indian-students-after-12th">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/Nursing in Germany for Indian Students after 12th.png-40485.png"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/nursing-in-germany-for-indian-students-after-12th">Nursing
                                                        in Germany for Indian Students after 12th</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">20 Oct 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blogItem">
                                            <a class="imgBox"
                                                href="https://www.getmyuniversity.com/blog/puducherry-round-3-registration-started-check-last-date">
                                                <img data-src="https://www.getmyuniversity.com/images/country_images/large/puducherry round 3 ragistration.jpg-60814.jpg"
                                                    onerror="this.src='https://www.getmyuniversity.com/images/logo/university.jpg';"
                                                    width="300" height="300"
                                                    alt="What should I choose MDI Murshidabad or IMI Kolkata or IMT Nagpur">
                                            </a>
                                            <div class="text">
                                                <h3><a
                                                        href="https://www.getmyuniversity.com/blog/puducherry-round-3-registration-started-check-last-date">Puducherry
                                                        Round 3 Registration started: Check Last Date</a></h3>
                                                <div class="meta">
                                                    <span class="auther">Team getmyuniversity</span>
                                                    <span class="date">14 Oct 2023</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
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
                                <li class="nav-item"><a href="https://www.getmyuniversity.com/md-colleges">MD in
                                        India</a></li>
                                <li class="nav-item"><a href="https://www.getmyuniversity.com/ms-colleges">MS in
                                        India</a></li>
                                <li class="nav-item"><a href="https://www.getmyuniversity.com/dm-colleges">DM in
                                        India</a></li>
                                <li class="nav-item"><a href="https://www.getmyuniversity.com/mch-colleges">MCH in
                                        India</a></li>
                                <li class="nav-item"><a href="https://www.getmyuniversity.com/dip-colleges">DIP in
                                        India</a></li>
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
                                <li><a href="https://www.getmyuniversity.com/about-us">About Us</a></li>
                                <li><a href="https://www.getmyuniversity.com/blog">Blog</a></li>
                                <li><a href="https://www.getmyuniversity.com/contact-us">Contact Us</a></li>
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
                                <div class="imgBox"><img src="https://www.getmyuniversity.com/images/main-hero2.png"
                                        alt="Abroad Journey" width="745" height="636" /></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://www.getmyuniversity.com/js/jquery-3.4.1.min.js"></script>
    <script src="https://www.getmyuniversity.com/js/bootstrap.min.js"></script>
    <script src="https://www.getmyuniversity.com/js/owl.carousel.min.js"></script>

    <script src="https://www.getmyuniversity.com/js/script.js"></script>

    <script>
        $(document).ready(function () {

            $(document).on("scroll", function () {
                var pixels = $(document).scrollTop();
                var pageHeight = $(document).height() - $(window).height();
                var progress = 100 * pixels / pageHeight;

                $(".post_progress").css("width", progress + "%");
            })

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
                location.href = "https://www.getmyuniversity.com/university" + '/' + $('#show_name_student1').val();
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
                        url: "https://www.getmyuniversity.com/ajax_seach_application",
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
                            url: "https://www.getmyuniversity.com/ajax_seach_application",
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
                        url: "https://www.getmyuniversity.com/ajax_seach_application2",
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
                            url: "https://www.getmyuniversity.com/ajax_seach_application2",
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