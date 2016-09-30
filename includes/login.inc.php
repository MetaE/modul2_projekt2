<?php 

  session_start();
  include '../dbh.php';

$username = $_POST['username'];
$password = $_POST['password'];



$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connection, $sql);



if (!$row = mysqli_fetch_assoc($result)) {
  echo "Your username or password is incorrect!";
    
  } else {
  
   $_SESSION['id'] = $row['id'];
  
}

header("Location: ../index.php");
  
  ?>