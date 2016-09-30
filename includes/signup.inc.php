<?php 

  session_start();

  include '../dbh.php';

$username = $_POST['username'];
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];



$sql = "INSERT INTO users (username, name, password, email) VALUES ('$username', '$name', '$password', '$email') ";
$result = mysqli_query($connection, $sql);


  header("Location: ../index.php");
  
  
  ?>