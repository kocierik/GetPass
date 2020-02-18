<?php
include_once "config.php";
$conn = new mysqli($nameserver, $user, $password, $dbname)
    or die("Connect failed: %s\n" . $conn->error);
mysqli_set_charset($conn, 'utf8mb4');

session_start();
include_once "/home/erik/projects/GetPass/php/login.php";
$_SESSION['user'] = $user_id;


$query = "SELECT email FROM users WHERE email='$user_id'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
