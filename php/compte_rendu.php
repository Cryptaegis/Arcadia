<!DOCTYPE html>
<html>
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Observation</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>
  <body class=" ac-admin titre-admin">
 <?php
  // Start the session
  session_start();

  // Check if user is not logged in, redirect to login page
  if (!isset($_SESSION["username"])) {
      header("Location: login.php");
      exit();
  }

  require('connexion.php');

  // Check if form is submitted
  if (isset($_POST['submit'])) {
      $animal = htmlspecialchars(strip_tags($_POST['animal'], ENT_QUOTES));
      $date = htmlspecialchars(strip_tags($_POST['date']));
      $time = htmlspecialchars(strip_tags($_POST['time']));
      $observation = htmlspecialchars(strip_tags($_POST['observation'], ENT_QUOTES));
      $etat = htmlspecialchars(strip_tags($_POST['etat'], ENT_QUOTES));
      $amelioration = htmlspecialchars(strip_tags($_POST['amelioration'], ENT_QUOTES));


      // Insert data into database
      $query = "INSERT into `observation` (animal, date, time, observation, etat, amelioration) VALUES ('$animal', '$date', '$time', '$observation', '$etat', '$amelioration')";

      $stmt = mysqli_query($conn, $query);
      // Check for errors
      if ($stmt === false) {
          die("Error executing query: $query");

      }else
      {
        echo "Observation added successfully";
      }
    
    }
    //si, select Lion envoyer vers la page carnet_sante.php

    if (isset($_POST['animal'])) {
      $animal = $_POST['animal'];
      if ($animal == 'Lion') {
        header('location: Lion_sante.php');
      }elseif
      ($animal == 'zebre') {
        header('location: zebre_sante.php');
      }elseif
      ($animal == 'girafe') {
        header('location: girafe_sante.php');
      }elseif
      ($animal == 'Chimpanze') {
        header('location: chimpanze_sante.php');
      }elseif
      ($animal == 'aigle') {
        header('location: aigle_sante.php');
      }elseif
      ($animal == 'jaguar') {
        header('location: jaguar_sante.php');
      }elseif
      ($animal == 'cigogne') {
        header('location: cigogne_sante.php');
      }elseif
      ($animal == 'loutre') {
        header('location: loutre_sante.php');
      }elseif
      ($animal == 'canard') {
        header('location: canard_sante.php');
      }else{
        echo "error";
      }
          }
    
  // Close connection
  $conn->close();
  ?>

    <!--form that will send you to a page if lion is selected-->

    <form action="" method="post" class="border-form">
      <h2>Observation Vétérinaire</h2>
      <br>
      <!--add option animal-->
      <label for="animal">Animal:</label>
      <br>
      <div>
      <select class="box-input" name="animal" id="type" >
        <option value="" disabled selected>Type</option>
        <option value="Lion">Lion</option>
        <option value="zebre">zebre</option>
        <option value="girafe">Girafe</option>
        <option value="Chimpanze">Chimpanzés</option>
        <option value="aigle">Aigle arpia</option>
        <option value="jaguar">Jaguar</option>
        <option value="cigogne">Cigogne</option>
        <option value="loutre">Loutre</option>
        <option value="canard">Canard</option>
      </select>
  </div>

      <label for="date">Date:</label>
      <br>
      <input class="box-input" type="date" id="date" name="date" required>
      <br>
      <label for="time">Heure:</label>
      <br>
      <input type="time" id="time" name="time" min="07:00" max="18:00" required />
      <br>
      <label for="observation">Observation:</label>
      <br>
      <textarea id="observation" name="observation" rows="4" cols="50" required></textarea>
      <br>
      <label for="etat">Etat:</label>
      <br>
      <input class="box-input" type="text" id="etat" name="etat" required>
      <br>
      <label for="amelioration">Amélioration:</label>
      <br>
      <textarea id="amelioration" name="amelioration" rows="4" cols="50" required></textarea>
      <br>
      <input type="submit" name="submit" value="Add Observation" class="form-btn">
    </form>
    <?php include "_partial/navbar-veto.php"; ?>

    </ul>
    </div>
       <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>