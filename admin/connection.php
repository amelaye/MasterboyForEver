<?php

//=========================================
$dossier_pages = 'treewiew';
//=========================================

//=========================================	
// informations relatives au site client
//=========================================
$site_client = 'http://192.168.0.24/';

//Choisi un login :
$lo = "webmaster";
// Choisi un mot de passe 
$pa = "taikunkon";
//=========================================
// information pour la connection à la BDD
//=========================================
	$serveur = "sql.amelieonline.net";
	$utilisateur = "amelieonline.net";
	$mot_de_passe = "Njyh+044";
	$bdd = "amelieonline.net";
	
//=========================================    
// connection à la DB
//=========================================
$connexion = mysql_connect ($serveur,$utilisateur,$mot_de_passe) or die ('Erreur de connexion : '.mysql_error() );
mysql_select_db($bdd) or die ('Erreur de Connexion :'.mysql_error());

?>