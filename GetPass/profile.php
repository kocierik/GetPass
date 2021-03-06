<?php
//ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "./config.php";

$conn = new mysqli($nameserver, $user, $password, $dbname)
    or die("Connect failed: %s\n" . $conn->error);
header('Content-type: text/html; charset=utf-8');
$conn->query('SET NAMES utf8');
include('./php/session.php');
if (isset($_SESSION['login_user'])) {
    header("Location: profile.php");
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
    <link rel="stylesheet" href="css/profile.css">
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
        </div>
        <div class="container">
            <div class="content">
                <form action="php/ask.php" method="POST" class="form">
                    <div class="input">

                        <p class="content__text">Write your Question to</p>
                        <input type="text" name="username" class="input-username" placeholder="username" required />
                    </div>
                    <div class="images">
                        <img src="img_avatar.png" alt="Avatar" style="width:100px; padding:8px;">
                        <img src="arrow.png" alt="arrow" style="width:100px; padding:8px;">
                        <img src="img_avatar.png" alt="Avatar" style="width:100px; padding:8px;">
                    </div>
                    <div class="question">
                        <textarea name="question" rows="4" placeholder="Inserisci qui il tuo testo"></textarea>
                    </div>
                    <input type="submit" class="button-send" />
                </form>
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