<?php

$conn = mysqli_connect("localhost", "root", "", "collegs");

$query = "SELECT * FROM `service_section_image`";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) { ?>




        <section class="mbbsBuddy section-padding pt-1" style="background: url(images/email-pattern.png);">
            <div class="container">
                <div class="innerBox">
                    <div class="row align-items-center">
                        <div class="col-lg-12 px-0">
                            <div class="team_img">
                                <img class="img-fluid w-100"
                                    src="data:image/jpeg;base64,<?php echo base64_encode($row['service_section_img']); ?>"
                                    alt="about" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
    }
}
?>