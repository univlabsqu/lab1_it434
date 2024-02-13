<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "my_db"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO users (name, email, mobile, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $mobile, $password);

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];


$stmt->execute();

echo "New user registered successfully";

$stmt->close();
$conn->close();
?>
