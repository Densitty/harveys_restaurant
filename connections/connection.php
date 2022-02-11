<?php

$conn = mysqli_connect('localhost', 'root', '', 'harveys_kitchen');

if (!$conn) {
    die('Could not connect to the database');
}