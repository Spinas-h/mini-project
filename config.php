<?php
$conn = mysqli_connect("localhost", "root", "", "dawn");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>