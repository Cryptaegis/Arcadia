<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout horaires</title>
       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>
<body class="ac-admin titre-admin">
<a href="admin.php">
        <img class="logo-arcadia background" src="../images/arcadia_logo.png" alt="Arcadia logo">
    </a>
    <h1>Ajout Horaire</h1>

    <?php

  // Attempt to connect to the database
  require("connexion.php");
  // Check connection
  if ($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }  
        if (isset($_POST['save_multiple_checkbox']))
{
    $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);
        $brands = $_POST['jours'];
        $debut = $_POST['heureDebut'];
        $fin = $_POST['heureFin'];

        foreach ($brands as $item) {
            $query = "INSERT INTO horaire (nom, jour, heureDebut, heureFin) VALUES ('$nom','$item', '$debut', '$fin')";
            $query_run = mysqli_query($conn, $query);
        
        }

    }
    
    ?>
    <div class="container" style="margin-left:36%; width:40%;">
        <div class="row justify-content-center" >
            <div class="col-md-8" >

                <?php
                if (isset($_SESSION['status'])) {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?>


                <div class="card mt-5">
                    <div class="card-header">
                    </div>
                    <div class="card-body">

                        <form action="" method="POST">

                            <label for="nom">Service correspondant</label>
                            <!--radio button zoo or restaurant or train service or guide service-->
                            <br>
                            <input type="radio" name="nom" value="Zoo" required> Zoo
                            <input type="radio" name="nom" value="Restaurant" required> Restaurant
                            <input type="radio" name="nom" value="Train" required> Train
                            <input type="radio" name="nom" value="Guide" required> Guide
                            <br>
                            <br>
                            <div class="form-group mb-3 border-form">
                                <input type="checkbox" name="jours[]" value="Lundi"> Lundi <br>
                                <input type="checkbox" name="jours[]" value="Mardi"> Mardi <br>
                                <input type="checkbox" name="jours[]" value="Mercredi"> Mercredi <br>
                                <input type="checkbox" name="jours[]" value="Jeudi"> Jeudi <br>
                                <input type="checkbox" name="jours[]" value="Vendredi"> Vendredi <br>
                                <input type="checkbox" name="jours[]" value="Samedi"> Samedi <br>
                                <input type="checkbox" name="jours[]" value="Dimanche"> Dimanche <br>
                            </div>
                            <br>
                                <label for="heureDebut">Heure de début</label>
                                <!--Ajoutez les heures-->
                                <input type="time" id="time"  name="heureDebut" class="form-control" required>
                                <br>
                                <label for="heureFin">Heure de fin</label>
                                <input type="time" id="time"  name="heureFin" class="form-control" required>
                                <br>
                                <br>

                            <button type="submit" name="save_multiple_checkbox" class="btn btn-primary form-btn">Valider</button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    <br>
    

<nav aria-label="breadcrumb" style="width:50%; margin:auto;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="ajout_horaire.php">Ajouter un horaire</a></li>
            <li class="breadcrumb-item"><a href="modif_horaire.php">Modification horaire</a></li>
        </ol>
    </nav>
    <button onclick="history.back()" class="form-btn">Go Back</button><br>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>