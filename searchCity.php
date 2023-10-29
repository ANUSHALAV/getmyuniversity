<?php

$conn = mysqli_connect("localhost", "root", "", "collegs");
$inputText = $_POST['inputText'];
$query = "SELECT `id`,`state` FROM `universites` WHERE `state` LIKE '%$inputText%'";

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
    <li>data not found</li>
    ';
}
$output .= '</ul>';

echo $output;


?>