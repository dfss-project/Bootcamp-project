<?php


try {
    $conn = new PDO("mysql:host=localhost;dbname=dfss", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->query("SELECT * FROM huur ORDER BY steden");
    echo "<table border=1 id=tab cellpadding=5>";
	while ($row = $stmt->fetch()) {
        echo "<tr>";
		echo "<td>". $row['steden'] . " </td><td> " . $row['prijs'] ."</td><td>". $row['woonkamers'] ."</td><td>". $row['slaapkamers'];
		echo "</tr>";
	}	
        
    $sql = "INSERT INTO huur (steden, prijs, woonkamers, slaapkamers) VALUES ('Enschede', 800, 3, 5)";
    $conn->exec($sql);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;	

	
?>




