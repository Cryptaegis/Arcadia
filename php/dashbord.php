<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Animaux</title>
       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body  class="ac-admin titre-admin">
<a href="admin.php">
      <img class="logo-arcadia background" src="../images/arcadia_logo.png" alt="Arcadia logo">
    </a>
    <br>
    <br>
    <h1>Nombre de vue par animaux</h1>
  <?php

  session_start();
  require('connexion.php');

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $query = "SELECT * FROM animaux WHERE view";
  $result = mysqli_query($conn, $query);
  
  if ($result) {
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
  } else {
    echo "Error: " . mysqli_error($conn) . $row . $query;
  }
  $data = array();
  foreach ($row as &$r) {
    $animalName = $r["prenom"];
    $nbViews = (int)$r["view"];
    $data[] = array("label" => $animalName, "y" => $nbViews);
  }
  ?>

  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <div id="chartContainer" style="height: 370px; width: 50%; margin:0 auto;"></div>
  <script type="text/javascript">
    window.onload = function() {
      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title:{
          text: "Nombre de vues par animaux"
        },
        subtitles:[{
          text: "Nombre de vues"
        }],
        data: [{
          type: "column",
          yValueFormatString: "#,##0 vues",
          indexLabel: "{y}",
          indexLabelPlacement: "inside",
          indexLabelFontColor: "white",
          dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
        }]
      });

      chart.render();

      
    }

    function updateChart() {
      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title:{
          text: "Nombre de vues par animaux"
        },
        subtitles:[{
          text: "Nombre de vues"
        }],
        data: [{
          type: "column",
          yValueFormatString: "#,##0 vues",
          indexLabel: "{y}",
          indexLabelPlacement: "inside",
          indexLabelFontColor: "white",
          dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
        }]
      });

      chart.render();
    }
</script>

  
</body>
<br>
    <br>

    <nav aria-label="breadcrumb" style="width:50%; margin:auto;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="dashbord.php">Dashbord</a></li>
        </ol>
    </nav>
<br>
  <button onclick="history.back()" class="form-btn">Go Back</button>

</body>

</html>