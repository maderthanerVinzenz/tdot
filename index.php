<?php
$servername = "localhost";
$database = "umfrage";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$viewQuery = "CREATE VIEW v_surveyresult AS 
              SELECT t_Fachdef.Fach, COUNT(t_FachFragedef.FachID) FROM t_Fachdef
              INNER JOIN t_FachFragedef ON t_Fachdef.FachID = t_FachFragedef.FachID
              INNER JOIN t_umfrage ON t_umfrage.FragenID = t_FachFragedef.FragenID
              GROUP BY t_Fachdef.FachID";

$conn->query($viewQuery);

$queryChart = "SELECT Fach, count FROM v_surveyresult";

$resultChart = $conn->query($queryChart);

$dataChart = array();
while ($rowChart = $resultChart->fetch_assoc()) {
    $dataChart['labels'][] = $rowChart['Fach']; // Änderung hier
    $dataChart['values'][] = $rowChart['count'];
}

$dataChart['colors'] = ["rgba(255, 0, 0, 1)", "rgba(255, 127, 0, 1)", "rgba(255, 255, 0, 1)", "rgba(0, 128, 0, 1)", "rgba(0, 0, 255, 1)", "rgba(46, 43, 95, 1)", "rgba(139, 0, 255, 1)", "rgba(255, 192, 203)", "rgba(64, 224, 208)"];

$queryPLZ = "SELECT PLZ FROM t_Persdef
             ORDER BY PersID DESC 
             LIMIT 5";

$resultPLZ = $conn->query($queryPLZ);

$dataPLZ = array();
while ($rowPLZ = $resultPLZ->fetch_assoc()) {
    $dataPLZ[] = $rowPLZ['PLZ'];
}

$data = array('chart' => $dataChart, 'plz' => $dataPLZ);

header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
?>
