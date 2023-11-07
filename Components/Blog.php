<section class="blog section-padding">
    <div class="container">
        <div class="heading text-center">
            <span class="subTitle">Our Post</span>
            <h2>Our Recent Post</h2>
        </div>
        <div class="blogSlider row">

            <?php
            $conn = mysqli_connect("localhost", "root", "", "collegs");
            $query = "SELECT * FROM `blogs` LIMIT 4";

            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>


                    <div class="item col-lg-4 col-md-6">
                        <div class="blogItem">
                            <div class="category"><span class="badge">M</span> MBBS IN INDIA</div>
                            <a class="imgBox" href="blog/direct-admission-in-scmhrd-for-mba.html" aria-label="UK Immigration">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['blog_front_image']); ?>" width="300" height="300"
                                    alt="direct admission in SCMHRD for MBA">
                            </a>
                            <div class="text">
                                <h3><a href=""><?php echo $row['blog_heading'] ?></a></h3>
                                <div class="meta">
                                    <span class="date"><?php echo $row['blog_date'] ?></span>
                                    <span class="views">1116 views</span>
                                </div>
                                <p><?php echo $row['discription'] ?></p>
                                <div class="btnBox mt-4">
                                    <a class="btn readMore" href="Components/blog_in_detail.php?id=<?php echo $row['id'] ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php }
            } ?>
        </div>
        <!-- <div class="btnBox text-center mt-4">
            <a class="btn theme-btn" href="blog.html">View all Post</a>
        </div> -->
    </div>
</section>