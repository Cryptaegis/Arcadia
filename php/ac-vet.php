<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace Vétérinaire.</p>
    <!--add a form and send information in the page habitat.php?-->
    <a href="compte_rendu.php">Compte rendu</a>
    <button onclick="history.back()">Go Back</button>

    <a href="logout.php">Déconnexion</a>
    </ul>
    </div>
  </body>
</html>