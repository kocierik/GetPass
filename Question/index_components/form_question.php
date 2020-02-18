<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once './config.php';

?>
<!DOCTYPE html>
<html lang="en">


<body>
    <form action="php/Add_db_comment.php" method="POST" class="form">
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
            <textarea name="question" rows="4" maxlength="185" placeholder="Inserisci qui il tuo testo"></textarea>
        </div>
        <input type="submit" class="button-send" value="send" />

    </form>
    <div class="container-AllQuestion">
        <?php
        include_once './php/Add_text.php';
        ?>
    </div>
</body>

</html>