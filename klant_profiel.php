<!DOCTYPE html>
<html>
<meta charset="UTF-8"> 
<link rel="stylesheet" type="text/css" href="opmaak.css" />
<head>
</head>
<body>

<img class="ixatlogo" src="project_afbeeldingen/ixat.png" alt="Ixat LOGO">

        <table class="tabknoppen">
                <tr>          
                    <td><a href="homepage.php"> Home</a></td>
                    <td><a href="chauffeurspagina.php"> Chauffeurs</a></td>
                    <td><a href="klantenpagina.php"> Klanten</a></td>
                    <td><a href="contactpagina.php"> Contact</a></td>
                    <td><a class="blue" href="inlogpagina.php"> Profiel</a></td>  
                </tr> 
                <tr>          
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="uitloggen.php"> Uitloggen</a></td>  
                </tr>
            </table>

            <div class="profielkeuze">
                <select class="Selection" name="profielkeuze" id="profielkeuze" onchange="document.location.href=this.value">
                        <option selected value="">Kies uw profiel</option>
                        <option value="klant_profiel.php">Klant</option>
                        <option value="inlogpagina.php">Chauffeur</option>
                </select>
            </div>

            <div class="aanvragen_openstaand">
                <label class="aanvragen">Uw rithistorie</label>

                <?php
                session_start();
                $gn = $_SESSION['DeGebruikersnaam'];
                
 $conn = mysqli_connect("localhost", "root", "", "ixat"); 

// Check connection
$sql = "SELECT datum_tijd FROM ixat.taxi_aanvraag where goedgekeurd = 2 AND gebruikersnaam = '$gn' order by datum_tijd";

$result = mysqli_query($conn,$sql);
echo "<table>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['datum_tijd'] . "</td>"; 
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);


?>
                
            </div>

            <img class="ixatmap" src="project_afbeeldingen/map2.jpg" alt="Ixat LOGO">

            <table class="profiel_chauffeur">
                <form action="taxi_verzoek.php" method="POST">
                    <tr>
                    <td><input name="Personen" type="text" size="30" placeholder="Aantal personen" /></td>
                    <td><input type="date" id="datum" name="Datum" required></td>
                    </tr>

                    <tr>
                    <td><input name="Laadruimte" type="text" size="30" placeholder="Minimale laadruimte" /></td>
                    <td><input type="time" id="tijd" name="Tijd" required></td>
                    </tr>

                    <tr><td></td></tr>

                    <tr>
                    <td><input class="button" name="verzoek_aanvraag" type="submit" value=" Verzoek indienen!"/></td></tr>
                </form>
            </table>




</body>
</html>