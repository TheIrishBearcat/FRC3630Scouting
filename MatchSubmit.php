<?php
    $conn = mysqli_connect("localhost", "id6842615_matchscouting", "MatchScouting", "id6842615_matchscouting");
    
    $TeamNumber = $_POST['TeamNumber'];
    $MatchNumber = $_POST['MatchNumber'];
    $CrossLine = $_POST['CrossLine'];
    $AutoSwitch = $_POST['autoSwitch'];
    $AutoScale = $_POST['autoScale'];
    $Switch = $_POST['switch'];
    $Scale = $_POST['scale'];
    $Vault = $_POST['vault'];
    $Park = $_POST['Park'];
    $Climb = $_POST['Climb'];
	$WinLose = $_POST['WinLose'];
    $Notes = $_POST['Notes'];
    
    $sql = "INSERT INTO MatchScouting (TeamNumber, MatchNumber, CrossLine, AutoSwitch, AutoScale, Switch, Scale, Vault, Park, Climb, WinLose, Notes) VALUES ('$TeamNumber','$MatchNumber', '$CrossLine', '$AutoSwitch', '$AutoScale', '$Switch', '$Scale', '$Vault', '$Park', '$Climb', '$WinLose', '$Notes')";
    
    if ($conn -> query($sql) === TRUE) {
        echo "New record created successfully";
    }
    
    else {
        echo "Error: " . $sql . "<br>" . $conn -> error;
    }
?>

