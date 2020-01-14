<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "../config.php";

$conn = new mysqli($nameserver, $user, $password, $dbname)
  or die("Connect failed: %s\n" . $conn->error);
mysqli_set_charset($conn, 'utf8mb4');

session_start();

$name_email = mysqli_real_escape_string($conn, $_REQUEST['name_email']);
$name_password = mysqli_real_escape_string($conn, $_REQUEST['name_password']);

$sql_request1 = "SELECT * FROM users WHERE email = '$name_email'";
$sql_request2 = "SELECT * FROM users WHERE password = '$name_password'";
$sql_query1 = mysqli_query($conn, $sql_request1);
$sql_query2 = mysqli_query($conn, $sql_request2);

if (mysqli_num_rows($sql_query1) > 0 && mysqli_num_rows($sql_query2) > 0) {
  $_SESSION['login_user'] = $name_email;
  // setcookie("type", $sql_query1["user_type"], time() + 3600);
  $result = $conn->query($sql_request1);
  while ($row = $result->fetch_array()) {
    header("location: http://localhost/GetPass/profile.php?username=" . $row["username"]);
  }
} else {
  EchoMessage("Email or password are incorrect...", "http://localhost/GetPass/index.php");
  echo "Email or password are incorrect $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
