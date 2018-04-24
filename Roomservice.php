<?php 
session_start();
$servername = ""; //server name
$username = ""; // user name
$password = ""; // password


$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$hostel_name = $_POST["hostel_name"];
$room_no = $_POST["room_no"];
$description = $_POST["description"];
$roll_no = $_SESSION["user_id"];

$sql = "INSERT INTO Room_Service (rollno,hostel_name,room_no,description)
VALUES ($roll_no,$hostel_name,$room_no,$description)";

if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";  //redirection to other page
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


