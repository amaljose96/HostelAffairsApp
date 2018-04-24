<?php
require 'connect.php';
$roll=$_POST['roll'];
$email=$_POST['email'];
$pass=$_POST['password'];

execute_MYSQL("INSERT INTO USERS VALUES('$roll','$email','$pass');");


 ?>
