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
  des pages</font></b></font></p>
<table width="691" border="0" cellspacing="0" cellpadding="3">
  <tr bgcolor="#CC00CC"> 
    <td width="43"> 
      <div align="center">Id</div>
    </td>
    <td width="245"> 
      <div align="center">Titre</div>
    </td>
    <td width="128"> 
      <div align="center">Rubrique</div>
    </td>
    <td width="128"> 
      <div align="left">Modifier ?</div>
    </td>
    <td width="117"> 
      <div align="left">Supprimer ?</div>
    </td>
  </tr>
  <?
$select="select * from pages";
$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error());
$total = mysql_num_rows($result);

$select = "select * FROM pages";
$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
while ($ligne = mysql_fetch_array($requete))
{
echo "<tr>";
echo "<td>$ligne[Num]</td>";
echo "<td>$ligne[Titre]</td>";
echo "<td>$ligne[Rubrique]</td>";
echo "<td><a href = modifpage.php?Num=".$ligne[Num]."&id=".$id.">Modifier</a></td>";
echo "<td><a href = supprim.php?Num=".$ligne[Num]."&id=".$id.">Supprimer</a></td>";
echo "</tr>";
}
?> 
</table>

</body>
</html>
