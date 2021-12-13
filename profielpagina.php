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
            <td><a href="inlogpagina.php"> Inloggen</a></td> 
        </tr> 
    </table>

    <?php 
        include 'teksten.php';
    ?>

    <table class="extra_tekst_chauf">
        <tr><td class="zij_vak"></td>
            <td class="tekst_vak" ><?php tekst_profiel_chauf(); ?></td>
            <td class="zij_vak"></td>
        </tr>
    </table>

</body>
</html>