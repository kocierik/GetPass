<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "../config.php";
$conn = new mysqli($nameserver, $user, $password, $dbname)
    or die("Connect failed: %s\n" . $conn->error);
mysqli_set_charset($conn, 'utf8mb4');


$name_username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$name_question = mysqli_real_escape_string($conn, $_REQUEST['question']);
htmlspecialchars_decode($name_username);

htmlspecialchars_decode($name_question);
function AddDbText($name_question, $conn, $id)
{
    $date = date('Y-m-d H:i:s');
    $sql_add = "INSERT INTO Comments (date, text, IdUser) VALUES ('$date','$name_question','$id')";
    $sql_query2 = mysqli_query($conn, $sql_add);
}

$sql_request = "SELECT username, Id FROM users WHERE username = '$name_username'";
$sql_query1 = mysqli_query($conn, $sql_request);
if (mysqli_num_rows($sql_query1) > 0) {
    while ($row = mysqli_fetch_assoc($sql_query1)) {
        AddDbText($name_question, $conn,  $row["Id"]);
    }


    $name_username = mysqli_real_escape_string($conn, $_REQUEST['username']);
    htmlspecialchars_decode($name_username);
    $sql_request = "SELECT username, Id FROM users WHERE username = '$name_username'";
    $sql_query1 = mysqli_query($conn, $sql_request);

    while ($row1 = mysqli_fetch_assoc($sql_query1)) {
        $query = "SELECT text FROM Comments WHERE IdUser = " . $row1['Id'];
        $sql_query2 = mysqli_query($conn, $query);

        EchoMessage("Messaggio inviato!", "http://localhost/GetPass/question.php?Id=" . $ID . '&username=' . $USERNAME);
    }
} else {
    EchoMessage("This username does not exist", "http://localhost/GetPass/question.php");
}
