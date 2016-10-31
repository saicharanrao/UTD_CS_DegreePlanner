<?php

$errortext="Sorry maintanence time";
$con=mysqli_connect('localhost','root','') or die(mysqli_error($errortext));
mysqli_select_db($con,'charan')or die(mysqli_error($errortext));
?>