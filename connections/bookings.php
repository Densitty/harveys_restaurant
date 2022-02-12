<?php
require_once './connection.php';

if (isset($_POST['name']) && isset($_POST['seats']) && isset($_POST['date']) && isset($_POST['meal'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $seats = mysqli_real_escape_string($conn, $_POST['seats']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $meal = mysqli_real_escape_string($conn, $_POST['meal']);

    $query = "INSERT INTO bookings (booking_name, booking_seat, booking_day, booking_meal) VALUES ('$name', '$seats', '$date', '$meal')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header('location: ../index.php?booking=Booking successful');
    } else {
        header('location: ../index.php?booking=Booking unsucessful');
    }
} else {
    header('location: ../index.php?booking=Empty form.');
}