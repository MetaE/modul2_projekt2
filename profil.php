
<?php 
  include "header.php";
  
  ?>
  
 
<h1>Min Profil</h1>
  
  
   <?php 
    if (isset($_SESSION['id'])) {
      echo $username."br";
            $name."br";
      
      } else {
      
      echo "Ups - Du er ikke logget ind!";
    }
  
  ?>
  
  
  
</body>
</html>