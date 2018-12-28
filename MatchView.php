<?php
    $textbox = '<input type="text" name="MatchData">';
    
    $conn = mysqli_connect("localhost", "id6842615_matchscouting", "MatchScouting", "id6842615_matchscouting");
    
    $query = "SELECT * FROM MatchScouting WHERE MatchNumber = '$_POST[MatchData]'";
    $result = mysqli_query($conn, $query);
?>

<html>
<head>
	<title>Match Scouting Info</title>
	<style>
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		
		img {
		    position: relative;
		    left: 500px;
		}
		
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		
		.data-table caption {
			margin: 7px;
		}
		
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}
		
		.data-table tbody td {
			color: #353535;
		}
		
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}
		
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		
		.data-table tfoot th:first-child {
			text-align: left;
		}
		
		.data-table tbody td:empty {
			background-color: #ffcccc;
		}
	    </style>
	</head>
	
	<body>
	<h1>Stampede 3630 Match Scouting Info</h1>
	<table class="data-table">
		<caption class="title">Match Scouting Info</caption>
		<thead>
			<tr>
				<th>TeamNumber</th>
				<th>MatchNumber</th>
				<th>CrossLine</th>
				<th>AutoSwitch</th>
				<th>AutoScale</th>
				<th>Switch</th>
				<th>Scale</th>
				<th>Vault</th>
				<th>Park</th>
				<th>Climb</th>
                <th>WinLose</th>
				<th>Notes</th>
			</tr>
		</thead>
		<tbody>
		    
		<?php
		    while ($rowval = mysqli_fetch_array($result)) {
		         echo "<tr>";
		            echo "<td>" . $rowval['TeamNumber'] . "</td>";
		            echo "<td>" . $rowval['MatchNumber'] . "</td>";
		            echo "<td>" . $rowval['CrossLine'] . "</td>";
		            echo "<td>" . $rowval['AutoSwitch'] . "</td>";
		            echo "<td>" . $rowval['AutoScale'] . "</td>";
		            echo "<td>" . $rowval['Switch'] . "</td>";
		            echo "<td>" . $rowval['Scale'] . "</td>";
		            echo "<td>" . $rowval['Vault'] . "</td>";
		            echo "<td>" . $rowval['Park'] . "</td>";
		            echo "<td>" . $rowval['Climb'] . "</td>";
                    echo "<td>" . $rowval['WinLose'] . "</td>";
		            echo "<td>" . $rowval['Notes'] . "</td>";
		         echo "</tr>";
		    }
		?>
    </body>
    
    <br> <br> <br>
	
	<img src="https://i.imgflip.com/2pw4dn.jpg">
</html>