<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "/home/erik/projects/GetPass/config.php";
$conn = new mysqli($nameserver, $user, $password, $dbname)
    or die("Connect failed: %s\n" . $conn->error);
mysqli_set_charset($conn, 'utf8mb4');
$idd = $_GET['Id'];
$name_username = $_GET['username'];

$sql_request = "SELECT IdUser, text, date FROM Comments WHERE IdUser = '$idd'";
$sql_query1 = mysqli_query($conn, $sql_request);

while ($row = mysqli_fetch_assoc($sql_query1)) {
    $query = "SELECT text, date FROM Comments WHERE IdUser = " . $row['IdUser'];
    $sql_query2 = mysqli_query($conn, $query);
    echo  '<div class="container-question">
            <div class="container-data"> <span><em>DATA: ' . $row['date'] . '</em></div></span>
            <div class="container-text"><p> ' . $row['text'] . "</p></div>
        </div>";
}
