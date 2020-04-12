<? include ('../connection.php');
include ('securite.php'); 
?>
<html>
<head>
<title>Liste des pages</title>
<style type="text/css">
<!--
table {  font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF; font-size: 10pt}
a {  color: #FFCCFF; text-decoration: none}
-->
</style>
</head>

<body bgcolor="#000000">
<p align="center"><font size="2" color="#FFFFFF"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="4" color="#FF33FF">Liste 
  des FANS</font></b></font></p>
<table width="691" border="0" cellspacing="0" cellpadding="3">
  <tr bgcolor="#CC00CC"> 
    <td width="43"> 
      <div align="center">Hits</div>
    </td>
    <td width="245"> 
      <div align="center">Username</div>
    </td>
    <td width="128"> 
      <div align="center">Password</div>
    </td>
    <td width="128"> 
      <div align="left">Email</div>
    </td>
    <td width="117"> 
      <div align="left">Date reg.</div>
    </td>
    <td width="117">Modifier</td>
    <td width="117">Supprimer</td>
  </tr>
  <?
$select="select * from membres";
$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error());
$total = mysql_num_rows($result);

$select = "select * FROM membres";
$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
while ($ligne = mysql_fetch_array($requete))
{
echo "<tr>";
echo "<td>$ligne[clicks]</td>";
echo "<td>$ligne[username]</td>";
echo "<td>$ligne[password]</td>";
echo "<td>$ligne[email]</td>";
echo "<td>$ligne[date_reg]</td>";
echo "<td><a href = modifan.php?username=".$ligne[username].">Modifier</a></td>";
echo "<td><a href = supprimfan.php?username=".$ligne[username].">Supprimer</a></td>";
echo "</tr>";
}
?> 
</table>

</body>
</html>
