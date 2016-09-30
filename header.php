<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  
  
 <header>
  <nav>
  
   <ul>
     <li><a href="index.php">Forside</a></li>
     <li><a href="opret.php">Opret Profil</a></li>
     <li><a href="aboutus.php">Om Os</a></li>
     <li><a href="profil.php">Min Profil</a></li>
     <?php  
          if (isset($_SESSION['id'])) {
             echo "<form action='includes/logout.inc.php'>
                <button>Log out</button>
             </form>";
               
          } else {
         
            echo "<form action='includes/login.inc.php' method='post'>
                    <input type='text' name='username' placeholder='Brugernavn'>
                    <input type='text' name='password' placeholder='Password'>
                      <button type='submit'>Log in </button>
                  </form>"; 
                    } ?> 
  </ul>

</nav> 
   </header> 