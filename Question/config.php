<?php
$nameserver = "localhost";
$password = "";
$user = "kocierik";
$dbname = "question";
$conn = new mysqli($nameserver, $user, $password, $dbname)
	or die("Connect failed: %s\n" . $conn->error);
header('Content-type: text/html; charset=utf-8');
$conn->query('SET NAMES utf8');
function EchoMessage($msg, $redirect)
{
	echo '<script type="text/javascript">
			alert("' . $msg . '")
			window.location.href = "' . $redirect . '"
			</script>';
}
