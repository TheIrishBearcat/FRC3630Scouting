<?php
    $conn = mysqli_connect("localhost", "id6842615_scouting", "Scouting", "id6842615_scouting");
   
    $TeamNumber = $_POST['TeamNumber'];
    $DriveTrainType = $_POST['DriveTrainType'];
    $AutoLine = $_POST['AutoLine'];
    $AutoSwitch = $_POST['AutoSwitch'];
    $AutoScale = $_POST['AutoScale'];
    $Climb = $_POST['Climb'];
    $Switch = $_POST['Switch'];
    $Scale = $_POST['Scale'];
    $Vault = $_POST['Vault'];
    $Notes = $_POST['Notes'];
    
    $sql = "INSERT INTO Scouting (TeamNumber, DriveTrainType, AutoLine, AutoSwitch, AutoScale, Climb, Switch, Scale, Vault, Notes) VALUES ('$TeamNumber','$DriveTrainType', '$AutoLine', '$AutoSwitch', '$AutoScale', '$Climb', '$Switch', '$Scale', '$Vault', '$Notes')";
    
    if ($conn -> query($sql) === TRUE) {
        echo "New record created successfully";
    }
    
    else {
        echo "Error: " . $sql . "<br>" . $conn -> error;
    }
?>

