<section class="ourServices section-padding">
    <div class="container">
        <div class="heading text-center">
            <span class="subTitle">Our Services</span>
            <h2>Get My University Services</h2>
        </div>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "collegs");

        $query = "SELECT * FROM `services`";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) { ?>
            <div class="row listBox">
                <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>



                    <div class="col-6 col-md-4 col-lg-2 p">
                        <div class="box">
                            <div class="icon">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['service_img']); ?>" width="100"
                                    height="65" alt="" />

                            </div>
                            <div class="textBox">
                                <h3>
                                    <?php echo $row['service_name'] ?>
                                </h3>
                                <p>
                                    <?php echo $row['service_dis'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
        }

        ?>

        </div>
    </div>
</section