<!DOCTYPE html>
<html>
<meta charset="UTF-8"> 
<link rel="stylesheet" type="text/css" href="opmaak.css" />
<head>
    <meta charset="UTF-8">
    <meta name="viewpoort" content="width=device-width, initial-scale=1.0">
<script src="functies.js">

</script>

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
            <td><a class="blue" href="chauffeurspagina.php"> Chauffeurs</a></td>
            <td><a href="klantenpagina.php"> Klanten</a></td>
            <td><a href="contactpagina.php"> Contact</a></td>
            <td><a href="inlogpagina.php"> Profiel</a></td>  
        </tr>
    </table>

    <table class="chauffeur_aanmelden">
        <form>
            <tr>
                <td><span class="Aanmelden_chauffeur">Uw gegevens</span></td>
                <td></td> 
                <td></td>
            </tr>
            <tr>
                <td><input name="Naam" type="text" size="30"/></td>
                <td><input class="red" name="Merk" type="text" size="30"/></td>
                <td></td>
            </tr>
            <tr>
                <td><input name="Mobielnummer" type="tel" size="30"/></td>
                <td><input class="red" name="Type" type="text" size="30"/></td>
                <td></td>
            </tr>
            <tr>
                <td><input name="E-mailadres" type="email" size="30" /></td>
                <td><input class="red" name="Kenteken" type="text" size="30" /></td>
                <td></td>
            </tr>
            <tr>
                <td><select class="Selection" name="Rijbewijzen" id="Rijbewijs">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select></td>
                <td><input name="passagiers" type="text" size="30" /></td>
                <td></td>
            </tr>
                <td></td>
                <td><input class="red" name="Laadruimte" type="text" size="30" /></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><input name="Schade" type="text" size="30"/></td>
                <td><input class="button" name="Update" type="submit" value="Update!"/></td>
            </tr>

        </form>
    </table>

    <?php 
                include 'teksten.php';
            ?>

            <table class="extra_tekst_chauf">
                <tr><td class="zij_vak"></td>
                    <td class="tekst_vak" ><?php tekst_chauffeur(); ?></td>
                    <td class="zij_vak"></td>
                </tr>
            </table>

    

    <?php } else { ?>
        <table class="tabknoppen">
                <tr>          
                    <td><a href="homepage.php"> Home</a></td>
                    <td><a class="blue" href="chauffeurspagina.php"> Chauffeurs</a></td>
                    <td><a href="klantenpagina.php"> Klanten</a></td>
                    <td><a href="contactpagina.php"> Contact</a></td>
                    <td><a href="inlogpagina.php"> Inloggen</a></td> 
                </tr> 
            </table>

            <table class="chauffeur_aanmelden">
                <form action="registreren_chauf.php" method="POST">
                    <tr>
                        <td><span class="Aanmelden_chauffeur">Meld je nu aan!</span></td>
                        <td></td> 
                        <td></td>
                    </tr>
                    <tr>
                        <td><input name="Naam" type="text" size="30" placeholder=" Naam" required/></td>
                        <td><input name="Merk" type="text" size="30" placeholder=" Merk auto" required/></td>
                        <td><input name="Gebruikersnaam" type="text" size="30" placeholder=" Gebruikersnaam" required/></td>
                    </tr>
                    <tr>
                        <td><input name="Mobielnummer" type="tel" size="30" placeholder=" Mobiel nummer" required/></td>
                        <td><input name="Type" type="text" size="30" placeholder=" Type auto" required/></td>
                        <td><input name="Wachtwoord" type="text" size="30" placeholder=" Wachtwoord" required/></td>
                    </tr>
                    <tr>
                        <td><input name="E-mailadres" type="email" size="30" placeholder=" E-mailadres" required/></td>
                        <td><input name="Kenteken" type="text" size="30" placeholder=" Kenteken" required/></td>
                        <td><input name="Herhaal wachtwoord" type="text" size="30" placeholder=" Herhaal wachtwoord" required/></td>
                    </tr>
                    <tr>
                        <td><select class="Selection" name="Rijbewijzen" id="Rijbewijs">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select></td>
                        <td><input name="Passagiers" type="text" size="30" placeholder=" Aantal passagiers" required/></td>
                        <td></td>
                    </tr>
                        <td></td>
                        <td><input name="Laadruimte" type="text" size="30" placeholder=" Laadruimte (in liters)" required/></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input name="Schade" type="text" size="30" placeholder=" Schade vrije jaren" required/></td>
                        <td><input class="button" name="Registreer" type="submit" value=" Registreer!"/></td>
                    </tr>
                </form>
            </table>

            <?php 
                include 'teksten.php';
            ?>

            <table class="extra_tekst_chauf">
                <tr><td class="zij_vak"></td>
                    <td class="tekst_vak" ><?php tekst_chauffeur(); ?></td>
                    <td class="zij_vak"></td>
                </tr>
            </table>

    <?php
    }
        ?>

</body>
</html>