<section class="country_wraper section-padding pt-4">
    <div class="container">
        <div class="heading text-center">
            <h2>MBBS Abroad Countries</h2>
        </div>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "collegs");

        $query = "SELECT * FROM `pages` LIMIT 5";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) { ?>
            <div class="countryList d-flex justify-content-center">
                <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="item">
                        <a href="abroad/mbbs-in-russia.html">
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['Country_Img']); ?>"
                                alt="<?php echo $row['Country_name'] ?>" width="100" height="100" />
                            <h3>
                                <?php echo $row['Country_name'] ?>
                            </h3>
                        </a>
                    </div>
                    <?php
                }
        } ?>
        </div>
    </div>
</section>