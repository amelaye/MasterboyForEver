 
<html>

<head>
<title>Retrouvez votre Passe</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
td {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #FFFFFF}
h1 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; font-weight: bold; color: #000000; background-color: #CCCCCC; background-image:   url(backgr.jpg)}
a {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #CCCCCC; font-style: normal; text-decoration: none}
h2 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14pt; font-weight: bold; color: #99CCFF}
h3 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; font-weight: bold; color: #CCCCFF}
table {  background-color: #000000}
.classe {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #000000; background-color: #CCCCCC; background-image:   url(backgr.jpg); font-weight: bold}
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="800" border="0" cellspacing="0" cellpadding="3">
  <tr> 
    <td colspan="3"> 
      <div align="center"><img src="frst.gif" width="702" height="122" align="middle"></div>
    </td>
  </tr>
  <tr> 
        <? include ('banner.inc'); ?> 
  </tr>
  <tr> 
    <td width="139" valign="top"> 
          <? include ('menu2.inc'); ?> 
    </td>
    <td width="1298" valign="top" colspan="2"><?php
include("config.php");

viewheader();
if(empty($email))
{
echo"<h2>Retrouvez votre mot de passe</h2><br>";
echo"Entrez l'adresse e-mail que vous avez fourni lors de votre inscription,";
echo"<br>votre mot de passe vous sera alors envoyé &agrave; cette m&ecirc;me adresse";

echo"<form ACTION='pass.php' method='post'>";
echo"<input class=textfield type=text name=email SIZE='35'>";
echo"<br>";
echo"<input type='submit' class='textfield' name='submit' value='ok'>";
echo"</form>";
}
else
{
$db = mysql_connect($dbhost, $dblogin, $dbpassword); 
mysql_select_db($dbname,$db); 	

$query = mysql_query("SELECT username, password, email FROM $dbtable WHERE email='$email'"); 

if (list($username, $password, $email) = mysql_fetch_array($query))
{
$mail=mail("$username <$email>", "Votre mot de passe sur masterboy.fr.st","Bonjour,\n\nVous avez demandé à recevoir votre mot de passe.\nVotre mot de passe est : $passe\n\nCordialement, Amélie OnLine.\nhttp://www.amelieonline.net", "From: amelieonline.net <webmaster@amelieonline.net>");

if($mail)echo"<center>Votre mot de passe vous a été envoyé à l'adresse :<br><br><b>$email</b><br><br>Vous allez le recevoir dans un instant.</center>"; 

else
echo"<center>Le mot de passe ne peux vous être envoyé !<br>Renouvelez votre demande dans un instant, merci.</center><br>";   
}

else
echo"<center><b>Adresse email non valide.</b><br><a href=\"javascript:history.back()\">retour</a></font></center>";
}
echo"<center>";
viewfooter();
?> 
      <div align="center"></div>
      <div align="center"></div>
    </td>
  </tr>
</table>
</body>

</html>
