<?php
require('connexion.php');
require ('range.php');
require ('_partial/header.php');

$query = "SELECT * FROM observation";
  $resultat = mysqli_query($conn,$query);
  $row = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
  mysqli_free_result($resultat);
  //si la requête réussis et qu'il y a des résultats
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    foreach ($row as $rows) {
        echo '<div class="card" style="width: 18rem;">';
            echo "<h5 class='card-title'>".$rows['animal']."</h5>";
            echo "<h5 class='card-title'>".$rows['date']."</h5>";
            echo "<p class='card-text'>Observation : ".$rows['observation']."</p>";
            echo "<p class='card-text'>Etat : ".$rows['etat']."</p>";
            echo "<p class='card-text'>Amélioration : ".$rows['amelioration']."</p>";
        echo '</div>';
    }
} else {
    echo 
    "<div class='alert alert-warning' role='alert'>
        Aucun résultat trouvé !
    </div>";
};
?>


<form action="" method="get">
    <label for="animal">Animal:</label>
    <select name="animal" id="animal">
        <option value="">Tous</option>
        <option value="lion">Lion</option>
        <option value="girafe">Girafe</option>
        <option value="zebre">Zèbre</option>


    </select>

    <label for="date_range">Plage de dates:</label>
    <select name="date_range" id="date_range">
        <option value="last_week">Semaine précédente</option>
        <option value="this_week">Cette semaine</option>
        </select>

    <button type="submit">Filtrer</button>    
</form>
<a href="logout.php">Déconnexion</a>

<?php
require('_partial/footer.php');
?>

</body>
</html>
