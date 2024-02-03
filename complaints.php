<?php

$conn = mysqli_connect('localhost','root','','wetravel');

$name = $_POST["name"];
$surname = $_POST["surname"];
$age = $_POST["age"];
$email = $_POST["email"];
$complaint = $_POST["complaints"];

$sql = "INSERT INTO complaints (name,surname,age, email, complaint) VALUES ('$name','$surname','$age', '$email','$complaint')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
die();
$conn->close();

?>