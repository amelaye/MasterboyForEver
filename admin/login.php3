<?
include ('conf.php3');


/*-----------------------------------------------------------------*/
/*	PROGRAMME PRINCIPAL			*/
/*-----------------------------------------------------------------*/



// ON SELECTIONNE L'ENREGISTREMENT CONTENANT LE LOGIN ET
// MOT DE PASSE SAISIS A LA PAGE INDEX.HTM
$select="select pseudo,passe from membre where pseudo=\"$pseudo_membre\" and passe=\"$passe_membre\"";
$requete = mysql_query($select) or die(mysql_error());

// SI AUCUN ENREGISTREMENT NE CORRESPOND
if(mysql_num_rows($requete)==0)
	{
	// REDIRECTION VERS LA PAGE ERREUR
	header("Location:$url_erreur");
	}

// SI LE LOGIN ET MOT DE PASSE SONT EXACTES	
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
		
	// MISE A JOUR DE L'IDENTIFIANT DANS LA TABLE 
	$select="update membre set id=\"$id\" where pseudo=\"$pseudo_membre\" and passe=\"$passe_membre\"";
	$requete = mysql_query($select) or die(mysql_error());
	{	
	
		header("Location:admin.php?id=$id");
		
	// REDIRECTION VERS UNE PAGE PROTEGEE AVEC L'IDENTIFIANT SERVANT DE CLE
	}	

// DECONNEXION MYSQL
mysql_close($db_link);
?>