<?php
session_start();
$gn = $_SESSION['DeGebruikersnaam'];

 $conn = mysqli_connect("localhost", "root", "", "ixat"); 

$personen = $_POST['Personen'];
$datum = $_POST['Datum'];
$laadruimte = $_POST['Laadruimte'];
$tijd = $_POST['Tijd'];

// Check connection
$sql = "INSERT INTO `ixat`.`taxi_aanvraag` (`gebruikersnaam`, `datum_tijd`, `minimale_laadruimte`, `passagiers`, `latitude`, `longitude`, `chauffer_id`, `goedgekeurd`) 
VALUES ('$gn', '$datum $tijd', '$laadruimte', '$personen', '1', '1', '1', '1')";

$return = mysqli_query($conn,$sql);

header("Location: inlogpagina.php");

?>