<?php
$today = date('Y-m-d');
$last_week_start = date('Y-m-d', strtotime('-1 week last monday'));
$last_week_end = date('Y-m-d', strtotime('-1 week next sunday'));

$this_week_start = date('Y-m-d', strtotime('last monday'));
$this_week_end = date('Y-m-d', strtotime('next sunday'));

$animal = filter_input(INPUT_GET, 'animal');
$date_range = filter_input(INPUT_GET, 'date_range');
switch ($date_range) {
  case 'last_week':
      $start_date = $last_week_start;
      $end_date = $last_week_end;
      break;
  case 'this_week':
      $start_date = $this_week_start;
      $end_date = $this_week_end;
      break;
  default:
      $start_date = $today;
      $end_date = $today;
}

$query = "SELECT * FROM observation WHERE date BETWEEN '$start_date' AND '$end_date'";

if ($animal) {
$query .= " AND animal = '$animal'";
}

$result = mysqli_query($conn, $query);



if($result === false) {
  die("Error executing query: $query");
} 
?>
