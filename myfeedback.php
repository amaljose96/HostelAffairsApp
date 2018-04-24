<?php
session_start();
require('connect.php');

$mess = $_POST["mess"];
$food = $_POST["food"];
$staff = $_POST["staff"];
$extra = $_POST["extras"];
$recommend = $_POST["recom"];
$roll= $_SESSION["roll"];
$time=time();
if($recommend=="Kerala"){
  $recom="KL";
}
if($recommend=="Andhra Pradesh"){
  $recom="AP";
}
if($recommend=="North India"){
  $recom="NI";
}
if($recommend=="Others"){
  $recom="OT";
}
execute_MYSQL("INSERT INTO MESS_REVIEW VALUES('$roll','$mess',$food,$staff,$extra,'$recom','$time')");
echo "INSERT INTO MESS_REVIEW VALUES('$roll','$mess',$food,$staff,$extra,'$recom','$time')";
?>
