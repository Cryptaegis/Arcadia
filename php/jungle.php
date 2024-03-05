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
    LIKE '%jungle%' OR '%Jungle%'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    

  ?>

<h1>Bienvenue dans l'Habitat Jungle du Zoo ARCADIA</h1>

<p>Une aventure immersive au cœur de la luxuriante et mystérieuse forêt tropicale. Explorez des écosystèmes vibrants, admirez une faune exotique et plongez dans un environnement où la biodiversité prend vie.</p>

   <h2>Points Forts de l'Habitat Jungle :</h2>
   <h3>Canopée Vivante :</h3>
   <p> Marchez à travers des sentiers sinueux sous une canopée dense où la lumière filtre à travers les feuilles luxuriantes, créant une ambiance magique qui évoque l'authenticité des jungles tropicales.</p>
   <h3>Créatures Fascinantes :</h3>
   <p>Rencontrez une myriade de créatures fascinantes, des singes agiles aux serpents colorés en passant par les oiseaux aux plumages éclatants. Les habitats spécialement conçus garantissent le bien-être des animaux tout en recréant leur environnement naturel.</p>
 <h4>Les Étonnants Habitants de la Jungle :</h4>
 <h5>Le chimpanzé :</h5>
 <p>Admirez l'intelligence et la sociabilité des chimpanzés, nos cousins les plus proches dans le règne animal. Ces primates fascinants évoluent dans un environnement adapté à leurs besoins naturels, offrant aux visiteurs une occasion unique d'observer leurs interactions complexes et leurs comportements captivants.</p>
 <h5>Le jaguar :</h5>
<p>Glissez-vous dans l'ombre de la jungle pour apercevoir le jaguar, majestueux et puissant. Avec son pelage tacheté et sa silhouette agile, le jaguar incarne la grâce prédatrice de la jungle. Nos habitats spacieux permettent à ces félins de manifester leurs comportements naturels, du jeu à la chasse simulée.</p>
 <h5>L'aigle :</h5>
<p>Sous les frondaisons de la canopée, regardez les cieux pour apercevoir l'aigle majestueux, symbole de liberté et de puissance. Nos espaces de vol adaptés permettent aux aigles de déployer leurs ailes et de montrer leur agilité aérienne. Apprenez davantage sur leur rôle crucial dans le maintien de l'équilibre écologique de la jungle.</p>
   <ul class="animal-list">
       <?php foreach ($row as $animal): ?>
           <li class="animal-item">
               <div class="card">
                   <div class="card-body">
                       <h5 class="card-title"><?php echo $animal['prenom']; ?></h5>
                       <p class="card-text">
                           <?php echo $animal['habitat']; ?>
                           <?php if (strpos($animal['habitat'], 'jungle') !== false): ?>
                               (lives in the JUNGLE)
                           <?php endif; ?>
                       </p>
                       <p><?php echo $animal['race']; ?></p>
                   </div>
               </div>
           </li>
       <?php endforeach; ?>
   </ul>
   
   <h3>Cascade Enchantée :</h3>
   <p>Découvrez une cascade naturelle au cœur de la jungle, offrant un spectacle rafraîchissant et créant un habitat idéal pour les espèces aquatiques et les plantes tropicales.</p>
   <h2>Expériences Éducatives :</h2>
   <h3>Observation Guidée :</h3>
   <p>Nos experts vous guideront à travers des points d'observation stratégiques, partageant des informations fascinantes sur les comportements, les adaptations et les rôles écologiques des habitants de la jungle.</p>
   <h3>Éducation sur la Conservation :</h3>
   <p>Apprenez comment le Zoo ARCADIA s'engage dans des projets de conservation pour protéger les habitats de la jungle et les espèces menacées, et découvrez comment vous pouvez contribuer à la préservation de ces écosystèmes.</p>
   <h3>Ambiance Culturelle :</h3>
   <p>Plongez dans une atmosphère culturelle unique avec des éléments architecturaux inspirés des régions tropicales, des expositions artistiques et des représentations vivantes mettant en valeur la richesse culturelle des jungles du monde entier.</p>
   <h3>Engagement envers la Durabilité :</h3>
   <p>Le Zoo ARCADIA s'efforce de minimiser son impact sur l'environnement en mettant en œuvre des pratiques durables, de la gestion des déchets à l'utilisation d'énergies renouvelables.</p>
   <p>Découvrez l'Habitat Jungle du Zoo ARCADIA, où l'aventure, l'éducation et la conservation se rencontrent au cœur de la nature exubérante. Nous vous invitons à rejoindre notre mission de préservation et à explorer la magie de la jungle avec nous.</p>






  <button onclick="history.back()">Go Back</button>
  <a href="admin.php">Home</a>

</body>

</html>