<?php
session_start();
require('connect.php');

$hostel_name = $_POST["hostel"];
$room_no = $_POST["room"];
$description = $_POST["complaint"];
$roll= $_SESSION["roll"];

execute_MYSQL("INSERT INTO COMPLAINTS VALUES('$roll','$hostel_name','$room_no','$description')");
?>
