<?php 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$message = $_POST['message'];

$conn - new mysqli('localhost', 'root', '', 'blog_website');
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("Insert init comments(firstname, lastname,email, gender, message) values(?,?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname, $lastname, $email, $gender, $message);
    $stmt->execute();
    echo "Message Sent....";
    $stmt->close();
    $stmt->close();
}









?>