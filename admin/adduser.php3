<html>
<head>
<title>WebJeff - Espace membre</title>
</head>
<body>
<font face="Verdana" size="2">
<center>
<?
require("conf.php3");

switch($action) {
/*-----------------------------------------------------------------*/
/*	AJOUT DANS MySQL			*/
/*-----------------------------------------------------------------*/

case "add";

// CONNEXION A LA BASE DE DONNEE
$db_link = @mysql_connect($sql_serveur,$sql_user,$sql_passwd);
if(!$db_link) {echo "Connexion impossible à la base de données <b>$sql_bdd</b> sur le serveur <b>$sql_server</b><br>Vérifiez les paramètres du fichier conf.php3"; exit;}

// TEST SUR LES VALEURS SAISIES
if($pseudo_membre==""){echo "Vous devez choisir un pseudo<br><br><a href=\"javascript:window.history.back()\">Retour</a>";exit;}
if($passe_membre==""){echo "Vous devez choisir un mot de passe<br><br><a href=\"javascript:window.history.back()\">Retour</a>";exit;}
// CHAMPS SUPLEMENTAIRES, inspirez-vous des lignes suivantes. Pour qu'un champs soit facultatif, omettez la ligne.
//if($email==""){echo "Vous n'avez pas saisi votre email<br><br><a href=\"javascript:window.history.back()\">Retour</a>";exit;}
//if($ville==""){echo "Vous n'avez pas saisi la ville<br><br><a href=\"javascript:window.history.back()\">Retour</a>";exit;}

// ON VERIFIE SI CE PSEUDO EXISTE DEJA
$requete=mysql_db_query($sql_bdd,"select * from membre where pseudo=\"$pseudo_membre\"",$db_link) or die(mysql_error());
$num=mysql_num_rows($requete);
if($num!=0)
	{
	echo "Ce pseudo existe déjà, veuillez en choisir un autre<br><br><a href=\"javascript:window.history.back()\">Retour</a>";
	}
else
	{
	// CREATION D'UN IDENTIFIANT ALEATOIRE
	$taille = 20;
	$lettres = "abcdefghijklmnopqrstuvwxyz0123456789";
	srand(time());
	for ($i=0;$i<$taille;$i++)
		{
		$id.=substr($lettres,(rand()%(strlen($lettres))),1);
		}
		
	// ON RECHERCHE L'ID MAXIMUM DE LA TABLE
	$requete=mysql_db_query($sql_bdd,"select max(id_membre) from membre",$db_link) or die(mysql_error());
	$idmax=mysql_result($requete,0,"max(id_membre)");
	
	// INSERTION DANS LA TABLE 
	$idnew=$idmax+1;
	$requete=mysql_db_query($sql_bdd,"insert into membre values ($idnew,\"$id\",\"$pseudo_membre\",\"$passe_membre\")",$db_link) or die(mysql_error());
	// CHAMPS SUPLEMENTAIRES, complétez la requête précédente en ajoutant les variables et en respectant l'ordre des colonnes de la table. Exemple :
	// insert into membre values ($idnew,\"$id\",\"$pseudo_membre\",\"$passe_membre\",\"$email\",\"$ville\")
	
	// REDIRECTION VERS LA PAGE D'ENTREE DE L'ESPACE MEMBRE
	echo "Merci, vous êtes bien enregistré. Cliquez <a href=\"$zone_membre?id=$id\">ici</a> pour entrer dans votre espace privé.";
	}

// DECONNEXION MYSQL
mysql_close($db_link);

break;


/*-----------------------------------------------------------------*/
/*	AFFICHAGE DU FORMULAIRE			*/
/*-----------------------------------------------------------------*/

default;
echo "	<h2>Nouveau membre</h2>
	<form action=\"adduser.php3\" method=\"post\">
	<input type=\"hidden\" name=\"action\" value=\"add\">
	Chosissez un pseudo<br><input type=\"text\" name=\"pseudo_membre\"><br>
	Chosissez un mot de passe<br><input type=\"password\" name=\"passe_membre\"><br>
	<! -- CHAMPS SUPLEMENTAIRES, décommentez les 2 lignes suivantes -->
	<!-- Votre email<br><input type=\"text\" name=\"email\"><br> -->
	<!-- Ville<br><input type=\"text\" name=\"ville\"><br> -->
	<input type=\"submit\" value=\"Envoyer\">
	</form>
	<font face=\"Verdana\" size=\"2\"><a href=\"index.htm\">Se connecter</a></font>";
break;
}
?>
</center>
</font>
</body>
</html>