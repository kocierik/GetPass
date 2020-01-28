<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function destroy()
{
    session_start();
    session_destroy();
    header("location: http://localhost/GetPass/index.php");
}
destroy();
