<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animaux</title>
</head>

<body>

    <?php
    require('connexion.php');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // display only the savane animals
    $sql = "SELECT * FROM animaux WHERE habitat
    LIKE '%savane%' OR '%Savane%'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);


    ?>



    <h1>Une Aventure Sauvage au Cœur de la savane</h1>
    <h2>Rencontrez les Habitants de la Savane</h2>
    <p>Explorez les vastes étendues de la savane et rencontrez une variété impressionnante d'animaux emblématiques tels que les lions majestueux, les éléphants gracieux, les girafes élancées et bien d'autres. Les habitats spacieux et soigneusement conçus offrent aux animaux un environnement qui reflète au mieux leurs besoins naturels, permettant aux visiteurs d'observer leurs comportements authentiques.</p>

    <h3>Animaux</h3>
    <ul class="animal-list">
        <?php foreach ($row as $animal) : ?>
            <li class="animal-item">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $animal['prenom']; ?></h5>
                        <p class="card-text">
                            <?php echo $animal['habitat']; ?>
                            <?php if (strpos($animal['habitat'], 'savane') !== false) : ?>
                                (lives in the SAVANE)
                            <?php endif; ?>
                        </p>
                        <p><?php echo $animal['race']; ?></p>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

<h2>Sensibilisation et Conservation</h2>  
<p>Cette habitat n'est pas seulement une expérience visuelle, c'est aussi une opportunité d'apprentissage. Des panneaux éducatifs informatifs disséminés le long du parcours offrent des informations fascinantes sur la faune africaine, sa conservation et les défis auxquels ces espèces sont confrontées dans la nature. ARCADIA s'engage à sensibiliser le public sur l'importance de la conservation et à contribuer aux efforts mondiaux de préservation de la biodiversité.</p>  
<h2>Expérience Interactive</h2>
<p>Faites de votre visite une aventure interactive. Assistez à des séances d'alimentation passionnantes, participez à des ateliers éducatifs et découvrez des programmes spéciaux conçus pour rapprocher les visiteurs de la vie sauvage africaine. Capturez ces moments uniques avec vos proches et partagez-les pour sensibiliser encore davantage à la préservation de la nature.</p>
<h2>Planifiez Votre Visite</h2>
<p>Préparez-vous à être émerveillé par la beauté de la savane africaine. Consultez notre calendrier d'événements, achetez vos billets en ligne et planifiez votre journée pour une expérience inoubliable au cœur d'ARCADIA. Rejoignez-nous dans cette aventure exceptionnelle et laissez-vous transporter dans le monde sauvage de la savane.</p>






    <button onclick="history.back()">Go Back</button>
    <a href="admin.php">Home</a>

</body>

</html>