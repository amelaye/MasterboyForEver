<? 
include ('../connection.php');
include ('securite.php');

########################################
#### ** Requête d'ajouts de pages ** ###
########################################

// On commence par vérifier si les champs sont vides 
if(empty($Titre) OR empty($TitrePage)OR empty($Rubrique) OR empty($Contenu))
    { 
    echo '<font color="red">Vous devez remplir TOUS les champs !!! </font> <p><a href="ajout_page.php?id=".$id.""> Retour au formulaire d\'ajout de pages simples </a>
	<p><a href="ajout_pagesoeur.php"> Retour au formulaire d\'ajout de pages soeurs </a><p><a href="ajout_sousrub.php"> Retour au formulaire d\'ajout de sous-rubriques </a>'; 
    } 

// Aucun champ n'est vide, on peut enregistrer dans la table 
else      
   { 
      
       
   $ajouter = "INSERT INTO pages (Titre, TitrePage, Rubrique, Contenu)";
   $ajouter.="VALUES('$Titre','$TitrePage','$Rubrique','$Contenu')";



  	mysql_query($ajouter) or die('Erreur SQL !'.$ajouter.'<br>'.mysql_error()); 
	
    // on affiche le résultat pour le visiteur 
  	header("Location: index.php?id=".$id."");      

    mysql_close();  // on ferme la connexion 
  }  
?> 