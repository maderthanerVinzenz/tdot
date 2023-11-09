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

        //$timestamp=date_timestamp_get();
        //$trueTimestamp= gmdate("Y-m-d\TH:i:s\Z", $timestamp);
        $trueTimestamp = '2023-10-10';
        $fachID = 1;
        $persID = 1;

        $plz = $_POST['Pzahl'];
        if(isset($_POST['CheckSEW'])){
            $fachID = 1;
        }
        if(isset($_POST['CheckNWT'])){
            $fachID = 2;
        }
        if(isset($_POST['CheckINSY'])){
            $fachID = 3;
        }

        $conn = new mysqli($host, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if($fachID == 1){
            $sql1 = "Insert Into t_umfrage (TST, FachID, PersID, PLZ) Values($trueTimestamp, $fachID, $persID, $plz)";
            $conn->query($sql1);
        }
        if($fachID== 2){
            $sql2 = "Insert Into t_umfrage (TST, FachID, PersID, PLZ) Values($trueTimestamp, $fachID, $persID, $plz)";
            $conn->query($sql2);
        }
        if($fachID== 3){
            $sql3= "Insert Into t_umfrage (TST, FachID, PersID, PLZ) Values($trueTimestamp, $fachID, $persID, $plz)";
            $conn->query($sql3);
        }
        
    }
?>