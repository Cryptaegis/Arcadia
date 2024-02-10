<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('connexion.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur 
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 
  // récupérer l'email 
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe 
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  
  $query = "INSERT into `users` (username, email, type, password)
        VALUES ('$username', '$email', 'user', '".hash('sha256', $password)."')";
  $res = mysqli_query($conn, $query);

    if($res){
      include("sendmail.php");
      
      echo "
      <div class='sucess'>
      <p class='success'>Inscription réussie ! Vous allez
      recevoir un mail de bienvenue.</p>
      <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
      </div>";
    }else{
      echo "<p class='error'>Une erreur s'est produite lors de votre inscription.</p>";
    }

  }
?>
<form class="box" action="" method="post">
  <h1 class="box-logo box-title">
    <a href="https://waytolearnx.com/">WayToLearnX.com</a>
  </h1>
    <h1 class="box-title">S'inscrire</h1>
  <input type="text" class="box-input" name="username" 
  placeholder="Nom d'utilisateur" required />
  <br>
  <label>Email:</label><br>
    <input type="email" class="box-input" name="email" 
  placeholder="Email" required />
  <br>
  <label for="p">Password:</label><br>
    <input type="password" class="box-input" name="password" 
  placeholder="Mot de passe" required />
  <br>
    <input type="submit" name="submit" 
  value="S'inscrire" class="box-button" />
  
    <p class="box-register">Déjà inscrit? 
  <a href="login.php">Connectez-vous ici</a></p>
</form>
</body>
</html>