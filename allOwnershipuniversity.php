<?php

$conn = mysqli_connect("localhost", "root", "", "collegs");

$courseName = $_POST['courseName'];
$ownership = $_POST['range'];


$query = "SELECT * FROM `medical_in_india` WHERE `courses` LIKE '%$courseName%' AND `ownership`='$ownership'";

$result = mysqli_query($conn, $query);
$output = '';

if (mysqli_num_rows($result) > 0) {
    $output .= ' ';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= '
        <div class="universityItem" id="universityItem">
        <div class="detailArea mb-4">
        <div class="row">
            <div class="imgBox col-auto">
                <a href="#"><img
                        src="data:image/jpeg;base64,' . base64_encode($row['college_logo']) . '"></a>
            </div>
            <div class=" detailBox col">
                <h3><a href="#">
                        ' . $row['college_name'] . '
                    </a></h3>
                <ul class="meta_info list-unstyled inline">
                    <li class="info"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        ' . $row['addres'] . ',
                        ' . $row['state'] . '
                    </li>
                    <li class="info">
                        ' . $row['ownership'] . '
                    </li>
                </ul>
                <div class="general_text">' . $row['courses'] . '</div>
                <ul class="snippet_list list-unstyled inline">
                    <li>Exams: <a class="#">NEET</a></li>
                    <li>Fees per year: <strong>
                            ' . $row['fee_per_year'] . '
                        </strong></li>
                </ul>
            </div>
            <div class="btnBox col-sm-auto mt-4 mt-sm-0">
                <a href="full_college_detail.php?college_name=' . $row['college_name'] . '"
                    class="btn theme-btn btn2"><i class="fa fa-eye" aria-hidden="true"></i>
                    Detail</a>
            </div>
        </div>
        <div class="important_links">
            <ul class="links_list list-unstyled inline">
                <li><a href="#">About</a>
                </li>
                <li><a href="#">Courses</a>
                </li>
                <li><a href="#">Cut-off</a>
                </li>
                <li><a href="#">Admissions</a>
                </li>
                <li><a href="#">QnA</a>
                </li>
            </ul>
        </div>
        </div>
        </div>
       
    ';
    }
    $output .= ' ';

} else {
    $output .= '<h2>Data Not Found</h2>';
}

echo $output;
mysqli_close($conn);


?>