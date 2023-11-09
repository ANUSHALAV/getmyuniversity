<section class="aboutUs section-padding">
    <div class="container">

        <?php

        $conn = mysqli_connect("localhost", "root", "", "collegs");

        $query = "SELECT * FROM `about`";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>

                <div class="row align-items-center">
                    <div class="col-lg-5 pl-5 pl-lg-2 pt-5">
                        <div class="imgBox">
                            <img class="img-fluid"
                                src="data:image/jpeg;base64,<?php echo base64_encode($row['about_section_image']); ?>"
                                alt="about" width="488" height="530" />
                            <button data-video="https://www.youtube.com/embed/rqmCJDjpM3U" class="videoBtn videoPlayBtn"><i
                                    class="fa fa-play-circle"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-7 pl-lg-5 mt-5 mt-md-5 mt-lg-0">
                        <div class="textBox">
                            <div class="heading mb-4">
                                <span class="subTitle">About Us</span>
                                <h2>About
                                    <?php echo $row['company_name'] ?>
                                </h2>
                            </div>
                            <div class="text">
                                <p>
                                    <?php echo $row['about_the_company'] ?>.
                                </p>
                                <ul class="list-item list-unstyled">
                                    <li>
                                        <?php echo $row['key_point1'] ?>
                                    </li>
                                    <li>
                                        <?php echo $row['key_point2'] ?>
                                    </li>
                                    <li>
                                        <?php echo $row['key_point3'] ?>
                                    </li>
                                    <li>
                                        <?php echo $row['key_point4'] ?>
                                    </li>
                                    <li>
                                        <?php echo $row['key_point5'] ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="btnBox mt-5">
                                <a href="about-us.php" class="btn theme-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } ?>
    </div>
</section>