<?php
require_once "./connections/connection.php";
$sql = "SELECT * from meals";

$response = array();
$meals = array();
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $meal_name = $row['meal_name'];
    $meal_image = $row['meal_image'];

    $meals[] = array('name' => $meal_name, 'image' => $meal_image);
}

$response['meals'] = $meals;

$fp = fopen('./assets/meals.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);