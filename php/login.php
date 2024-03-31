<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Connexion</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body class="ac-admin titre-admin">
  <a href="admin.php">
    <img class="logo-arcadia background" src="../images/arcadia_logo.png" alt="Arcadia logo">
  </a>
  <br>
  <br>
  <?php
  require('connexion.php');
  session_start();

  if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $_SESSION['username'] = $username;
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' 
  and password='" . hash('sha256', $password) . "'";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) == 1) {
      $user = mysqli_fetch_assoc($result);
      // check if it is an admin, vet or regulator
      if ($user['type'] == 'admin') {
        header('location: admin.php');
      } elseif ($user['type'] == 'vétérinaire') {
        header('location: ac-vet.php');
      } elseif ($user['type'] == 'régulateur') {
        header('location: ac-regul.php');
      } else {
        header('location: index.php');
      }
    } else {
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }
  ?>
  <form class="box-login" action="" method="post" name="login" style="color:black; border:solid black 3px; height:auto; width:50%; margin-left:25%; padding: 20px;">
    <h1 class="box-title ac-admin titre-admin">Connexion</h1>
    <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
    <input type="password" class="box-input" name="password" placeholder="Mot de passe">
    <input type="submit" value="Connexion " name="submit" class="box-button form-btn">

    <?php if (!empty($message)) { ?>
      <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>
  </form>
  <br><br>
  <!--button to go back to the previous page -->
  <br>
  <a href="index.php" class="btn btn-primary form-btn ">Accueil</a>
  <br>
</body>

</html>