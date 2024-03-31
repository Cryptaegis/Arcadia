<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Savane</title>
</head>

<body class='vitrine-accueil'>
    <?php include "_partial/header.php"; ?>
    <br>
    <?php include "_partial/navbar.php"; ?>
    <br>
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
    <br>
    <h1>Une Aventure Sauvage au Cœur de la savane</h1>
    <h2>Rencontrez les Habitants de la Savane</h2>
    <img src="../images/lion3.jpg" alt="lion" class='habit-img'>
    <p class="ac-p">Explorez les vastes étendues de la savane et rencontrez une variété impressionnante d'animaux emblématiques tels que les lions majestueux, les éléphants gracieux, les girafes élancées et bien d'autres. Les habitats spacieux et soigneusement conçus offrent aux animaux un environnement qui reflète au mieux leurs besoins naturels, permettant aux visiteurs d'observer leurs comportements authentiques.</p>
    <br>
    <h3>Animaux</h3>
    <ul class="animal-list">
        <?php foreach ($row as $animal) : ?>
            <li href="#" class="list-group-item list-group-item-action list-group-item-success" class="animal-item">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $animal['prenom']; ?></h5>
                        <p class="card-text ">
                            <?php echo $animal['habitat']; ?>
                            <?php if (strpos($animal['habitat'], 'savane') !== false) : ?>
                                (lives in the SAVANE)
                            <?php endif; ?>
                        </p>
                        <p><?php echo $animal['race']; ?></p>
                        <?php if ($animal['race'] == 'lion') : ?>
                            <img src="../images/lion2.jpg" alt="lion" class='habit-img'>
                        <?php elseif ($animal['race'] == 'girafe') : ?>
                            <img src="../images/girafe2.jpg" alt="girafe" class='habit-img'>
                        <?php else : ?>
                            <img src="../images/zebra1.jpg" alt="zebra" class='habit-img'>
                        <?php endif ?>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <br><br>
    <main>
        <section>
            <h2>Sensibilisation et Conservation</h2>
            <p class="ac-p">Cette habitat n'est pas seulement une expérience visuelle, c'est aussi une opportunité d'apprentissage. Des panneaux éducatifs informatifs disséminés le long du parcours offrent des informations fascinantes sur la faune africaine, sa conservation et les défis auxquels ces espèces sont confrontées dans la nature. ARCADIA s'engage à sensibiliser le public sur l'importance de la conservation et à contribuer aux efforts mondiaux de préservation de la biodiversité.</p>
        </section>
        <br><br>
        <img src="../images/savane.jpg" alt="savane" class='habit-img'>
        <br><br>
        <section>
            <h2>Expérience Interactive</h2>
            <p class="ac-p">Faites de votre visite une aventure interactive. Assistez à des séances d'alimentation passionnantes, participez à des ateliers éducatifs et découvrez des programmes spéciaux conçus pour rapprocher les visiteurs de la vie sauvage africaine. Capturez ces moments uniques avec vos proches et partagez-les pour sensibiliser encore davantage à la préservation de la nature.</p>
        </section>

    </main>

    <br>
    <?php include "_partial/footer.php"; ?>
    <br>

</body>

</html>