<?

// Parametres mySQL

$sql_serveur = "amelieonline.net"; // Serveur mySQL 
$sql_base = "amelieonline.net"; // Base de donnees mySQL 
$sql_login = "amelieonline.net"; // Login de connection a mySQL 
$sql_password = "Njh+044"; // Mot de passe pour mySQL

// Pour te connecter a ladmin , remplis !!
//Choisi un login :
$lo = "webmaster";
// Choisi un mot de passe 
$pa = "taikunkon";

//touche pas a  sa 
// Connection au serveur mySQL
@mysql_connect($sql_server, $sql_login, $sql_password) or die(mysql_error());
@mysql_select_db($sql_base);
?>