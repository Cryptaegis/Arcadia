add_user.php
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion utilisateur</title>

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
    <br>
    <br>
  <?php
  require('connexion.php');

  if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])) {
    // récupérer le nom d'utilisateur 
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    // récupérer l'email 
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    // récupérer le mot de passe 
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    // récupérer le type (user | admin)
    $type = stripslashes($_REQUEST['type']);
    $type = mysqli_real_escape_string($conn, $type);

    $query = "INSERT into `users` (username, email, type, password)
          VALUES ('$username', '$email', '$type', '" . hash('sha256', $password) . "')";
    $res = mysqli_query($conn, $query);

    if ($res) {
      echo "<div class='sucess'>
             <h3>L'utilisateur a été créée avec succés.</h3>
             <p>Cliquez <a href='index.php'>ici</a> pour retourner à la page d'accueil</p>
       </div>";
    }
  }

  ?>
    <form class="box border-form" action="" method="post">
      <h1 class="box-logo box-title">
      </h1>
      <h1 class="box-title">Ajout utilisateur</h1>
      <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />

      <input type="text" class="box-input" name="email" placeholder="Email" required />
      <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
      <select class="box-input" name="type" id="type">
        <option value="" disabled selected>Type</option>
        <option value="vétérinaire">Vétérinaire</option>
        <option value="régulateur">Régulateur</option>
      </select>
      <br>
      <br>
      <button class="btn btn-submit btn-primary form-btn" type="submit" name="submit">Ajouter</button>
    </form>
<br>

<nav aria-label="breadcrumb" style="width:50%; margin:auto;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
        </ol>
    </nav>
</body>

</html>