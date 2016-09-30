
<?php 
  include "header.php";
  
  ?>
  
  
  
  
   <?php 
    if (isset($_SESSION['id'])) {
      
      
      }
?>


<h1>Opret en ny bruger her!</h1>
  
  <form action="includes/signup.inc.php" method="post">
     <input type="text" name="username" placeholder="Brugernavn"><br>
     <input type="text" name="name" placeholder="Navn"><br>
     <input type="text" name="password" placeholder="Password"><br>
     <input type="text" name="email" placeholder="Email"><br>
  
  <input id="knap" type="submit" name="opretBruger" value="Opret Bruger" onclick="validateEmail()">
</form>
  
</body>
</html>