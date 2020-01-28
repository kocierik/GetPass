<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "./config.php";

$conn = new mysqli($nameserver, $user, $password, $dbname)
    or die("Connect failed: %s\n" . $conn->error);
header('Content-type: text/html; charset=utf-8');
$conn->query('SET NAMES utf8');

session_start();

if (!isset($_SESSION['Id'])) {
    header("location: http://localhost/GetPass/question.php?Id=" . $_SESSION['Id'] . "&username=" . $_SESSION['username']);
} else {
    header("http://localhost/GetPass/index.php");
}
if ($_SESSION['Id'] == $_GET['Id'] && $_SESSION['username'] == $_GET['username']) {
    # code...
} else {
    header("location: http://localhost/GetPass/question.php?Id=" . $_SESSION['Id'] . "&username=" . $_SESSION['username']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Question💭</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="css/question.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>
    <div class="page">
        <div class="header">
            <div class="title--">
                <h4 class="text-shadow">
                    <em>Question💭</em>
                </h4>
            </div>
            <form method="POST" action="./php/logout.php">
                <input type="submit" class="button-out" value=" Log Out" />
            </form>
        </div>
        <div class="container">
            <div class="content">
                <?php require_once "./index_components/form_question.php" ?>
            </div>
        </div>
        <div class="footer">
            <div class="footer__line">
                <div class="footer__image">
                </div>
            </div>
        </div>
</body>

</html>