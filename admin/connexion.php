<?
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

?>