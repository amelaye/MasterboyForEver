 
<html>

<head>
<title>fiche membre</title>
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
  <? include('banner.inc'); ?>
  <tr> 
    <td width="139" valign="top"> 
<? include('menu2.inc'); ?>
    </td>
    <td width="1298" valign="top" colspan="2"> <?
include("config.php");

viewheader();
db_connect();

$req = mysql_query("SELECT clicks FROM $dbtable WHERE id='$id'");
$res = mysql_num_rows($req);

$i=0;
$row = mysql_fetch_array($req);
$row[clicks]++;
mysql_query("UPDATE $dbtable SET clicks='$row[clicks]' WHERE id='$id' ") or die ("ERREUR");

$req = "SELECT * FROM $dbtable WHERE id='$id'";
$res = mysql_query($req);

$username = mysql_result($res,$i,"username");
$email = mysql_result($res,$i,"email"); 
$url = mysql_result($res,$i,"url"); 
$photo = mysql_result($res,$i,"photo"); 
$clicks = mysql_result($res,$i,"clicks");
$date = mysql_result($res,$i,"date_reg");
$message = mysql_result($res,$i,"message");
$annee = date("Y", $date);
$mois = date("m", $date);
$jour = date("d", $date);
$heures = date("H", $date);
$minutes = date("i", $date);
$date = $jour."/".$mois."/".$annee." à ".$heures."h".$minutes;

echo"<center><h2>FanZone</h2><br>";
echo"<h1><b>$username</b><br></h1>";
echo"Consultée <b>$clicks</b> fois<br>";
echo"<a href='maj.php?id=". $_SESSION['id']. "'>modifier le profil</a><br>";
echo"<br>";
echo"<img src='$imgs_folder/$photo' border='0'><br>";
echo"<br></center>";
echo "<center>Pseudo : <b>$username</b><br>";
echo"membre depuis le";
echo"<br>";
echo"$date";
echo"<br>";
echo"<b>Votre e-mail : <a href='mailto:$email'>&nbsp;$email</a></b><br>";
echo"</center><br>";
if(!empty($url)) {
	echo"<center><b>Site Internet : </b><a href='$url'target='_blank'>$url</a><br>";
		} 
echo"<br>";
echo"<b>Votre message :</b>";
echo"<br>";
echo"$message";
echo"<br>";
echo"<br>";
echo"<a href='liste.php'>Voir les autres membres</a>";

echo"<A href='javascript:self.close();'></center>";
?> </td>
  </tr>
</table>
</body>

</html>
