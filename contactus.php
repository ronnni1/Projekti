<?php

$conn = mysqli_connect('localhost','root','','wetravel');

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql = "INSERT INTO contactus (name, email, text) VALUES ('$name', '$email','$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
die();
$conn->close();

?>