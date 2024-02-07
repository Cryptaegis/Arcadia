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
  <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace admin.</p>

    <a href="add_user.php">Ajout Utilisateurs</a>
    <br>
    <h3>Les services</h3>
    <br>
    <a href="form_service.php">Ajout services</a>
    <br>
    <a href="modif_service.php">Modifier services</a>
    <br>
    <h3>Les Habitats</h3>
    <br>
    <a href="ajout_habitat.php">Ajouter un habitat</a><br>
    <a href="modif_habitat.php">Modifier les habitats</a><br>
    <a href="habitat.php">Page habitats</a><br>
    <h3>Compte rendu Vétérinaire</h3>
    <a href="carnet_sante.php">Carnet de santé</a><br>

    <br>
    
  <!-- Admin 1 >>login= admin mdp= 789456-->
    <a href="logout.php">Déconnexion</a>
    </ul>
    </div>
  </body>
</html>