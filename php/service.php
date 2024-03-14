<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <title>Services Arcadia</title>

</head>

<body class='vitrine-accueil'>
  
     <!--Affichage de la liste des services-->
    <h1>Services Arcadia</h1>
    <h2>Services</h2>
    <p>Voici la liste des services que nous proposons:</p>
    <!--ajout de la liste des services à partir de la base donnée avec un bouton modifier qui envoie vers une autre page-->      
    <?php
    // Attempt to connect to the database   
    require "connexion.php";
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    // Attempt select query execution
    $sql = "SELECT * FROM services";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            //card
            echo "<div class='container'>\n
            <div class='row'>\n";
            while($row = mysqli_fetch_array($result)){
                echo "<div class='col-md-4'>\n
                <div class='card'>\n
                <div class='card-body'>\n
                <h5 class='card-title'>" . $row['libelle'] . "</h5>\n
                <p class='card-text'>" . $row['descriptionService'] . "</p>\n
                </div>\n
                </div>\n
                </div>\n";
            }
            echo "\n</div>\n
            </div>";// fermeture du container et row
            
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "No records found.";
        }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn
            );}
            ?>
            <!--presentation Oasis restaurant-->
            <div>
            <h2>L'Oasis</h2>
<img  class="service1" src="../images/restaurant1.jpg" alt="restaurant plat" >
        <h3>Atmosphère Unique :</h3>
        <p>Niché au sein de la nature luxuriante, le Restaurant de l'Oasis offre une atmosphère apaisante et décontractée. Que vous choisissiez de vous asseoir en terrasse pour profiter du soleil ou à l'intérieur pour une escapade ombragée, chaque table offre une vue imprenable sur les habitats naturels du zoo.</p>
        <h3>Cuisine Gourmet :</h3>
        <p>Notre menu diversifié propose des plats soigneusement préparés mettant en valeur des ingrédients frais et de saison. Des salades légères aux plats copieux, chaque bouchée est une fusion de saveurs exquises. Les options végétariennes et véganes sont également disponibles pour répondre à tous les palais.</p>
        <h3>Ambiance Familiale :</h3>
        <p>Le Restaurant de l'Oasis est conçu pour accueillir toute la famille. Des menus pour enfants sont spécialement élaborés pour ravir les plus jeunes gourmets, tandis que les adultes peuvent déguster des mets délicieux accompagnés d'une sélection de vins et de boissons rafraîchissantes.</p>
        <h3>Engagement envers la Durabilité :</h3>
        <p>Le Restaurant de l'Oasis partage l'engagement du Zoo Arcadia envers la durabilité. Nous utilisons des produits locaux autant que possible, réduisons les déchets et adoptons des pratiques respectueuses de l'environnement pour minimiser notre empreinte écologique.</p>
        </div>
<div>
<h2>Les Guides</h2>
<img  class="service2" src="../images/guide1.jpg" alt="guide zoo" >
<h3>Points Forts de nos Services de Guide :</h3>
<ul>
<h4>Visites Guidées :</h4>
    <li><p>Optez pour une visite guidée privée ou en petit groupe, adaptée à vos intérêts et à votre emploi du temps. Nos guides vous emmèneront à travers les différents habitats du zoo, vous faisant découvrir les histoires fascinantes derrière chaque espèce et les efforts de conservation déployés pour les protéger.</p></li>
    <h4>Informations Expertes :</h4>
    <li><p>Nos guides sont des experts passionnés qui partagent leur savoir sur la biologie, le comportement animal, l'écologie et les défis de conservation auxquels font face les espèces du zoo. Posez-leur toutes vos questions pour une expérience enrichissante et interactive.</p></li>
    <h4>Expériences Personnalisées :</h4>
    <li><p>Que vous soyez un amateur d'oiseaux, un passionné de reptiles ou un amoureux des grands félins, nos guides s'adaptent à vos préférences pour vous offrir une expérience sur mesure. Nous pouvons également organiser des visites thématiques spéciales pour les enfants, les écoles ou les groupes.</p></li>
</ul>
        </div>
<br>
<div>
<h2>Notre train</h2>
<img  class="service3" src="../images/train1.jpg" alt="train zoo" >
<h3>Une excursion en Train :</h3>
<h4>Confort et Commodité </h4>
<p> Installez-vous confortablement dans nos wagons bien aménagés et laissez-vous transporter à travers les différents habitats du zoo sans vous soucier de la fatigue liée à la marche.</p>
<h4>Vue Panoramique :</h4>
<p>Profitez d'une vue panoramique imprenable depuis le train alors que vous traversez les paysages diversifiés du zoo, des vastes plaines aux environnements luxuriants de la jungle.</p>
<h4>Expériences Personnalisées :</h4>
<h3>Arrêts Optionnels :</h3>
<p>Profitez de la flexibilité offerte par notre train en vous arrêtant à certains points d'intérêt clés du zoo pour une observation plus détaillée ou pour participer à des activités spéciales.</p>
<h3>Engagement envers la Conservation :</h3>
<p>En participant à notre excursion en train, vous soutenez directement les programmes de conservation du Zoo ARCADIA, qui visent à protéger la biodiversité et les habitats naturels à travers le monde.</p>
<h3>Billets et Horaires :</h3>
<p>Les billets pour l'excursion en train peuvent être achetés à l'avance en ligne ou directement à l'entrée du zoo. Consultez nos horaires pour connaître les départs réguliers tout au long de la journée.</p>
<!--links-->
        </div>
<br>
<button onclick="history.back()">Go Back</button>
<br>
<a href="admin.php">HOME</a>


</body>
</html>