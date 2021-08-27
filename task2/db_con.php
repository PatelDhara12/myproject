<?php 

$server = "localhost";
$user = "admin";
$pass = "Admin@123";
$database = "db";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
?>