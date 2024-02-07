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
  <link rel="stylesheet" href="../css/styles.css" />
  </head>
  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace Régulateur.</p>
    <a href="logout.php">Déconnexion</a>
    </ul>
    </div>
    <a href="ac-regul.php">HOME</a>
    <a href="carnet_sante.php">Carnet de santé</a>
    <a href="alimentation.php">Add Alimentation</a>
    <a href="comment.php">Add Comment</a>
    <a href="avis.php">Avis</a>
    <a href="check_comment.php">Check Comment</a>

    <button onclick="history.back()">Go Back</button>

  </body>
</html>