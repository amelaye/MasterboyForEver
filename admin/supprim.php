<?
include ('securite.php'); 

########################################
### Requête de modification de pages ###
########################################
$Num = $_REQUEST["Num"];
// information pour la connection à la DB 
include ('../connection.php');

// Requête de récup d'après le numéro ...
$select = 'select * from pages where Num='.$Num.'';
$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
$ligne = mysql_fetch_array($requete);

// Vérification de la validité de la connexion MYSQL    
  if($link){    
     // Requete de modification MYSQL    
	 
    $requete = 'delete from pages where Num='.$Num.'';   
	
     // Execution de cette requete dans la base essai    
    $execution = mysql_query($requete) or die ('error :' .mysql_error());    
   // header("Location:apercu.php");      
   	header("Location: index.php&id=".$id."");      
	 }    
// La connexion Mysql est indisponible    
else 
{
echo "Ta gueule !";  
}      
// on ferme la connexion à mysql    
mysql_close();    
?>    