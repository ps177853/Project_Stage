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
            <td><a class="blue" href="contactpagina.php"> Contact</a></td>
            <?php
            session_start();
    if(isset($_SESSION['IsIngelogd']) == "ja") { //You have to set that somewhere else just like $logged
    ?>
            <td><a href="inlogpagina.php"> Profiel</a></td> 
            <?php } else { ?>
            <td><a href="inlogpagina.php"> Inloggen</a></td> 
            <?php
                 }
            ?>
        </tr> 
    </table>

    <table class="informatie">
                 <tr><td class="tekstrand1">
                        Straatnaam: Seinpoststraat 8<br>
                        Postcode: 7766 BG Nunteren<br>
                        Telefoonnummer: 0808-2001833<br>
                        Mobielnummer: 06-93447567<br></td>
   
                <td><img src="project_afbeeldingen/contact.png" width="300px"></td> </tr>
            </table> 

    <table class="informatie">
                 <tr><td class="tekstrand2">Ons bedrijf is 24/7 bereikbaar voor vragen en andere kennisgeving, hierbij wensen wij uw een prettige reis met Ixat. </td>
   
                </tr>
            </table> 

</body>
</html>