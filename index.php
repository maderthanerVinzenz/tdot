<?php
    if (isset($_POST['Pzahl'])) {
        // Connect to the database


        $host = 'localhost'; // replace with your database host
        $username = 'root'; // replace with your database username
        $password = ''; // replace with your database password
        $dbname = 'project'; // replace with your database name
        // Create connection
        echo($host);
        echo($username);
        echo($password);
        echo($dbname);
        $conn = mysqli_connect($host, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $timestamp=date_timestamp_get();
        $trueTimestamp= gmdate("Y-m-d\TH:i:s\Z", $timestamp);

        $plz = $_POST['Pzahl'];
        if(isset($_POST['CheckSEW'])){
            $fachID1=1;
        }
        if(isset($_POST['CheckNWT'])){
            $fachID2=2;
        }
        if(isset($_POST['CheckINSY'])){
            $fachID3=3;
        }

        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com');";
        $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Mary', 'Moe', 'mary@example.com');";
        $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Julie', 'Dooley', 'julie@example.com')";

        $persID1 = 1;

        $conn = new mysqli($host, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if($fachID1==1){
            $sql = "Insert Into t_umfrage (TST, FachID, PersID, PLZ) Values(`$trueTimestamp`,`$fachID1`,`$persID1`,`$plz`)";
            $result = $conn->query($sql);
        }
        if($fachID2==2){
            $sql = "Insert Into t_umfrage (TST, FachID, PersID, PLZ) Values(`$trueTimestamp`,`$fachID1`,`$persID1`,`$plz`)";
            $result = $conn->query($sql);
        }
        if($fachID3==3){
            $sql = "Insert Into t_umfrage (TST, FachID, PersID, PLZ) Values(`$trueTimestamp`,`$fachID1`,`$persID1`,`$plz`)";
            $result = $conn->query($sql);
        }
        
    }
?>
 