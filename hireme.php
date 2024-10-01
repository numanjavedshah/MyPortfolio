<?php
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$project = $_POST['project'];

// SQL query to insert data
$sql = "INSERT INTO form (name, email, phone, project) VALUES ('$name', '$email', '$phone', '$project')";


if ($conn->query($sql) === TRUE) {
    echo "Message sent succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
