<?
$q2 = mysql_query("SELECT * FROM ta_config");
	while ($r25 = mysql_fetch_array($q2)) {

$url = "".$r25["urlsite"]."";
$dossier = "".$r25["dossier"]."";
$from = "".$r25["email"]."";

}


if($option == "PRO")
{
?> 
<style type="text/css">
<!--
body {  background-color: #000000}
textarea {  color: #000000; background-color: #CCCCFF}
-->
</style>

<p><textarea disabled rows="17" cols="64">
Voici le contrendu des email envoyés :
--------------------------------------
<?
	$q2 = @mysql_query("SELECT * FROM ta_newsletter");
	while ($r2 = mysql_fetch_array($q2)) {
	$nl = @email(htmlentities($r2["email"]),
	"News Letter[ $sujet ]",
	"<font face=\"$face\" size=\"$size\">".conv($body)."</font><font face=\"Arial\" size=\"2\"><br><br>--------------------<br>Pour ne plus recevoir la news letter de ce site web , allé sur :<br>http://$url/$dossier/add.php?email=".htmlentities($r2["email"])."&action=2<br>--------------------<br><br></font><font face=\"arial\" size=\"1\">Cet NewsLetter à été envoyé grâce au syteme d'envoie de mail de TeamsAwards.fr.st</font>",
	"From: $from\r\nReply-To: $from\r\nContent-Type: text/html; charset=\"iso-8859-1\"\r\n");

 $nl == true ? print("".htmlentities($r2["email"])." [Email envoyé ]\n") : print("".htmlentities($r2["email"])." [ ERREUR !]\n");
	}
?></textarea></p><?
}
if($option == "FREE")
{
		$q = mysql_query("SELECT email FROM ta_newsletter");
         	while ($r = mysql_fetch_array($q)) {
		$recepteurs .= "".$r["email"].",";
}
  	$nl = email($recepteurs,
	"News Letter[ $sujet ]",
	"<font face=\"$face\" size=\"$size\">".conv($body)."</font><font face=\"Arial\" size=\"2\"><br><br>--------------------<br>Pour ne plus recevoir la news letter de ce site web , allez sur :<br>http://$url/$dossier/add.php?email=# inserez votre email ici #&action=2<br>--------------------<br><br></font><font face=\"arial\" size=\"1\">Cet NewsLetter à été envoyé grâce au syteme d'envoie de mail de TeamsAwards.fr.st</font>",
	"From: $from\r\nReply-To: $from\r\nContent-Type: text/html; charset=\"iso-8859-1\"\r\n");
 $nl == true ? print("Votre e-mail a bien été envoyé en mode FREE") : print("Erreur lors de l'envoie du message : Serveur Indisponible");
}
?>
<?
$query2 = "INSERT INTO ta_archives(sujet,body,date) VALUES('$sujet','$body','NOW()')"; 
$nl = @mysql_query($query2); 
$nl == true ? print("Votre email a été ajouté dans les archives [ $recepteurs ]") : print("");
?>