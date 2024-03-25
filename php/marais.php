<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animaux</title>
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
    LIKE '%marais%' OR '%Marais%'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);


    ?>
    <div class="ac-p">
        <h1>l'habitat Marais !</h1>
        <h2>Caractéristiques principales :</h2>
        <h3>Écosystème Authentique :</h3>
        <p>L'Habitat Marais d'ARCADIA a été soigneusement conçu pour recréer de manière authentique les habitats marécageux de différentes régions du globe. Des plantes aquatiques luxuriantes aux marais bouillonnants, chaque détail a été pris en compte pour offrir une expérience aussi proche que possible de la nature.</p>
        <h3> Faune Diversifiée :</h3>
        <p>Rencontrez une variété extraordinaire d'espèces adaptées à la vie dans les marais. Des oiseaux élégants aux reptiles intriguants, observez-les dans un environnement qui reflète fidèlement leur habitat naturel. Nos équipes dévouées veillent au bien-être de chaque habitant du marais, contribuant ainsi à la préservation de ces espèces vitales.</p>
    </div>
    <h4>Les Étonnants Habitants du Marais :</h4>
    <ul class="animal-list">
        <?php foreach ($row as $animal) : ?>
            <li href="#" class="list-group-item list-group-item-action list-group-item-success" class="animal-item">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $animal['prenom']; ?></h5>
                        <p class="card-text">
                            <?php echo $animal['habitat']; ?>
                            <?php if (strpos($animal['habitat'], 'marais') !== false) : ?>
                                (lives in the marais)
                            <?php endif; ?>
                        </p>
                        <p><?php echo $animal['race']; ?></p>
                        <?php if ($animal['race'] == 'cigogne') : ?>
                            <h3>Élégantes Cigognes :</h3>
                            <p>Admirez la grâce des cigognes qui parcourent les marais avec leur envergure majestueuse. Ces oiseaux élancés ajoutent une touche d'élégance avec leurs longs cous et leurs vols gracieux.</p>
                            <img src="../images/cigogne2.jpg" alt="cigogne" class='habit-img'>
                        <?php elseif ($animal['race'] == 'loutre') : ?>
                            <h3> Loutres Facétieuses : </h3>
                            <p>Plongez dans le monde ludique des loutres, des nageuses habiles qui naviguent gracieusement à travers les eaux du marais. Observez-les plonger, jouer et interagir, démontrant leur intelligence et leur agilité.</p>
                            <img src="../images/loutre3.jpg" alt="loutre" class='habit-img'>
                        <?php else : ?>
                            <h3>Canards Colorés :</h3>
                            <p>Découvrez une variété éclatante de canards aux plumages vibrants qui égayent les plans d'eau du marais. Les canards, avec leur comportement sociable, offrent un spectacle animé de couleurs et de mouvements.</p>

                            <img src="../images/duck6.jpg" alt="duck" class='habit-img'>
                        <?php endif ?>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>


    <div class="ac-p">
        <h3>Zones d'Observation :</h3>
        <p>Profitez de plusieurs points d'observation stratégiques qui offrent des vues panoramiques sur les différentes parties de l'habitat. Des passerelles surplombant les eaux aux zones d'observation sous-marines, chaque visiteur peut choisir sa propre aventure au sein de l'Habitat Marais.</p>
        <h3>Sensibilisation à la Conservation :</h3>
        <p>L'Habitat Marais d'ARCADIA n'est pas seulement une destination de divertissement, mais aussi un hub éducatif. Des panneaux informatifs et des présentations interactives sensibilisent les visiteurs aux enjeux de conservation liés aux zones humides, encouragent la durabilité et invitent à la protection de ces écosystèmes uniques.</p>
        <p>Plongez dans l'aventure immersive de l'Habitat Marais d'ARCADIA et découvrez la magie des marais comme jamais auparavant. Un monde fascinant vous attend, où la préservation de la nature et le divertissement se rejoignent pour une expérience inoubliable.</p>
    </div>




    <br>
    <?php include "_partial/footer.php"; ?>
    <br>


</body>

</html>