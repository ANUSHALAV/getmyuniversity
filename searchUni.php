<?php


$conn = mysqli_connect("localhost", "root", "", "collegs");


$inputText = $_POST['inputdata'];

$query = "SELECT  `id`,`university_name` FROM `universites` WHERE `university_name` LIKE '%$inputText%'";


$result = mysqli_query($conn, $query);
$output = '';
if (mysqli_num_rows($result) > 0) {
    $output .= '';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
        <li id="uni_name" data-uni_name="' . $row["university_name"] . '">' . $row['university_name'] . '</li>
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