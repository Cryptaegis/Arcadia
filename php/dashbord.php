<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Animaux</title>
</head>

<body>
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
  <div id="chartContainer" style="height: 370px; width: 50%;"></div>
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


  <button onclick="history.back()">Go Back</button>
  <a href="admin.php">Home</a>

</body>

</html>