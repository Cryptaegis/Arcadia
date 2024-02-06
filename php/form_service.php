<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout services</title>
</head>
<body>
    <!--Ajout de nouveau services sur la base de donnée-->
    <h1>Ajout de services</h1>
    <form action= service.php" method="post">
        <div>
            <label for="libelle">Libellé</label>
            <input type="text" id="libelle" name="libelle" required>
        </div>
        <div>
            <label for="descriptionService">Description</label>
            <input type="text" id="descriptionService" name="descriptionService" required>
        </div>
        <div>
            <input type="submit" value="Ajouter">
        </div>
    </form>
    <?php
    // Attempt to connect to the database
    require "connexion.php";
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    // Define variables and initialize with empty values
    $libelle = $descriptionService =  "";
    // Processing form data when form is submitted onclick

    if(isset($_POST["submit"])){
        // Validate libelle
        $input_libelle = trim($_POST["libelle"]);
        if(empty($input_libelle)){
            echo "Please enter a libelle.";
        } else{
            $libelle = $input_libelle;
        }
        // Validate descriptionService
        $input_descriptionService = trim($_POST["descriptionService"]);
        if(empty($input_descriptionService)){
            echo "Please enter a description.";
        } else{
            $descriptionService = $input_descriptionService;
        }
        // Check input errors before inserting in database
        if(empty($libelle_err) && empty($descriptionService_err)){
            // Prepare an insert statement
            $sql = "INSERT INTO services (libelle, descriptionService) VALUES (?, ?)";
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ss", $param_libelle, $param_descriptionService);
                // Set parameters
                $param_libelle = $libelle;
                $param_descriptionService = $descriptionService;
                echo 'reussi';
                // Attempt to execute the prepared statement
                //if(mysqli_stmt_execute($stmt)){
                    // Records created successfully. Redirect to landing page
                  //  header("location: service.php ");
                  //  exit();
              //  } else{
                  //  echo "Something went wrong. Please try again later.";
                }
            }
        }
    ?>


<br>
<button onclick="history.back()">Go Back</button>
<br>
<a href="admin.php">HOME</a>
<br>


</body>
</html>