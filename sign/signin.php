<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['your_name']; 
    $password = $_POST['your_pass'];

    $host = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "my_db";

    $conn = new mysqli($host, $dbUser, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    $sql = "SELECT * FROM users WHERE email = '$email'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($password === $user['password']) {
            session_start();
            $_SESSION['user_id'] = $user['uid'];
            echo "here yes you r here";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email address.";
    }


    $conn->close();
}
?>
