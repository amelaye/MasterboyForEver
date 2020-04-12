<? 
if ($p=="verif")
{
include "config.php";
$req = mysql_query("SELECT password FROM zonem Where nom='$username'");
$pass2 = mysql_result($req,$i,"password");
if($pass2 != $password)
    {
    echo '<p>Mauvais login / password. Merci de recommencer</p><br><br>';
    exit;
    }
else
    {
    
    echo 'Vous etes bien logué<br>';
    echo("<a href='membres.php'>...Zone d' admin...</a><br><br>");
    // ici vous pouvez afficher un lien pour renvoyer 
    // vers la page d'acueil de votre espace membres
    }
}
?>