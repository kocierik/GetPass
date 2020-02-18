<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "./config.php";
session_start();
if (isset($_SESSION['Id'])) {
    header("location: http://localhost/GetPass/question.php?Id=" . $_SESSION["Id"] . "&username=" . $_SESSION["username"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta cinclude('./php/session.php');ta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Question💭</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="css/styleIndex.css">
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
            <?php require_once "index_components/form_register.php"; ?>
        </div>
    </div>
    <?php require_once "index_components/form_login.php"; ?>
    </div>
    </div>
    <div class="container">

        <div class="content">
            <p class="content__text">
                Register or log in to send your questions💭
            </p>
            <div class="images">
                <img src="img_avatar.png" alt="Avatar" style="width:100px; padding:8px;">
                <img src="arrow.png" alt="arrow" style="width:100px; padding:8px;">
                <img src="img_avatar.png" alt="Avatar" style="width:100px; padding:8px;">
            </div>


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