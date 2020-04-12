<?
include ('securite.php'); 
########################################
### Requête de modification de pages ###
########################################

// information pour la connection à la DB 

 include "../connection.php";
 
// Vérification de la validité de la connexion MYSQL    
  if($link){    
     // Requete de modification MYSQL    
     $requete = "UPDATE membres SET id=\"$id\",username=\"$pseudo\",password=\"$passe\",email=\"$email\", date_reg=\"$date\", clicks=\"$clicks\", message=\"$message\" where id=\"$id\"";    
echo $requete;
exit;
	 // Execution de cette requete dans la base essai    
     $execution = mysql_query($requete) or die (mysql_eror());    
     header("Location: index.php");      
   	 }    
// La connexion Mysql est indisponible    
else echo "<HTML><HEAD><TITLE>Erreurs</TITLE></HEAD><BODY><font face='Verdana' size='2'>Vous avez du faire une erreur : Ce problème se pose soit : <br>- Parce que vous n'avez pas créer la base, ni la table MYSQL;<br>- Parce que vous n'avez pas changé le Mot de passe d'accès a MYSQL dans ce programme (Par défaut, c'est Host : 'localhost', login : 'root', MDP : '[vide]';<br>- Soit vous n'avez pas lancé MYSQL.</font></body></html>";        
// on ferme la connexion à mysql    
mysql_close();    
?>    