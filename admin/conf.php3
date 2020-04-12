<?
/*-----------------------------------------------------------------*/
/*	VARIABLES A MODIFIER			*/
/*-----------------------------------------------------------------*/

	// remplacer mondomaine par le nom de votre domaine
$base='amelieonline.net';
$login='amelieonline.net';
$pwd='Njyh+044';

$link=mysql_connect("sql.amelieonline.net", $login, $pwd);

if(!$link){
print "erreur connection $link<br>";
exit;
}

// on choisit la bonne base
if(!mysql_select_db($base,$link)){
print "erreur ".mysql_error()."<br>";
mysql_close($link);
exit;
}




// REDIRECTION VERS UNE PAGE ERREUR AU CAS OU LE LOGIN ET MOT DE PASSE SONT INVALIDES
$url_erreur="erreur.htm";

// PAGE PRINCIPALE PROTEGEE PAR MOT DE PASSE
$zone_membre="zonemembre.php3";
?>