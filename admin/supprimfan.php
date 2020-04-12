<?
require ('../connection.php');
include ('securite.php'); 
########################################
### Requête de modification de pages ###
########################################

// information pour la connection à la DB 
include ('../connection.php');

// Requête de récup d'après le numéro ...
$select = "select * from membres where id=$id";
$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
$ligne = mysql_fetch_array($requete);

// Vérification de la validité de la connexion MYSQL    
  if($link){    
     // Requete de modification MYSQL    
	 
    $requete = "delete from membres where id=$id";   
	
     // Execution de cette requete dans la base essai    
    $execution = mysql_query($requete) or die ('error :' .mysql_error());    
   // header("Location:apercu.php");      
   	header("Location: index.php");      
	 }    
// La connexion Mysql est indisponible    
else 
{
echo "Ta gueule !";  
}      
// on ferme la connexion à mysql    
mysql_close();    
?>    