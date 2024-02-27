<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
</head>
<body class='vitrine-accueil'>
    <?php include "_partial/header.php"; ?>
    <?php include "_partial/navbar.php"; ?>
    <h1>Accueil</h1>
    <p>Bienvenue a ARCADIA</p>
    <p>Découvrons les animaux ensemble!</p>
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
                    <img src="../images/aigle1.jpg" alt="Aigle">
                    <div class="carousel-caption">
                        <h3>Aigle</h3>
                        <p>L'aigle est un oiseau de proie, il est utilisé pour la chasse.</p>
                    </div>
                </div>
                
                <div class="item">
                    <img src="../images/aigle2.jpg" alt="Aigle">
                    <div class="carousel-caption">
                        <h3>Aigle</h3>
                        <p>L'aigle est un oiseau de proie, il est utilisé pour la chasse.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/aigle3.jpg" alt="Aigle">
                    <div class="carousel-caption">
                        <h3>Aigle</h3>
                        <p>L'aigle est un oiseau de proie, il est utilisé pour la chasse.</p>
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
    
    <img src="../images/accueil.jpg" alt="accueil" class="img-circle"> 

<br/>
<br/>
<!------------------------------ BLOC DU CONTENU --------------------------->
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Description : L'Arcadia</h1>
		</div>
	</div>
	<!-- /.row -->

	<!-- Portfolio Item Row -->
	<div class="row">
		<div class="col-md-8">
			<img class="img-responsive" src="../images/arcadia.png" alt="">
		</div>

		<div class="col-md-4">
			<h3>L'Arcadia</h3>
			<p>Le parc national de l'Arcadia est un parc animalier situé à 30 minutes de Paris. Il est ouvert toute l'année et propose des activités pour toute la famille. Vous pourrez y découvrir des animaux sauvages et domestiques. Vous pourrez également assister à des spectacles d'animaux.</p>
        </a>
    </div>
    
    <br/><br/>
    <div id="contenu">
        <h1>Description : L'Arcadia</h1>
        
        <table style="width:70%">
            <tr>
                <td>
                    <p>L'Arcadia est un parc animalier situé à 30 minutes de Paris. Il est ouvert toute l'année et propose des activités pour toute la famille. Vous pourrez y découvrir des animaux sauvages et domestiques. Vous pourrez également assister à des spectacles d'animaux.</p>
                </td>
                <td>
                    <img src="../images/arcadia.jpg" alt="arcadia" class="img-circle">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="../images/arcadia2.jpg" alt="arcadia" class="img-circle">
                </td>
                <td>
                    <p>L'Arcadia est un parc animalier situé à 30 minutes de Paris. Il est ouvert toute l'année et propose des activités pour toute la famille. Vous pourrez y découvrir des animaux sauvages et domestiques. Vous pourrez également assister à des spectacles d'animaux.</p>
                   <b>Nom scientifique :</b> <i>Animalia</i><br/>
                   <b>Famille :</b> <i>Chordata</i><br/>
                   <b>Genre :</b> <i>Mammalia</i><br/>
                   Le nom Arcadia provient du grec ancien et signifie "pays des bergers".<br/>Ce mammifère est originaire d'Asie et d'Afrique. Il est utilisé pour le transport de marchandises et de personnes. Il est également utilisé pour la production de lait et de viande.  </td>
    <?php include "_partial/footer.php"; ?>

</body>
</html>