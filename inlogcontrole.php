<?php
session_start();
$_SESSION['IsIngelogd'] = 'nee';


    echo "<h3>Inlogpagina</h3>";
if (isset($_POST["gebruikersnaam"]))
{
    $gn = $_POST["gebruikersnaam"];
    $ww = $_POST["wachtwoord"];

    $_SESSION['DeGebruikersnaam'] = $gn;
    
    $connection = mysqli_connect("localhost", "root", "", "ixat"); 
    
    $sql = "SELECT gebruikersnaam, wachtwoord FROM klant WHERE gebruikersnaam = '$gn'";

    if (!($result = mysqli_query ($connection,$sql)))
        {
            echo "Invoeren mislukt <br/>";
            die("Foutmelding : " . mysqli_error($connection));
        }
        else
        {
            $gebrgegevens = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($gebrgegevens['wachtwoord'] == $ww)
            {         
                $_SESSION['IsIngelogd'] = 'ja';      
                header("Location: homepage.php");
            }
                

            
            else
            {
                
                $_SESSION['IsIngelogd'] = 'nee';
                header("Location: inlogpagina.php");
            }
        }
}
?>