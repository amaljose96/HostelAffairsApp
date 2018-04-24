<?php 

$servername = ""; //server name
$username = ""; // user name
$password = ""; // password

$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST["username"];
$rollno = $_POST["rollno"];
$nitc_email = $_POST["nitc_email"];
$password = $_POST["password"];
$contact_no = $_POST["contact_no"];

$sql = "INSERT INTO Signuptable (username, rollno, nitc_email, password, contact_no)
VALUES ($name,$rollno,$nitc_email,$password,$contact_no)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";  //redirection to other page
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


