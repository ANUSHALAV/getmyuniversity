<?php

$conn = mysqli_connect("localhost", "root", "", "collegs");
$inputText = $_POST['inputText'];
$query = "SELECT distinct(`courses`) FROM `medical_in_india` WHERE `courses` LIKE '%$inputText%'";

$result = mysqli_query($conn, $query);
$output = '';
if (mysqli_num_rows($result) > 0) {
    $output .= '';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
        <li id="course" data-course="' . $row["courses"] . '">' . $row['courses'] . '</li>
        ';
    }
} else {
    $output .= '
    <li>data not found</li>
    ';
}
$output .= '</ul>';

echo $output;


?>