 
<meta name="generator" content="Namo WebEditor v4.0">
<style type="text/css">
<!--
select {  background-color: #CCCCFF}
-->
</style>

<body bgcolor="#000000">
<p><font face="Arial" size="2"><b><font face="Verdana, Arial, Helvetica, sans-serif" color="#CCCCFF">Voici 
  la liste des inscrits :</font></b></font></p>
<p><font face="Arial" size="2">
<br><select size="10" multiple name="Email">
<option>Les inscrits</option>
<?
$q2 = mysql_query("SELECT * FROM ta_newsletter");
while ($r2 = mysql_fetch_array($q2)) {
	echo "<option>".htmlentities($r2["email"])."</option>";

}
?>
</select>
</font></p>
<p>&nbsp;</p>
