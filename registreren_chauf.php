<?php
 $conn = mysqli_connect("localhost", "root", "", "ixat"); 

 

$naam = $_POST['Naam'];
$merk = $_POST['Merk'];
$gebruikersnaam = $_POST['Gebruikersnaam'];
$mobielnummer = $_POST['Mobielnummer'];
$type = $_POST['Type'];
$wachtwoord = $_POST['Wachtwoord'];
$mailadres = $_POST['E-mailadres'];
$kenteken = $_POST['Kenteken'];
$rijbewijzen = $_POST['Rijbewijzen'];
$passagiers = $_POST['Passagiers'];
$laadruimte = $_POST['Laadruimte'];
$schade = $_POST['Schade'];

$Getid = "SELECT id FROM `ixat`.`auto` where aantal_passagiers = '$passagiers'";
$return = mysqli_query($conn,$Getid);
while($row = mysqli_fetch_array($return)){

$gebrid = $row['id'];//haalt het id op
}


// Check connection
$sql = ["INSERT INTO `ixat`.`auto` (`merk`, `type`, `kenteken`, `aantal_passagiers`, `laadruimte`) 
VALUES ('$merk', '$type', '$kenteken', '$passagiers', '$laadruimte')",

"INSERT INTO `ixat`.`chauffeur` (`auto_id`, `schadevrije_jaren`, `latitude`, `longitude`, `vrij`) 
VALUES ('$gebrid', '$schade', '1', '1', '1')",

"INSERT INTO `ixat`.`klant` (`gebruikersnaam`, `wachtwoord`, `naam`, `mobiel`, `email`, `chauffeur_id`) 
VALUES ('$gebruikersnaam', '$wachtwoord', '$naam', '$mobielnummer', '$mailadres', '1')",

"INSERT INTO `ixat`.`rijbewijs` (`naam`) 
VALUES ('$rijbewijzen')"];

foreach ($sql as $sql){
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

header("Location: inlogpagina.php");

?>
