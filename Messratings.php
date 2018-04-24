<?php 

$servername = ""; //server name
$username = ""; // user name
$password = ""; // password


$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$mess_name = $_POST["mess_name"];
$food_rating = $_POST["food_rating"];
$staff_rating = $_POST["staff_rating"];
$extras_rating = $_POST["extras_rating"];
$rcmd_mess = $_POST["rcmd_mess"];

$sql = "INSERT INTO Messratings (mess_name, food_rating, staff_rating, extras_rating, rcmd_mess)
VALUES ($mess_name,$food_rating,$staff_rating,$extras_rating,$rcmd_mess)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";  //redirection to other page
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

