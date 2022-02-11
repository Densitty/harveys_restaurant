<?php
include_once 'connection.php';
$query = "SELECT * FROM meals ";
$result = mysqli_query($conn, $query);