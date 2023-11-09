<section class="recommend_collage section-padding">
    <div class="container">
        <div class="heading text-center">
            <h2>Top Recommended Colleges</h2>
        </div>

        <div class="tup_menu nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active" data-toggle="tab" data-target="#tpUtabs1" role="tab">MBBS Karnataka</a>
            <a class="nav-link" data-toggle="tab" data-target="#tpUtabs2" role="tab">MBBS Kerala</a>
            <a class="nav-link" data-toggle="tab" data-target="#tpUtabs3" role="tab">MBBS Uttar Pradesh</a>
            <a class="nav-link" data-toggle="tab" data-target="#tpUtabs4" role="tab">MBBS Rajasthan</a>
            <a class="nav-link" data-toggle="tab" data-target="#tpUtabs5" role="tab">MBBS West Bengal</a>
        </div>

        <div class="tab-content">

            <div class="column tab-pane fade show active" id="tpUtabs1">
                <div class="viewAll_btn text-right pb-1"><a href="public/medical-college-detail.php?state=karnataka" class="btn readMore">View All</a></div>


                <div class="collageList row">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "collegs");
                    $query = "SELECT * FROM `medical_in_india` WHERE `state`='karnataka' LIMIT 4";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="col-xl-3 col-sm-6">
                                <div class="itemBox">
                                    <div class="imgBox">
                                        <img
                                            src="data:image/jpeg;base64,<?php echo base64_encode($row['college_logo']); ?>"></a>
                                        <div class="universityName">
                                            <?php echo $row['college_name'] ?>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <?php echo $row['courses'] ?>
                                        </h3>
                                        <div class="meta">
                                            <div class="label country"><i class="fa fa-map-marker mr-2"></i>
                                                <?php echo $row['state'] ?>
                                            </div>
                                            <div class="label duration text-right"><i class="fa fa-clock-o mr-2"></i>
                                                <?php echo $row['ownership'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btnBox">
                                        <a href="public/full_college_detail.php?college_name=<?php echo $row['college_name'] ?>"
                                            class="btn theme-btn btn2"></i>View Details</a>
                                        <a href="#showform" class="btn theme-btn">Enquire Now</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                    } ?>



                </div>
            </div>
            <div class="column tab-pane fade" id="tpUtabs2">
                <div class="viewAll_btn text-right pb-1"><a href="public/medical-college-detail.php?state=kerala" class="btn readMore">View All</a></div>
                <div class="collageList row">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "collegs");
                    $query = "SELECT * FROM `medical_in_india` WHERE `state`='kerala' LIMIT 4";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="col-xl-3 col-sm-6">
                                <div class="itemBox">
                                    <div class="imgBox">
                                        <img
                                            src="data:image/jpeg;base64,<?php echo base64_encode($row['college_logo']); ?>"></a>
                                        <div class="universityName">
                                            <?php echo $row['college_name'] ?>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <?php echo $row['courses'] ?>
                                        </h3>
                                        <div class="meta">
                                            <div class="label country"><i class="fa fa-map-marker mr-2"></i>
                                                <?php echo $row['state'] ?>
                                            </div>
                                            <div class="label duration text-right"><i class="fa fa-clock-o mr-2"></i>
                                                <?php echo $row['ownership'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btnBox">
                                        <a href="public/full_college_detail.php?college_name=<?php echo $row['college_name'] ?>"
                                            class="btn theme-btn btn2"></i>View Details</a>
                                        <a href="#showform" class="btn theme-btn">Enquire Now</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                    } ?>



                </div>
            </div>
            <div class="column tab-pane fade" id="tpUtabs3">
                <div class="viewAll_btn text-right pb-1"><a href="public/medical-college-detail.php?state=Uttar pradesh" class="btn readMore">View All</a></div>
                <div class="collageList row">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "collegs");
                    $query = "SELECT * FROM `medical_in_india` WHERE `state`='uttar pradesh' LIMIT 4";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="col-xl-3 col-sm-6">
                                <div class="itemBox">
                                    <div class="imgBox">
                                        <img
                                            src="data:image/jpeg;base64,<?php echo base64_encode($row['college_logo']); ?>"></a>
                                        <div class="universityName">
                                            <?php echo $row['college_name'] ?>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <?php echo $row['courses'] ?>
                                        </h3>
                                        <div class="meta">
                                            <div class="label country"><i class="fa fa-map-marker mr-2"></i>
                                                <?php echo $row['state'] ?>
                                            </div>
                                            <div class="label duration text-right"><i class="fa fa-clock-o mr-2"></i>
                                                <?php echo $row['ownership'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btnBox">
                                        <a href="public/full_college_detail.php?college_name=<?php echo $row['college_name'] ?>"
                                            class="btn theme-btn btn2"></i>View Details</a>
                                        <a href="#showform" class="btn theme-btn">Enquire Now</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                    } ?>



                </div>
            </div>
            <div class="column tab-pane fade" id="tpUtabs4">
                <div class="viewAll_btn text-right pb-1"><a href="public/medical-college-detail.php?state=rajasthan" class="btn readMore">View All</a></div>
                <div class="collageList row">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "collegs");
                    $query = "SELECT * FROM `medical_in_india` WHERE `state`='rajasthan' LIMIT 4";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="col-xl-3 col-sm-6">
                                <div class="itemBox">
                                    <div class="imgBox">
                                        <img
                                            src="data:image/jpeg;base64,<?php echo base64_encode($row['college_logo']); ?>"></a>
                                        <div class="universityName">
                                            <?php echo $row['college_name'] ?>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <?php echo $row['courses'] ?>
                                        </h3>
                                        <div class="meta">
                                            <div class="label country"><i class="fa fa-map-marker mr-2"></i>
                                                <?php echo $row['state'] ?>
                                            </div>
                                            <div class="label duration text-right"><i class="fa fa-clock-o mr-2"></i>
                                                <?php echo $row['ownership'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btnBox">
                                        <a href="public/full_college_detail.php?college_name=<?php echo $row['college_name'] ?>"
                                            class="btn theme-btn btn2"></i>View Details</a>
                                        <a href="#showform" class="btn theme-btn">Enquire Now</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                    } ?>



                </div>
            </div>
            <div class="column tab-pane fade" id="tpUtabs5">
                <div class="viewAll_btn text-right pb-1"><a href="public/medical-college-detail.php?state=west bengal" class="btn readMore">View All</a></div>
                <div class="collageList row">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "collegs");
                    $query = "SELECT * FROM `medical_in_india` WHERE `state`='west bengal' LIMIT 4";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="col-xl-3 col-sm-6">
                                <div class="itemBox">
                                    <div class="imgBox">
                                        <img
                                            src="data:image/jpeg;base64,<?php echo base64_encode($row['college_logo']); ?>"></a>
                                        <div class="universityName">
                                            <?php echo $row['college_name'] ?>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <?php echo $row['courses'] ?>
                                        </h3>
                                        <div class="meta">
                                            <div class="label country"><i class="fa fa-map-marker mr-2"></i>
                                                <?php echo $row['state'] ?>
                                            </div>
                                            <div class="label duration text-right"><i class="fa fa-clock-o mr-2"></i>
                                                <?php echo $row['ownership'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btnBox">
                                        <a href="public/full_college_detail.php?college_name=<?php echo $row['college_name'] ?>"
                                            class="btn theme-btn btn2"></i>View Details</a>
                                        <a href="#showform" class="btn theme-btn">Enquire Now</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                    } ?>



                </div>
            </div>
        </div>
    </div>
</section>