<?php
$conn = mysqli_connect('localhost','root','','safaris') or die('connection failed');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

