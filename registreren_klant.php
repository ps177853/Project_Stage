<?php
 $conn = mysqli_connect("localhost", "root", "", "ixat"); 

$gebruikersnaam = $_POST['Gebruikersnaam'];
$wachtwoord = $_POST['Wachtwoord'];
$naam = $_POST['Naam'];
$mobielnummer = $_POST['Mobielnummer'];
$mailadres = $_POST['E-mailadres'];

// Check connection
$sql = "INSERT INTO `ixat`.`klant` (`gebruikersnaam`, `wachtwoord`, `naam`, `mobiel`, `email`, `chauffeur_id`) 
VALUES ('$gebruikersnaam', '$wachtwoord', '$naam', '$mobielnummer', '$mailadres', '1')";

$return = mysqli_query($conn,$sql);

header("Location: inlogpagina.php");


?>

