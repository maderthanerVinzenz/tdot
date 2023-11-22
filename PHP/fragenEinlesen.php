<?php

$host = 'localhost'; // replace with your database host
$username = 'root'; // replace with your database username
$password = ''; // replace with your database password
$dbname = 'd_Fragen'; // replace with your database name
// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql="Select FachID From t_fachdef Where Fach = 'SEW';";
$result = $conn->query($sql);

if ($result) {
    // Fetch the result row as an associative array
    $row = $result->fetch_assoc();

    if ($row) {
        // Retrieve the value of FachID
        $id = $row['FachID'];
        $sql1 = "Select Count(FragenID) From t_FachFrageDef;";
        $countresult = $conn->query($sql1);

        if($countresult){
            $countrow = $countresult->fetch_assoc();
            if($countrow)
            {
                $count = $countrow['Count(FragenID)'];
                

                for ($i = 1; $i <= $count; $i++) {
                    $sql = "SELECT FragenID FROM t_FachFrageDef WHERE FachID = '$id'";
                    $frageidresult = $conn->query($sql);
                
                    if ($frageidresult) {
                        $frageid = -1;
                        $row = $frageidresult->fetch_assoc();
                        
                        if ($row) {
                            $frageid = $row['FragenID'];
                            
                            $sql = "SELECT Bez FROM t_fragedef WHERE FragenID = '$i'";
                            $frageresult = $conn->query($sql);
                
                            // Check if the second query was successful
                            if ($frageresult !== false) {
                                // Check if there are rows in the result set
                                if ($frageresult->num_rows > 0) {
                                    while ($frage = $frageresult->fetch_assoc()) {
                                        echo '<p class="questions hidden"><input type="checkbox" name="checkbox' . $i . '" id="check1" class="checkB">' . $frage['Bez'] . '</p><p></p>';
                                    }
                                } else {
                                    echo "No rows found for FragenID: $frageid";
                                }
                            } else {
                                echo "Error executing the second query: " . $conn->error;
                            }
                        }
                    } else {
                        echo "Error executing the first query: " . $conn->error;
                    }
                }
            }



        }


    }
}




?>