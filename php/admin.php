<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrateur</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />

</head>

<body class="ac-admin titre-admin">
  <div class="sucess">

    <a href="admin.php">
      <img class="logo-arcadia background" src="../images/arcadia_logo.png" alt="Arcadia logo">
    </a>
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
  </div>
  <p>Espace admin.</p>
  <br>
  <a href="add_user.php">Ajout Utilisateurs</a>
  <hr>
  <h3>Services</h3>
  <ul class="nav nav-pills ">
    <li><a href="form_service.php">Ajout services</a></li>
    <li><a href="modif_service.php">Modifier services</a></li>
    <li><a href="service.php">Page services</a></li>
  </ul>
  <hr>
  <br>
  <h3>Les Habitats</h3>
  <br>
  <ul class="nav nav-pills">
    <li><a href="ajout_habitat.php">Ajouter un habitat</a></li>
    <li><a href="modif_habitat.php">Modifier les habitats</a></li>
    <li><a href="habitat.php">Page habitats</a></li>
  </ul>
  <hr>
  <br>
  <h3>Compte rendu Vétérinaire</h3>
  <br>
  <ul class="nav nav-pills">
    <li><a href="admin_cr.php">Carnet de santé</a></li>
  </ul>
  <hr>
  <br>
  <h3>Animaux</h3>
  <br>
  <ul class="nav nav-pills">
    <li><a href="ajout_animal.php">Ajouter un animal</a></li>
    <li><a href="modif_animal.php">Modifier les animaux</a></li>
    <li><a href="animal.php">Page animaux</a></li>
  </ul>
  <hr>
  <br>
  <h3>Dashbord</h3>
  <br>
  <ul class="nav nav-pills">
    <li><a href="dashbord.php">Dashbord</a></li>
  </ul>
  <br>
  <h3>Les Horaires</h3>
  <br>
  <ul class="nav nav-pills">
    <li><a href="ajout_horaire.php">Ajouter un horaire</a></li>
    <li><a href="modif_horaire.php">Modifier les horaires</a></li>
    <li><a href="horaire.php">Page horaires</a></li>
  </ul>
  <br>
  <h3>Les Images</h3>
  <br>
  <ul class="nav nav-pills">
    <li><a href="img.php">Ajouter une image</a></li>
  </ul>
  <br>
  <!--danger zone bootstrap-->
  <h3>Zone de danger</h3>
  <div class="alert alert-warning">
    <strong>Attention!</strong> Vous êtes sur le point de vous déconnecter.
  </div>
  <button type="submit" class="btn btn-danger" id="logout" onclick="window.location.href='logout.php'">Déconnexion</button>
  </ul>
  </div>
</body>

</html>