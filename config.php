<?php

$dbhost     = "localhost";		//Votre hôte.
$dblogin    = "root";			//Login pour acceder a la base de données.
$dbpassword = "";			//Password pour acceder a la base de données.
$dbname     = "archive_amelieonline_net_4";			//Nom de votre base de données.
$dbtable     = "membres";		//Nom de la table contenant les informations des membres dans votre base de données.
$imgs_folder = "uploads";		//Répertoire de destination pour les uploads des membres.

$nb = "20";				
$champsrequis	= "Des champs n'ont pas été remplis.<br>";
$usermaxcar	= "20 caractères maximum pour le pseudo.<br>";
$usermincar	= "3 caractères minimum pour le pseudo.<br>";
$usercar	= "Le pseudo doit contenir des lettres.<br>";
$userspc	= "Le pseudo ne doit pas comporter d'espace";
$passmaxcar	= "10 caractères maximum pour le password.<br>";
$passmincar	= "5 caractères minimum pour le password.<br>";
$passspc	= "Le password ne doit pas comporter d'espace<br>";
$wrongident	= "Mauvais identifiants.<br>";
$usernamepris	= "Ce pseudo est déjà utilisé, merci d'en choisir un autre.<br>";
$emailpris	= "Cette adresse email est déjà utilisée, merci d'en choisir une autre.<br>";


function db_connect() {
	global $dbhost,$dblogin,$dbpassword,$dbname,$dbtable;
	$db = mysql_connect($dbhost, $dblogin, $dbpassword); 
	mysql_select_db($dbname,$db); 
	}

function compteur() {
	global $dbhost,$dblogin,$dbpassword,$dbname,$dbtable;
	$query = "SELECT * FROM $dbtable"; 
	$result = mysql_query($query);
	$nrows=@mysql_num_rows($result);
	echo "<b>$nrows</b> membres enregistrés";
}

function popu() {
	global $dbhost,$dblogin,$dbpassword,$dbname,$dbtable;
	$query = "SELECT id,username,clicks FROM $dbtable ORDER BY clicks DESC, username LIMIT 0,10";
  	$exec = mysql_query ($query);
	while ($result = mysql_fetch_array ($exec)) {
    	$id = $result["id"];
    	$username = $result["username"];
    	$clicks = $result["clicks"];
    	echo "<a href=fiche_membre.php?id=$id><b>$username</b></a>($clicks hits)";
  	echo "<br>";
  }
}

function lastmembres() {
	global $dbhost,$dblogin,$dbpassword,$dbname,$dbtable;
	$query = "SELECT id,username,clicks,date_reg FROM $dbtable ORDER BY date_reg DESC LIMIT 0,5";
  	$exec = mysql_query ($query);
	while ($result = mysql_fetch_array ($exec)) {
    	$id = $result["id"];
    	$username = $result["username"];
    	$clicks = $result["clicks"];
		$message = $result["message"];
    	$date = $result["date_reg"];
		$annee = date("Y", $date);
	$mois = date("m", $date);
	$jour = date("d", $date);
	$heures = date("H", $date);
	$minutes = date("i", $date);
	$date = $jour."/".$mois."/".$annee." à ".$heures."h".$minutes;
	echo "<a href=fiche_membre.php?id=$id><b>$username</b></a> - ($date) - ($clicks hits)<br>";
  }
  }

function viewheader() {
    echo"<html><head><title></title><meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'><link rel='stylesheet' href='style.css' type='text/css'><script type='text/javascript' language='JavaScript' src='fonctions.js'></script></head><body text='#000000' link='#000000' vlink='#000000' alink='#000000' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>";
}

function viewfooter() {
    echo"</body></html>";
}

function view_login_form() {
   echo"<center><h2>Fan Zone</h2>Pour entrer dans l'espace réservé aux fans de Masterboy, saisissez vos identifiants.<br>
   <form action='login.php' method='post'>
   <table border='0' cellspacing='0' cellpadding='0' align='center'>
   <tr><td></td>
   <td><input type='text' class='textfield' name='username'></td>
   </tr>
   <tr>
   <td></td>
   <td><input type='password' class='textfield' name='password'></td>
   </tr></table><br>
   
   <input type='submit' name='submit' value='ok' class='textfield'>
   </form>
   <a href='register.php'>Devenir membre de la Fan Zone</a><br>
   <a href='pass.php'>Vous avez perdu votre mot de passe ?</a><br>
   <a href='liste.php'>Liste des fans</a></center><br>";
}
?>
