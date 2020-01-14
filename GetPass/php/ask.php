<?php
include_once "../config.php";
$conn = new mysqli($nameserver, $user, $password, $dbname)
    or die("Connect failed: %s\n" . $conn->error);
mysqli_set_charset($conn, 'utf8mb4');
$name_username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$name_question = mysqli_real_escape_string($conn, $_REQUEST['question']);
htmlspecialchars_decode($name_username);
htmlspecialchars_decode($name_question);
$sql_query1= "SELECT username FROM users WHERE username = '$name_username'";
if (mysqli_num_rows($sql_query1) > 0){
if ($name_username) {
    # code...
}