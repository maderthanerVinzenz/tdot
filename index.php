<?php
    if (isset($_POST['Pzahl'])) {
        // Connect to the database


        $host = 'localhost'; // replace with your database host
        $username = 'root'; // replace with your database username
        $password = ''; // replace with your database password
        $dbname = 'project'; // replace with your database name
        // Create connection

        $trueTimestamp = '2023-10-10';
        $plz = $_POST['Pzahl'];
        $fragenID = 1;
        $benutzerFrage = "";
        $conn = mysqli_connect($host, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $timestamp=date_timestamp_get();
        $trueTimestamp= gmdate("Y-m-d\TH:i:s\Z", $timestamp);

        /*$sql = "Insert Into t_umfrage (TST, FragenID, PersID) Values($trueTimestamp, $FragenID, $PersID)";
        $sql += "\n Insert Into t_Persdef (PLZ) Values($plz)";
        $conn->query($sql);
        */

        $sql = "Insert Into t_person (PLZ) Values ($plz);";
        $conn->query($sql);
        $sql = "Select LAST_INSERT_ID() From t_person LIMIT 1;";
        $persID = $conn->query($sql);

        if(isset($POST['frage1']))
        {
            $benutzerFrage = isset($POST['frage1']);
            $sql = "Select Frage_ID From t_fragen Where Frage = $benutzerFrage;";
            $fragenID = $conn->query($sql);

            $sql = "Insert Into t_befragtZu (Frage_ID, Person_ID, Zeit) Values ($fragenID, $persID, $trueTimestamp)"

        }
        if(isset($POST['frage2']))
        {
            $benutzerFrage = isset($POST['frage2']);

        }
        if(isset($POST['frage3']))
        {
            $benutzerFrage = isset($POST['frage3']);

        }



        
    }
?>
