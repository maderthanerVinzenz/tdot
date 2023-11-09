<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>HTL Waidhofen</title>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {            
            $timestamp=date_timestamp_get();
            $trueTimestamp= gmdate("Y-m-d\TH:i:s\Z", $timestamp);

            $plz = $_POST['Pzahl'];
            if(isset($_POST['Check1'])){
                $fachID1=1;
            }
            if(isset($_POST['Check2'])){
                $fachID2=2;
            }
            if(isset($_POST['Check3'])){
                $fachID3=3;
            }
            
             // Connect to the database
            $host = 'localhost'; // replace with your database host
            $username = 'root'; // replace with your database username
            $password = 'YOUR_PASSWORD_HERE'; // replace with your database password
            $dbname = 'loginDB'; // replace with your database name
            $conn = new mysqli($host, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            if($fachID1==1){
                $sql = "Insert Into t_ka fachID, plz, timestamp Values(`$fachID1`,`$plz`,`$trueTimestamp`)";
                $result = $conn->query($sql);
            }
            if($fachID2==2){
                $sql = "Insert Into t_ka fachID, plz, timestamp Values(`$fachID2`,`$plz`,`$trueTimestamp`)";
                $result = $conn->query($sql);
            }
            if($fachID3==3){
                $sql = "Insert Into t_ka fachID, plz, timestamp Values(`$fachID3`,`$plz`,`$trueTimestamp`)";
                $result = $conn->query($sql);
            }
               
            
        }

        

       
    ?>
    
    <div class="center">
        <div class="text">
            <h2 id="titelU">Umfrage Tag der offenen Tür 2023</h2>
            <p id="tit">Wir hoffen Ihnen hat der Besuch bei der HTL gefallen!</p>
            <p class="add">Für welches Fach würdest du dich am meisten Interresieren?: </p> 
            <input type="checkbox" id="Check1">SEW (Softwareentwicklung) <label class="CheckBText"></label>
            <input type="checkbox" id="Check2">NWT (Netzwerktechnik) <label class="CheckBText"></label>
            <input type="checkbox" id="Check3">INSY (Informationssysteme) <label class="CheckBText"></label>
            <p class="add">Postleitzahl: </p> <input type="text" id="Pzahl" class="InputBox">
            <p></p><button class="SubmitBtn" type="submit" name="submit">Submit</button>
        </div>

    </div>

    

</body>
<script>

    //Checkbox script 
    var checkbox1 = document.getElementById('Check1');
    var checkbox2 = document.getElementById('Check2');
    var checkbox3 = document.getElementById('Check3');



    checkbox1.addEventListener('change', function() {
        if (this.checked) {
            checkbox2.checked = false;
            checkbox3.checked = false;
        } 
    });

    checkbox2.addEventListener('change', function() {
        if (this.checked) {
            checkbox1.checked = false;
            checkbox3.checked = false;
        } 
    });

    checkbox3.addEventListener('change', function() {
        if (this.checked) {
            checkbox1.checked = false;
            checkbox2.checked = false;
        } 
    });
</script>

</html>