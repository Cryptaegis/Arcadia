<?php
require('connexion.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body class='vitrine-accueil'>
    <?php include "_partial/header.php"; ?>
    <br>
    <?php include "_partial/navbar.php"; ?>
    <br>
    <!------------------------------ Presentation Arcadia --------------------------->
    <!-- Page Heading -->

    <br /><br />
    <div id="contenu">
        <h1>Le zoo Arcadia</h1>

        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive-rec" src="../images/arcadia.jpg" alt="Forêt d'arcadia">
            </div>

            <div class="col-md-4 text-top">
                <h3>L'Arcadia</h3>
                <p>Arcadia est un zoo situé en France près de la forêt de Brocéliande, en bretagne depuis 1960.
                    Ils possèdent tout un panel d’animaux, réparti par habitat (savane, jungle, marais) et font
                    extrêmement attention à leurs santés. </p>
                </a>
            </div>



            <table class="table-stair">
                <tr>
                    <td>
                        <img src="../images/arcadia.jpg" alt="arcadia" class="img-circle">
                    </td>
                    <td>
                        <p class="middle-text">Chaque jour, plusieurs vétérinaires viennent afin
                            d’effectuer les contrôles sur chaque animal avant l’ouverture du zoo afin de s’assurer que tout
                            se passe bien, de même, toute la nourriture donnée est calculée afin d’avoir le bon grammage
                            (le bon grammage est précisé dans le rapport du vétérinaire).
                            Le zoo, se porte très bien financièrement, les animaux sont heureux. Cela fait la fierté de son
                            directeur, José, qui a de grandes ambitions.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Arcadia protège et conserve la nature qui habite au coeur de chacun d'entre vous qui pose le pieds dans chaque habitat c'est une immersion total.</p>
                    </td>
                    <td>
                        <img src="../images/arcadia.jpg" alt="arcadia" class="img-circle circ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="../images/arcadia2.jpg" alt="arcadia" class="img-circle">
                    </td>
                    <td class='bottom-text'>
                        <p>Les horaires du Zoo</p>
                        <?php
                        $sql = 'SELECT * FROM horaire WHERE nom = "Zoo"';
                        $resultat = mysqli_query($conn, $sql);
                        while ($unHoraire = mysqli_fetch_assoc($resultat)) {
                            echo "<p class='border-form' style='width:100%;'> " . $unHoraire["jour"] . " - Ouverteur: " . $unHoraire["heureDebut"] . " - Fermeture: " . $unHoraire["heureFin"] . "</p>";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <br /><br />
        <!------------------------------ BLOC DU CONTENU SERVICES--------------------------->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nos Services </h1>
            </div>
        </div>
        <!-- Wrapper for slides -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <a href="service.php">
                        <img src="../images/restaurant.jpg" alt="service restauration">

                    </a>
                    <div class="carousel-caption">
                        <h3>Restauration</h3>
                        <p>De quoi se retrouver en pleine et profiter de nos meilleur burgers</p>
                    </div>
                </div>

                <div class="item">
                    <a href="service.php">
                        <img src="../images/guide.jpg" alt="service guide">
                    </a>
                    <div class="carousel-caption">
                        <h3>Visitez leurs habitats!</h3>
                        <p>Vous serez accompagner par nos meilleur guides gratuitement!</p>
                    </div>
                </div>
                <div class="item">
                    <a href="service.php">
                        <img src="../images/train.jpg" alt="service train">

                    </a>
                    <div class="carousel-caption">
                        <h3>Train</h3>
                        <p>Charle est notre gentils train qui vous permettras de tout voir dans le zoo sans bouger de votre siège.</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>


    <br />
    <br />
    <!--section Habitat-->
    <div class="row">
        <div class="col-lg-12">
            <hr>

            <h2 class="page-header"><strong>Nos habitats :</strong></h2>
        </div>
    </div>
    <a href="#services"><i id="arrow" class="fa fa-arrow-right fa-2x"></i></a>
    <!-- Introduction Text -->
    <div class="row">
        <div class="col-lg-12  text-center">
            <p>Ici, vous pourrez découvrir des animaux sauvages et domestiques. Vous aurez la possibilité de les observer dans leur habitat naturel. Vous pourrez également assister à des spectacles d'animaux.</p>

        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-support"></i>Savane</h4>
            </div>
            <div class="panel-footer text-center">
                <img class="img-responsive" src="../images/savane.jpg" alt="">
                <a href="savane.php" class="btn btn-default">En savoir plus</a>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-support"></i>Jungle</h4>
            </div>
            <div class="panel-footer text-center">
                <img class="img-responsive" src="../images/jungle.jpg" alt="">
                <a href="jungle.php" class="btn btn-default">En savoir plus</a>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-support"></i>Marais</h4>
            </div>
            <div class="panel-footer text-center">
                <img class="img-responsive" src="../images/marais.jpg" alt="">
                <a href="marais.php" class="btn btn-default">En savoir plus</a>
            </div>
        </div>
    </div>
    </div>
    </div>
    <br />
    <br />
    <!-- animaux -->

    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><strong>Nos Animaux</strong></h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card" onclick="location.href='animal.php';" style="width: 50rem; margin: auto;">
            <img src="../images/animaux.jpg" class="card-img-top" alt="les elephant de la savane" style="width: 50rem; margin: auto;">
            <div class="card-body animal-link">
                <h5 class="card-title">Animaux</h5>
                <p class="card-text">Venez rencontrer nos animaux qui sont soigné et protéger dans un milieux adapter à leur besoins.</p>
            </div>

        </div>
    </div>
    </div>
    <br /><br />



    <!--BLOC CONTENU DES AVIS COMMENTAIRES-->

    <?php

    //only the validate comments
    $query = "SELECT * FROM comments WHERE validate = 1 ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="display-4">Pour nous permettre de connaitre votre avis sur notre Zoo.</h2>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="comment.php" role="button">Laisser un avis</a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Avis et Commentaires</h2>
        </div>
    </div>
    <br /><br />
    <div class="row row-comment">
        <?php foreach ($row as $comment) : ?>
            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card">
                        <div class="card-body-avis">
                            <h5 class="card-title"> De <?php echo $comment['username']; ?></h5>
                            <p class="card-text">"<?php echo nl2br(htmlspecialchars($comment['comment'])); ?>"</p>
                            <hr />
                            <p class="card-text">Accompagner de <?php echo $comment['accompagnant']; ?></p>
                            <p class="card-text">Note: <?php echo $comment['visitRating']; ?>/5</p><br />
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <br>
    <?php include "_partial/footer.php"; ?>
    <br>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>