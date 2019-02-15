
<body>

<<h2>Steden en huizen</h2>

<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=dfss", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $conn->query("SELECT * FROM huizen");
	while ($row = $stmt->fetch()) {
    echo "<LI>" . $row['id'] . " - ";
    echo $row['steden'] . " - ";
    echo $row['huurprijs'] . " - ";
    echo $row['slaapkamers'] . " - ";
    echo $row['oppervlakte'] . " - ";
    echo "</LI>";
	}	
		
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;		
	
?>

</div>

</body>