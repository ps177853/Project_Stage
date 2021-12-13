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
            <td><a class="blue" href="homepage.php"> Home</a></td>
            <td><a href="chauffeurspagina.php"> Chauffeurs</a></td>
            <td><a href="klantenpagina.php"> Klanten</a></td>
            <td><a href="contactpagina.php"> Contact</a></td>
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

    <div class="homeimage_position">
        <img class="homeimage" src="project_afbeeldingen/homefoto.jpg" alt="home foto">
    </div>

    <?php 
        include 'teksten.php';
    ?>

    <table class="extra_tekst">
        <tr><td class="zij_vak"></td>
            <td class="tekst_vak" ><?php tekst_home(); ?></td>
            <td class="zij_vak"></td>
        </tr>
    </table>
</body>
</html>