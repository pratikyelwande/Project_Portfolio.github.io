<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

$email= $_POST['email'];
$name= $_POST['name'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    $stmt = $conn->prepare("INSERT INTO collect (name,email) VALUES (?,?)");
    $stmt->bind_param("ss", $name,$email);

    $stmt->execute();
    $stmt->close();
    $conn->close();
}

//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//$stmt = $conn->prepare("INSERT INTO collect (name, email) VALUES (?,?)");
//$stmt->bind_param("ss", $name,$email);
//$stmt->execute();
//$stmt->close();
//$conn->close();
//
?> 