<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxen zählen</title>
</head>
<body>
    <form action="test.php" method="post">
        <?php
        // Beispiel: Erstellen von fünf Checkboxen in einer Schleife
        

        $host = 'localhost'; // replace with your database host
        $username = 'root'; // replace with your database username
        $password = ''; // replace with your database password
        $dbname = 'd_Fragen'; // replace with your database name
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

        

        $sql="Select FachID From t_Fachdef Where Fach == 'SEW'"
        $id = $conn->query($sql);

        $sql1 = "Select Count(Bez) From t_FachFrageDef Where FachID== $id";
        $count = $conn->query($sql1);

        
        for ($i = 1; $i <= count; $i++) {
            $sql="  Select FragenID From t_FachFragenDef Where FachID == '$id' AND FachID == $i;"
            $frageid = $conn->query($sql); 
            if($frageid!=null){
                $sql="Select Bez From t_Fragendef Where FragenID == '$frageid'"
                $frage = $conn->query($sql);           
                if($frage!= null){
                    echo '<input type="checkbox" name="checkbox' . $i . '" value="1"> ' $frage '<br>';
                }
            }
            
        }

        $sql="Select FachID From t_Fachdef Where Fach == 'NWT'"
        for ($i = 1; $i <= count; $i++) {
            $sql2 = "Select Bez from t_Fragedef Where FragenID == $i";
            $frage = $conn->query($sql2);

            echo '<input type="checkbox" name="checkbox' . $i . '" value="1"> ' $frage '<br>';
        }
        ?>
        <input name='submit' type="submit" value="Submit">
    </form>
</body>
</html>
