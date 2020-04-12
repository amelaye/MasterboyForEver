<?
	// remplacer mondomaine par le nom de votre domaine
$base='archive_mboy1';
$login='root';
$pwd='';

$link=mysql_connect("localhost", $login, $pwd);

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
