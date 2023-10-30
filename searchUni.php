<?php


$conn = mysqli_connect("localhost", "root", "", "collegs");


$inputText = $_POST['inputdata'];

$query = "SELECT  `id`,`college_name` FROM `medical_in_india` WHERE `college_name` LIKE '%$inputText%'";


$result = mysqli_query($conn, $query);
$output = '';
if (mysqli_num_rows($result) > 0) {
    $output .= '';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
        <li id="uni_name" data-uni_name="' . $row["college_name"] . '">' . $row['college_name'] . '</li>
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