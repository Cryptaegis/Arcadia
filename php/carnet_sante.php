<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Notylesheet -->
  <link rel="stylesheet" href="../css/styles.css" />
  <title>Carnet de santé</title>
</head>

<body class="ac-admin">
<img class="logo-arcadia background" src="../images/arcadia_logo.png" alt="Arcadia logo">


  <h1 class="titre-admin">La santé des animaux</h1>

  <div class="card card-sante">
    <div class="card-body">
      <h5 class="card-title">LION</h5>
      <p class="card-text">Observation comportementale et environnementale de l'animal. Ainsi que le suivie de son Alimentation.</p>
      <a href="Lion_sante.php" class="btn btn-primary form-btn">Carnet de santé</a>
    </div>
    <img class="card-img-bottom" src="../images/lion1.jpg" alt="Card image cap">
  </div>
  <br>
  <div class="card card-sante">
    <div class="card-body">
      <h5 class="card-title">AIGLE</h5>
      <p class="card-text">Observation comportementale et environnementale de l'animal. Ainsi que le suivie de son Alimentation.</p>
      <a href="aigle_sante.php" class="btn btn-primary form-btn">Carnet de santé</a>
    </div>
    <img class="card-img-bottom" src="../images/aigle6.jpg" alt="Card image cap">
  </div>
  <br>
  <div class="card card-sante">
    <div class="card-body">
      <h5 class="card-title">CANARD</h5>
      <p class="card-text">Observation comportementale et environnementale de l'animal. Ainsi que le suivie de son Alimentation.</p>
      <a href="canard_sante.php" class="btn btn-primary form-btn">Carnet de santé</a>
    </div>
    <img class="card-img-bottom" src="../images/duck1.jpg" alt="Card image cap">
  </div>
  <br>
  <div class="card card-sante">
    <div class="card-body">
      <h5 class="card-title">SINGE</h5>
      <p class="card-text">Observation comportementale et environnementale de l'animal. Ainsi que le suivie de son Alimentation.</p>
      <a href="chimpanze_sante.php" class="btn btn-primary form-btn">Carnet de santé</a>
    </div>
    <img class="card-img-bottom" src="../images/chimpanzee2.jpg" alt="Card image cap">
  </div>
  <br>
  <div class="card card-sante">
    <div class="card-body">
      <h5 class="card-title">CIGOGNE</h5>
      <p class="card-text">Observation comportementale et environnementale de l'animal. Ainsi que le suivie de son Alimentation.</p>
      <a href="cigogne_sante.php" class="btn btn-primary form-btn">Carnet de santé</a>
    </div>
    <img class="card-img-bottom" src="../images/cigogne1.jpg" alt="Card image cap">
  </div>
  <br>
  <div class="card card-sante">
    <div class="card-body">
      <h5 class="card-title">GIRAFE</h5>
      <p class="card-text">Observation comportementale et environnementale de l'animal. Ainsi que le suivie de son Alimentation.</p>
      <a href="girafe_sante.php" class="btn btn-primary form-btn">Carnet de santé</a>
    </div>
    <img class="card-img-bottom" src="../images/girafe2.jpg" alt="Card image cap">
  </div>
  <br>
  <div class="card card-sante">
    <div class="card-body">
      <h5 class="card-title">JAGUAR</h5>
      <p class="card-text">Observation comportementale et environnementale de l'animal. Ainsi que le suivie de son Alimentation.</p>
      <a href="jaguar_sante.php" class="btn btn-primary form-btn">Carnet de santé</a>
    </div>
    <img class="card-img-bottom" src="../images/jaguar1.jpg" alt="Card image cap">
  </div>
  <br>
  <div class="card card-sante">
    <div class="card-body">
      <h5 class="card-title">LOUTRE</h5>
      <p class="card-text">Observation comportementale et environnementale de l'animal. Ainsi que le suivie de son Alimentation.</p>
      <a href="loutre_sante.php" class="btn btn-primary form-btn">Carnet de santé</a>
    </div>
    <img class="card-img-bottom" src="../images/loutre1.jpg" alt="Card image cap">
  </div>
  <br>
  <div class="card card-sante">
    <div class="card-body">
      <h5 class="card-title">ZEBRE</h5>
      <p class="card-text">Observation comportementale et environnementale de l'animal. Ainsi que le suivie de son Alimentation.</p>
      <a href="zebre_sante.php" class="btn btn-primary form-btn">Carnet de santé</a>
    </div>
    <img class="card-img-bottom" src="../images/zebra1.jpg" alt="Card image cap">
  </div>
  <br><br>
   <!--danger zone bootstrap-->
   <h3 class="titre-admin">Zone de danger</h3>
  <div class="alert alert-warning">
    <strong>Attention!</strong> Vous êtes sur le point de vous déconnecter.
  </div>
  <button type="submit" class="btn btn-danger dangerous" id="logout" onclick="window.location.href='logout.php'">Déconnexion</button>
  </ul>
  </div>
  <br>
  <br>
  <button onclick="history.back()" class="form-btn dangerous">Go Back</button>
  <br>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>