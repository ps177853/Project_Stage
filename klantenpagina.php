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
            <td><a class="blue" href="klantenpagina.php"> Klanten</a></td>
            <td><a href="contactpagina.php"> Contact</a></td>
            <td><a href="inlogpagina.php"> Profiel</a></td>  
        </tr> 
    </table>

    <div class="titel">
        <span class="Aanmelden_klant">Wijzig uw gegevens!</span>
    </div>

    <div class="klant_image">
    <img class="klantafbeelding" src="project_afbeeldingen/klanten.png" alt="klant foto">
    </div>

    <table class="chauffeur_aanmelden">
        <form action="klantgeg_wijzigen.php" method="POST">

        <?php

$gn = $_SESSION['DeGebruikersnaam'];

 $conn = mysqli_connect("localhost", "root", "", "ixat"); 

// Check connection
$sql = "SELECT * FROM klant WHERE gebruikersnaam = '$gn'";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td><input type='text' name='Naam_wijzigen' id='poggers' value='".$row['naam']."' </td>"; 
    echo "<td><input type='text' name='Gbnaam_wijzigen' id='poggers' value='".$row['gebruikersnaam']."' </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><input type='text' name='Mobiel_wijzigen' id='poggers' value='".$row['mobiel']."' </td>"; 
    echo "<td><input type='text' name='Wachtwoord_wijzigen' id='poggers' value='".$row['wachtwoord']."' </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><input type='text' name='Email_wijzigen' id='poggers' value='".$row['email']."' </td>"; 
    echo "<td><input type='text' id='poggers' value='".$row['wachtwoord']."' </td>";
    echo "</tr>";
}
mysqli_close($conn);
?>

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

    <?php 
        include 'teksten.php';
    ?>

    <table class="extra_tekst_klant">
        <tr><td class="zij_vak"></td>
            <td class="tekst_vak" ><?php tekst_klant(); ?></td>
            <td class="zij_vak"></td>
        </tr>
    </table>


    <?php } else { ?>
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
        <span class="Aanmelden_klant">Registreer je nu als klant!</span>
    </div>

    <div class="klant_image">
    <img class="klantafbeelding" src="project_afbeeldingen/klanten.png" alt="klant foto">
    </div>

    <table class="chauffeur_aanmelden">
    <form action="registreren_klant.php" method="POST">

            <tr>
                <td><input name="Naam" type="text" size="30" placeholder=" Naam" required/></td>
                <td><input name="Gebruikersnaam" type="text" size="30" placeholder=" Gebruikersnaam" required/></td>
            </tr>
            <tr>
                <td><input name="Mobielnummer" type="tel" size="30" placeholder=" Mobiel nummer" required/></td>
                <td><input name="Wachtwoord" type="text" size="30" placeholder=" Wachtwoord" required/></td>
            </tr>
            <tr>
                <td><input name="E-mailadres" type="email" size="30" placeholder=" E-mailadres" required/></td>
                <td><input name="Herhaal wachtwoord" type="text" size="30" placeholder=" Herhaal wachtwoord" required/></td>
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
                <td><input class="button" name="Registreer" type="submit" value="Registreer!"/></td>
            </tr>

        </form>
    </table>

    <?php 
        include 'teksten.php';
    ?>

    <table class="extra_tekst_klant">
        <tr><td class="zij_vak"></td>
            <td class="tekst_vak" ><?php tekst_klant(); ?></td>
            <td class="zij_vak"></td>
        </tr>
    </table>

    <?php
    }
        ?>

</body>
</html>