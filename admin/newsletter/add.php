<html>

<head>
<title>News Letter - abonement</title>
<meta name="generator" content="Namo WebEditor v4.0">
</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
<p><img src="ticarregris.gif" width="7" height="7" border="0"> <font face="Arial" size="2"><b><i>News 
Letter - abonement<br>&nbsp;</i></b><?
include("include/config.php");
include("include/fonctions.php");
if($action == "1")
{
$query2 = "INSERT INTO ta_newsletter(email) VALUES('$email')"; 
$nl = @mysql_query($query2); 
$nl == true ? print("Votre inscription à été un succès ! vous allez recevoir un e-mail !") : print("Erreur lors de votre inscription , La base de donné est pas disponible");

mail($email,
"Confirmation de votre inscription",
"<font face=\"Comic Sans Ms\" size=\"2\">** ceci est un email automatique **<br><br>Cher internaute ,<br>Vous venez de vous inscrire à la news letter du site $url <br> Nous vous remercions ! <br><br> le webmaster</font>",
"From: $from\r\nReply-To: $from\r\nContent-Type: text/html; charset=\"iso-8859-1\"\r\n");
}
if($action == "2")
{
$result = mysql_query("DELETE FROM ta_newsletter WHERE email='$email'");
$result == true ? print("Votre email a bien été supprimé.") : print("Votre email n'a pas été supprimé car la base de donnée est indisponible.");
}
else
{
}

?></font></p>
</body>

</html>
