<? include ('securite.php'); 
########################################
### Requ�te de modification de pages ###
########################################

// information pour la connection � la DB 

 include "../connection.php";

// V�rification de la validit� de la connexion MYSQL    
  if($link){    
     // Requete de modification MYSQL    
     $requete = "UPDATE pages SET Titre=\"$Titre\",TitrePage=\"$TitrePage\",Rubrique=\"$Rubrique\",Contenu=\"$Contenu\" where Num=\"$Num\""; 	 

	 // Execution de cette requete dans la base essai    
     $execution = mysql_query($requete) or die (mysql_error());    
     header("Location: index.php?id=$id");      
   	 }    
// La connexion Mysql est indisponible    
else echo "<HTML><HEAD><TITLE>Erreurs</TITLE></HEAD><BODY><font face='Verdana' size='2'>Vous avez du faire une erreur : Ce probl�me se pose soit : <br>- Parce que vous n'avez pas cr�er la base, ni la table MYSQL;<br>- Parce que vous n'avez pas chang� le Mot de passe d'acc�s a MYSQL dans ce programme (Par d�faut, c'est Host : 'localhost', login : 'root', MDP : '[vide]';<br>- Soit vous n'avez pas lanc� MYSQL.</font></body></html>";        
// on ferme la connexion � mysql    
mysql_close();    
?>    