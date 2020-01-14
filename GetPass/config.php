<?php
$nameserver = "localhost";
$password = "samsung1";
$user = "kocierik";
$dbname = "question";
function EchoMessage($msg, $redirect)
{
    echo '<script type="text/javascript">
			alert("' . $msg . '")
			window.location.href = "' . $redirect . '"
			</script>';
}
