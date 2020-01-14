<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "../config.php";
$conn = new mysqli($nameserver, $user, $password, $dbname)
  or die("Connect failed: %s\n" . $conn->error);
mysqli_set_charset($conn, 'utf8mb4');  // procedural style

$name_nome = mysqli_real_escape_string($conn, $_REQUEST['name_nome']);
$name_email = mysqli_real_escape_string($conn, $_REQUEST['name_email']);
$name_password = mysqli_real_escape_string($conn, $_REQUEST['name_password']);

$sql_e = "SELECT * FROM users WHERE email='$name_email' or username='$name_nome'";
$res_e = mysqli_query($conn, $sql_e);
if (mysqli_num_rows($res_e) > 0) {
  EchoMessage("Email or username already taken...", "http://localhost/GetPass/index.php");
} else {
  echo "Records added successfully.";
  $sql = "INSERT INTO users (username,email,password)
    VALUES ('$name_nome','$name_email','$name_password')";
}
if (mysqli_query($conn, $sql)) {

  header("location: http://localhost/GetPass/profile.php");
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  EchoMessage($sql, "http://localhost/GetPass/register.php");
}

mysqli_close($conn);
