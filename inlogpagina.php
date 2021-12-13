<!DOCTYPE html>
<html>
<meta charset="UTF-8"> 
<link rel="stylesheet" type="text/css" href="opmaak.css" />
<head>
</head>
<body>

<img class="ixatlogo" src="project_afbeeldingen/ixat.png" alt="Ixat LOGO">

<?php
            session_start();
    if(isset($_SESSION['IsIngelogd']) == "ja") { //You have to set that somewhere else just like $logged
    ?>
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
                <label class="aanvragen">Openstaande aanvragen</label>

                <?php
                
 $conn = mysqli_connect("localhost", "root", "", "ixat"); 

// Check connection
$sql = "SELECT datum_tijd, gebruikersnaam FROM ixat.taxi_aanvraag where goedgekeurd = 1 order by datum_tijd";

$result = mysqli_query($conn,$sql);
echo "<table>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['gebruikersnaam'] . "</td>";
    echo "<td>" . "</td>"; 
    echo "<td>" . $row['datum_tijd'] . "</td>"; 
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);


?>
                
            </div>

            <img class="ixatmap" src="project_afbeeldingen/map2.jpg" alt="Ixat LOGO">

            <table class="profiel_chauffeur">
            <form>


            <tr>
            <td><input class="button" name="accepteer_aanvraag" type="submit" value=" Accepteren!"/></td>
            <td><input class="button_red" name="weiger_aanvraag" type="submit" value=" Weigeren!"/></td></tr>
            </form>
            </table>




<?php } else { ?>
    <table class="tabknoppen">
        <tr>          
            <td><a href="homepage.php"> Home</a></td>
            <td><a href="chauffeurspagina.php"> Chauffeurs</a></td>
            <td><a href="klantenpagina.php"> Klanten</a></td>
            <td><a href="contactpagina.php"> Contact</a></td>
            <td><a class="blue" href="inlogpagina.php"> Inloggen</a></td>  
        </tr> 
    </table>

    <div class="inlogtekst">
        <span class="Aanmelden_klant">Inloggen</span>
    </div>

    <div class="klant_image">
    <img class="inlogafbeelding" src="project_afbeeldingen/taxi.png" alt="klant foto">
    </div>

    <table class="chauffeur_aanmelden">
        <form action="inlogcontrole.php" method="POST">

            <tr>
                <td><span class="inloggen">Gebruikersnaam</span></td>
                <td><input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam"></td>
            </tr>

            <tr>
                <td><span class="inloggen">Wachtwoord</span></td>
                <td><input type="text" name="wachtwoord" placeholder="Wachtwoord" required></td>
            </tr>

            <tr>
                <td></td>
                <td><input class="button" name="Inloggen" type="submit" value="Inloggen!" required/></td>
            </tr>

        </form>
    </table>

    <?php
    }
        ?>
</body>
</html>