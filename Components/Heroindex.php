<?php

$conn = mysqli_connect("localhost", "root", "", "collegs");

$query = "SELECT * FROM `hero_section` WHERE `id`=1";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) { ?>

        <section class="homeBanner light-bg1" style="background-color:<?php echo $row['bgcolor'] ?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="contentArea col-lg-7 py-4">
                        <h1>
                            <?php echo $row['heading1'] ?><span>
                                <?php echo $row['heading2'] ?>
                            </span>
                            <?php echo $row['heading3'] ?>
                        </h1>
                        <p>
                            <?php echo $row['discription'] ?>
                        </p>
                        <ul class="searchTab nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#searchUnivercity">Search by
                                    University</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#searchCources">Search by
                                    State/City</a></li>
                        </ul>
                        <div class="searchBar tab-content">
                            <div id="searchUnivercity" class="tab-pane show active">
                                <form class="searchForm clearfix" role="form">
                                    <input class="form-control" placeholder="Search University" id="searchNames"
                                        autocomplete="off" />
                                    <input type="hidden" id="show_name_student" value="" />
                                    <a class="btn searchBtn" href="public/full_college_detail.php" id="univercity"><i
                                            class="fa fa-search"></i></a>

                                    <span class="error_message" id="searchNames_error" style="display:none; color:red;"> Search
                                        User name</span>
                                    <ul class="search_result" id='search_datas'>

                                    </ul>
                                </form>
                            </div>
                            <div id="searchCources" class="tab-pane fade">

                                <form class="searchForm clearfix" role="form">
                                    <input class="form-control" placeholder="Search State/City" id="searchStateCity"
                                        autocomplete="off" />
                                    <input type="hidden" id="show_name_student4" value="" />
                                    <span class="error_message" id="searchNames_error4" style="display:none; color:red;"> Search
                                        User name</span>
                                    <ul class="search_result" id="search_state_city_result">

                                    </ul>
                                    <input class="form-control" placeholder="Search Courses" id="searchCourse"
                                        autocomplete="off" />
                                    <input type="hidden" id="show_name_student2" value="" />
                                    <span class="error_message" id="searchNames_error2" style="display:none; color:red;"> Search
                                        User name</span>
                                    <ul class="search_result" id="search_course_result">

                                    </ul>
                                    <button class="btn searchBtn" type="button" id="univercity2"><i
                                            class="fa fa-search"></i></button>

                                </form>
                            </div>
                        </div>
                        <div class="info">200+ Colleges, 400+ Courses, 1000+ Reviews </div>
                    </div>
                    <div class="col-lg-5 text-center">
                        <div class="imgBox d-none d-lg-block"><img
                                src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" alt="Abroad Journey"
                                width="745" height="636" /></div>
                    </div>
                </div>
            </div>
        </section>

        <?php

    }
}
?>