<?
require("conf.php3");

// CONNEXION MYSQL
$db_link = @mysql_connect($sql_serveur,$sql_user,$sql_passwd);
if(!$db_link) {echo "Connexion impossible à la base de données <b>$sql_bdd</b> sur le serveur <b>$sql_server</b><br>Vérifiez les paramètres du fichier conf.php3"; exit;}

// SELECTION DE L'ENREGISTREMENT CONTENANT L'ID EN COURS
$requete=mysql_db_query($sql_bdd,"select * from membre where id=\"$id\"",$db_link) or die(mysql_error());

// SI L'ID N'EXISTE PAS
if(mysql_num_rows($requete)==0)
	{
	// REDIRECTION PAGE ERREUR
	header("Location:$url_erreur");
	exit;
	}

// LIGNE FACULTATIVE : RECUPERATION DU PSEUDO
$pseudo_membre=mysql_result($requete,0,"pseudo");
// CHAMPS SUPLEMENTAIRES
// Si vous avez ajouté des champs dans la table SQL, inspirez-vous de la ligne précédente pour récupérer leur valeur. Exemple :
//$email=mysql_result($requete,0,"email");
//$ville=mysql_result($requete,0,"ville");
	
// DECONNEXION MYSQL	
mysql_close($db_link);
?>
<html>
<head>
<title>WebJeff - Espace membre</title>
</head>
<body bgcolor="#FFFFFF" text="#000000">
<p align="center"><b><font face="Verdana" size="3">ESPACE 
  MEMBRE</font></b></p>
<p align="center">&nbsp;</p>
<p align="center"><font size="2" face="Verdana">
Voici une page prot&eacute;g&eacute;e par login et mot de passe !<br><br>
Votre pseudo : <b><? echo "$pseudo_membre"; ?></b><br><br>
Exemple de lien vers une autre page protégée :<br>
<a href="pageprotege.php3?id=<? echo "$id"; ?>">AUTRE PAGE MEMBRE</a><br>
(ce lien ne fonctionne pas car la page n'existe pas, le code est donné à titre d'exemple).
<br><br>

<!-- CHAMPS SUPLEMENTAIRES, décommentez les lignes suivantes -->
<!-- Votre email : <b><? echo "$email"; ?></b><br> -->
<!-- Votre ville : <b><? echo "$ville"; ?></b><br> -->

  </font></p>
</body>
</html>