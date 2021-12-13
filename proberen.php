<?php
session_start();
$gn = $_SESSION['DeGebruikersnaam'];

 $conn = mysqli_connect("localhost", "root", "", "ixat"); 

// Check connection
$sql = "SELECT * FROM klant WHERE gebruikersnaam = '$gn'";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    echo "<table>";
    echo "<tr>";
    echo "<td><input type='text' name='poggers' id='poggers' value='".$row['naam']."' </td>"; 
    echo "<td><input type='text' name='poggers' id='poggers' value='".$row['gebruikersnaam']."' </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><input type='text' name='poggers' id='poggers' value='".$row['mobiel']."' </td>"; 
    echo "<td><input type='text' name='poggers' id='poggers' value='".$row['wachtwoord']."' </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><input type='text' name='poggers' id='poggers' value='".$row['email']."' </td>"; 
    echo "<td><input type='text' name='poggers' id='poggers' value='".$row['wachtwoord']."' </td>";
    echo "</tr>";
    echo "</table>";
}

mysqli_close($conn);
?>