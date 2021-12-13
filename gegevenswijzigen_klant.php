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
            <td><a class="blue" href="klantenpagina.php"> Klanten</a></td>
            <td><a href="contactpagina.php"> Contact</a></td>
            <td><a href="inlogpagina.php"> Inloggen</a></td>  
        </tr> 
    </table>

    <div class="titel">
        <span class="Aanmelden_klant">Wijzig uw gegevens!</span>
    </div>

    <div class="klant_image">
    <img class="klantafbeelding" src="project_afbeeldingen/klanten.png" alt="klant foto">
    </div>

    <table class="chauffeur_aanmelden">
        <form>

            <tr>
                <td><input name="Naam" type="text" size="30" /></td>
                <td><input name="GebruikersNaam" type="text" size="30" /></td>
            </tr>
            <tr>
                <td><input name="Mobielnummer" type="tel" size="30" /></td>
                <td><input name="Wachtwoord" type="text" size="30" /></td>
            </tr>
            <tr>
                <td><input name="E-mailadres" type="email" size="30" /></td>
                <td><input name="Herhaal wachtwoord" type="text" size="30" /></td>
            </tr>

            <tr>
                <td></td> 
                <td></td>
            </tr>

            <tr>
                <td></td> 
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td><input class="button" name="Update_klant" type="submit" value="Update!"/></td>
            </tr>

        </form>
    </table>


</body>
</html>