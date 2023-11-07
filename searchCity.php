<?php

$conn = mysqli_connect("localhost", "root", "", "collegs");
$inputText = $_POST['inputText'];
$query = "SELECT distinct(`state`) FROM `medical_in_india` WHERE `state` LIKE '%$inputText%'";

$result = mysqli_query($conn, $query);
$output = '';
if (mysqli_num_rows($result) > 0) {
    $output .= '';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
        <li id="state" data-state="' . $row["state"] . '">' . $row['state'] . '</li>
        ';
    }
} else {
    $output .= '
    <li>Data Not Found</li>
    ';
}
$output .= '</ul>';

echo $output;


?>