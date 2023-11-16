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
        $persID = 1;

        $conn = mysqli_connect($host, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $timestamp=date_timestamp_get();
        $trueTimestamp= gmdate("Y-m-d\TH:i:s\Z", $timestamp);

        $sql = "Insert Into t_umfrage (TST, FragenID, PersID) Values($trueTimestamp, $FragenID, $PersID)";
        $sql += "\n Insert Into t_Persdef (PLZ) Values($plz)";
        $conn->query($sql);

        
    }
?>
