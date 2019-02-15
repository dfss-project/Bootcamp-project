
<!DOCTYPE html>
<head>
    <style>
        input::-webkit-inner-spin-button,
        input::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }
    
    </style>
</head>
<body>
    <form action="dbhuistoevoegen.php" method="POST">
        <input name="steden" placeholder="Zoek op plaats">
        <input name="huurprijs" type="number" placeholder="Huurprijs">
        <input name="slaapkamers" type="number" placeholder="Aantal slaapkamers">
        <input name="oppervlakte" type="number" placeholder="Oppervlakte">
        <button type="submit">Voeg toe</button>
    </form>   
</body>
<?php

$steden = $_POST['steden'];
$huurprijs = $_POST['huurprijs'];
$slaapkamers = $_POST['slaapkamers'];
$oppervlakte = $_POST['oppervlakte'];

try {
    $conn = new PDO("mysql:host=localhost;dbname=dfss", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare('INSERT INTO huizen (steden, huurprijs, slaapkamers, oppervlakte) VALUES (:fsteden, :fhuurprijs, :fslaapkamers, :foppervlakte)');

    $statement->execute([
    'fsteden' => $steden,
    'fhuurprijs' => $huurprijs,
    'fslaapkamers' => $slaapkamers,
    'foppervlakte' => $oppervlakte
    ]);
	
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
	
$conn = NULL;

// header("Location: index.php");


?>



</html>
