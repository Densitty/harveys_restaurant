<?php
require_once "connection.php";

$query = 'SELECT meal_image, meal_name, meal_type FROM meals';
$images = mysqli_query($conn, $query);