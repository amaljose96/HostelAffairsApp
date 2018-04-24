<?php
session_start();
require('connect.php');

$email= $_POST["email"];
$password= $_POST["password"];

$test=execute_MYSQL("SELECT ROLL,PASSWORD FROM USERS WHERE EMAIL='$email'");

if($test->num_rows==0) {
	$data['status']='bad';
	$data['reason']='not exist';
	echo json_encode($data);
	exit();
}
$row=$test->fetch_assoc();
if ($row['PASSWORD']==$password) {
	$data['status']='good';
	$data['roll']=$row['ROLL'];
	echo json_encode($data);
	$_SESSION["roll"] = $row['ROLL'];
	exit();
}
else {
	$data['status']='bad';
	$data['reason']='wrong pass';
	echo json_encode($data);
	exit();
}


?>
