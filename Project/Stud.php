<?php
session_start();

$a =$_COOKIE["user"];
echo " Signing you in as $a .....";

$b=$_COOKIE["user1"];
echo "<br>Last logged in at $b";
header( "Refresh:2; url=StudentLogin.php", true, 303);
exit();
?>