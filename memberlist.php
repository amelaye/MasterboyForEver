<?php
include("config.php");
db_connect();
viewheader();
echo"<h2>Liste des Fans</h2><br>";
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
 	echo"<table width='80%' border='0' cellpadding='1' cellspacing='0' bgcolor='#000000'>";
      	echo"<tr>";
        echo"<td valign='top'>";
 	echo"<table width='100%' border='0' cellspacing='1' cellpadding='3' align='center'>";
	echo"<tr bgcolor='#666666'>";
        echo"<td valign='top' colspan='3'>";
      	echo"<font>";
	compteur();
	echo"<br>";
	echo"Navigation : ";
 	for($i = 1;$i <= $nbpages;$i ++)
 	{
  	echo "<a href=\"$PHP_SELF?page=$i&total=$total\"><b>$i</b></a>";
  	if($i < $nbpages) echo " - ";
 	
 	}
	echo"</font>";
      	echo"</td>";
      	echo"<td valign='top' align='right' colspan='2'>";
      	echo"<font>";
	echo"<a href='register.php'>Devenir membre de la Fan Zone</a>";
	echo"</font>";
      	echo"</td>";
      	echo"</tr>";
	echo"<tr bgcolor='#000099'>";
	echo"<td colspan='3' align='left' valign='top'>";
	echo"<font>";
	echo"<b>Les 10 profils les plus populaires :</b><br>";
	echo"<font>";
	popu();
	echo"</font>";
	echo"</td>";
	echo"<td colspan='2' align='left' valign='top'>";
	echo"<font>";
	echo"<b>Les 5 derniers membres :</b><br>";
	echo"<font>";
	lastmembres();
	echo"</font>";
	echo"</td>";
	echo"</tr>";
	echo"<tr bgcolor='#000099'>";
	echo"<td width='44'></td>";
	echo"<td><font>Pseudo</font></td>";
	echo"<td><font>Email</font></td>";
	echo"<td><font>Url</font></td>";
	echo"<td align='center'><font>Profil</font></td>";
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
	if (($bgColor == "")||($bgColor == "#F6F6F6"))

	$bgColor = "#000099";
	else
	$bgColor = "#000099";

	echo "<tr bgcolor='$bgColor'>";
	echo"<td valign='top' width='44'><a href='$imgs_folder/$r[photo]' target='_blank'><img src='$imgs_folder/$r[photo]' width='44' height='44' border='0'></a></td>";
	echo"<td valign='top'><font><b>$r[username]</b><br>";
	echo"membre depuis le <br>$date</font></td>";
	echo"<td valign='top'><a href='mailto:$r[email]'>$r[email]</a></td>";
	echo"<td valign='top'><a href='$r[url]' target='_blank'>$r[url]</a></td>";?>
<td align="center" valign="top"><a href='fiche_membre.php?id=<?echo $r[id]?>'>voir</a><br><font><b><? echo"$r[clicks]";?></b> hits</font></td>
</tr>
<?}?>
</table>
</td></tr></table>
<?}
@mysql_close($c);
?>
</body>
</html>

