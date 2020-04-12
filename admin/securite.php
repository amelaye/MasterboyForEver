<?
require ('../connection.php');
if (!link)
{
echo "Connexion refusée";
}

$requete = mysql_db_query($base, "select * from membre where id=\"$id\"", $link) or die (mysql_error());

if (mysql_num_rows ($requete)==0)
{
header ("Location : erreur.htm");
exit;
}

$pseudo_membre = mysql_result($requete,0,"pseudo");
?>