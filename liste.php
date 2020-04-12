<?php
include("config.php");
db_connect();
viewheader();
?>
<html>
<head>
<title>Masterboy.fr.st : FAN ZONE</title>
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
	
echo"<center><h2>FanZone</h2><br>";	
echo"<h1>Liste des Fans</h1><br></center>";
$c = @mysql_connect("$dbhost","$dblogin","$dbpassword") or die("connection impossible");
@mysql_select_db("$dbname",$c) or die("selection impossible");

if(empty($page)) $page = 1;

if(empty($total))
	{ 
	$sql = "select count(*) as qte from $dbtable";
 	$p = @mysql_query($sql,$c);
 	$total = @mysql_result($p,"0","qte");
	}

	$debut = ($page - 1) * $nb;

	$sql = "select * from $dbtable $orderby LIMIT $debut,$nb";

	if($p = @mysql_query($sql,$c))
	{
	$nbpages = ceil($total / $nb);
 	echo"<table width='100%' border='0' cellpadding='1' cellspacing='0' bgcolor='#000000'>";
      	echo"<tr>";
        echo"<td valign='top'>";
 	echo"<table width='100%' border='0' cellspacing='1' cellpadding='3' align='center'>";
	echo"<tr bgcolor='#000000'>";
        echo"<td valign='top' colspan='3'>";
      	compteur();
	echo"<br>";
	echo"Navigation : ";
 	for($i = 1;$i <= $nbpages;$i ++)
 	{
  	echo "<a href=\"$PHP_SELF?page=$i&total=$total\"><b>$i</b></a>";
  	if($i < $nbpages) echo " - ";
 	
 	}
	
      	echo"</td>";
      	echo"<td valign='top' align='right' colspan='2'>";
      	
	echo"<a href='register.php'>Devenir membre de la Fan Zone</a>";
	   	echo"</td>";
      	echo"</tr>";
	echo"<tr bgcolor='#006699'>";
	echo"<td colspan='3' align='left' valign='top'>";
	echo"<b>Les 10 profils les plus populaires :</b><br>";
	popu();
	echo"</td>";
	echo"<td colspan='2' align='left' valign='top'>";
	echo"<b>Les 5 derniers membres :</b><br>";
	lastmembres();
	echo"</td>";
	echo"</tr>";
	echo"<tr bgcolor='#000000'>";
	echo"<td width='44'></td>";
	echo"<td>Pseudo</td>";
	echo"<td>Email</td>";
	echo"<td><Url</td>";
	echo"<td align='center'>Profil</td>";
	echo"</tr>";

while($r = @mysql_fetch_array($p))
	{
	$date = $r[date_reg];
	$annee = date("Y", $date);
	$mois = date("m", $date);
	$jour = date("d", $date);
	$heures = date("H", $date);
	$minutes = date("i", $date);
	$date = $jour."/".$mois."/".$annee." à ".$heures."h".$minutes;
	if (($bgColor == "")||($bgColor == "#000000"))

	$bgColor = "#000000";
	else
	$bgColor = "#000000";

	echo "<tr bgcolor='$bgColor'>";
	echo"<td valign='top' width='44'><a href='$imgs_folder/$r[photo]' target='_blank'><img src='$imgs_folder/$r[photo]' width='44' height='44' border='0'></a></td>";
	echo"<td valign='top'><b>$r[username]</b><br>";
	echo"membre depuis le <br>$date</font></td>";
	echo"<td valign='top'><a href='mailto:$r[email]'>$r[email]</a></td>";
	echo"<td valign='top'><a href='$r[url]' target='_blank'>$r[url]</a></td>";?> 
    <td align="center" valign="top"><a href='fiche_membre.php?id=<?echo $r[id]?>'>voir</a><br>
      <b><? echo"$r[clicks]";?></b> hits</td>
  </tr>
  <?}?> <?}
@mysql_close($c);
?></td></tr>
</table>
</body>

</html>
