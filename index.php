<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overseas Education Consultants in India, Study Abroad Consultant</title>
    <meta name="title" content="Overseas Education Consultants in India, Study Abroad Consultant">
    <meta name="keyword" content="overseas education consultants">
    <meta name="description"
        content="Planning to Study Abroad 2022-23? Best Overseas Education Consultants in India, we guide students to study in the UK, Australia, Canada, USA & New Zealand.">
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
    <link rel="canonical" href="index.html">
    <link rel="preload" href="css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="css/font-awesome.min.css">
    </noscript>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" media="all">

    <!--Favicon-->

    <link rel="apple-touch-icon" sizes="180x180" href="public/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="public/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="public/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8NBEX89NHQ"></script>
    <!-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8NBEX89NHQ');
</script> -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>

    <?php
    include './Components/navbar.php';
    include './Components/Heroindex.php';
    include './Components/AdmissionCounselling.php';
    include './Components/RecommendedColleges.php';
    include './Components/MBBSAbroad.php';
    include './Components/RightStudent.php';
    include './Components/AboutSection.php';
    include './Components/OurServices.php';
    include './Components/aboutPic.php';
    include './Components/testimonial.php';
    include './Components/Blog.php';
    include './Components/FormSupport.php';
    include './Components/OurProgress.php';
    include './Components/Footer.php';
    ?>
    <!-- <script src="js/jquery-3.4.1.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#search_datas").hide();
            $(window).on("click", () => {
                $("#search_datas").hide();
                $("#search_state_city_result").hide();
                $("#search_course_result").hide();
            });



            $("#searchNames").on("keyup", () => {
                let inputData = $("#searchNames").val();
                $("#search_datas").show();
                $.ajax({
                    url: "searchUni.php",
                    type: "POST",
                    data: {
                        inputdata: inputData,
                    },
                    success: function (data) {
                        $("#search_datas").html(data);
                    }
                })
            });


            $(document).on("click", "#uni_name", function () {
                let uni_name = $(this).data("uni_name");
                uni_name = $.trim(uni_name);
                $("#searchNames").val(uni_name);
                $("#search_datas").hide();

            });


            $("#univercity").on("click", () => {

                let inputData = $("#searchNames").val();

                if(inputData.length==0){
                    alert("please enter the university name");
                    return false;
                }
                window.location.href = "http://localhost/collegs/full_college_detail.php?college_name=" + inputData;
                $(".clearfix").trigger("reset");

            });

            $("#univercitystate").on("click", () => {
                let state = $("#searchStateCity").val();
                let course = $("#searchCourse").val();

                if(state.length==0 ||course.length==0){
                    alert("please enter the state and course");
                    return false;
                }

               window.location.href="http://localhost/collegs/universitybystateandcourse.php?courseName="+course+"&stateName="+state;

                $(".clearfix").trigger("reset");
            });


            $("#search_state_city_result").hide();
            $("#searchStateCity").on("keyup", () => {
                let inputData = $("#searchStateCity").val();
                $("#search_state_city_result").show();
                $.ajax({
                    url: "searchCity.php",
                    type: "POST",
                    data: {
                        inputText: inputData
                    },
                    success: function (data) {
                        $("#search_state_city_result").html(data)
                    }
                });
            });



            $(document).on("click", "#state", function () {
                let state_name = $(this).data("state");
                state_name = $.trim(state_name);
                $("#searchStateCity").val(state_name);
                $("#search_state_city_result").hide();

            });



            $("#search_course_result").hide();
            $("#searchCourse").on("keyup", () => {
                let inputData = $("#searchCourse").val();
                $("#search_course_result").show();
                $.ajax({
                    url: "searchCourse.php",
                    type: "POST",
                    data: {
                        inputText: inputData
                    },
                    success: function (data) {
                        $("#search_course_result").html(data)
                    }
                });
            });



            $(document).on("click", "#course", function () {
                let course_name = $(this).data("course");
                course_name = $.trim(course_name);
                $("#searchCourse").val(course_name);
                $("#search_course_result").show();
            });


            $('.reviewSlider').owlCarousel({
                loop: false,
                margin: 15,
                items: 3,
                nav: true,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                dots: true,
                autoplay: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    768: {
                        items: 2,
                        nav: false,
                    },
                    1000: {
                        items: 3,
                        nav: true,
                    }
                }
            });




            $(".rvBox").slice(0, 4).show();
            $("#moreVideo").click(function (e) {
                e.preventDefault();
                $(".rvBox:hidden").slice(0, 4).fadeIn("slow");

                if ($(".rvBox:hidden").length == 0) {
                    $("#moreVideo").fadeOut("slow");
                }
            });
        });


    </script>
</body>

</html>