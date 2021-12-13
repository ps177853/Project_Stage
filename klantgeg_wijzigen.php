<?php

session_start();
$gn = $_SESSION['DeGebruikersnaam'];

 $conn = mysqli_connect("localhost", "root", "", "ixat"); 

$gebruikersnaam = $_POST['Gbnaam_wijzigen'];
$wachtwoord = $_POST['Wachtwoord_wijzigen'];
$naam = $_POST['Naam_wijzigen'];
$mobielnummer = $_POST['Mobiel_wijzigen'];
$mailadres = $_POST['Email_wijzigen'];

// Check connection
$sql = "UPDATE klant 
SET gebruikersnaam = '$gebruikersnaam', wachtwoord = '$wachtwoord', naam = '$naam', mobiel = '$mobielnummer', email = '$mailadres' 
WHERE gebruikersnaam = '$gn'";

$return = mysqli_query($conn,$sql);

header("Location: klantenpagina.php");


session_start();
session_destroy();
header('Location: inlogpagina.php');
exit;
?>
