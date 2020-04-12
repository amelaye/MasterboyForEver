
<? 
include 'register_globals.php';register_globals();// Patch amelaye php4
include ('connection.php'); 

?>
<html>
<head>
<title>MASTERBOY FOREVER !!!!</title>
<meta name="keywords" content="masterboy, master, boy, tommy, thomas, schleh, enrico, zabler, trixxi, delgado, linda, anabel, session-group, cordalis, skywalker, music, dance, eurodance, amelie, online, feel the heat, euro, energy, germany">
<meta name="description" content="Premier site français complet sur le groupe Masterboy, pour les fans français en manque de nouvelles ...">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
td {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #FFFFFF}
h1 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; font-weight: bold; color: #000000; background-color: #CCCCCC; background-image:  url(backgr.jpg)}
a {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #CCCCCC; font-style: normal; text-decoration: none}
h2 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14pt; font-weight: bold; color: #99CCFF}
h3 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; font-weight: bold; color: #CCCCFF}
table {  background-color: #000000}
.classe {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #000000; background-color: #CCCCCC; background-image:  url(backgr.jpg); font-weight: bold}
-->
</style>
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="800" border="0" cellspacing="0" cellpadding="3">
  <tr> 
    <td colspan="3"> 
      <div align="center"><a href="index.php"><img src="frst.gif" width="702" height="122" align="middle" border="0"></a></div>
    </td>
  </tr>
  <? include ('banner.inc') ; ?>
  <tr> 
    <td width="162" valign="top"> 
      <? include ('menu.inc') ; ?>
    </td>
    <td valign="top" colspan="2"> 
      <p><font color="#FFFFFF"><?
include ('connection.php');
		$select="select TitrePage from pages where Num=$Num";
		$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error());
		$total = mysql_num_rows($result);

	
	
		$select="select TitrePage from pages where Num=$Num";
		$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
		while ( $ligne = mysql_fetch_array($requete) ) 
			{
			
			
			echo "".$ligne[TitrePage]."</br>\n" ;
			
			}
		 ?></font></p>
      <p><font color="#FFFFFF"><?
		$select="select Contenu from pages where Num=$Num";
		$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error());
		$total = mysql_num_rows($result);

	
		if ($Num==13)
			{
			$select = 'select * FROM pages where Rubrique="Lyrics"';
		$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
		while ( $ligne = mysql_fetch_array($requete) ) 
			{
			
			$myfichier='mboy.php?Num='.$ligne[Num].'';
			echo "<a href=\"$myfichier\">".$ligne[Titre]."</a></br>\n" ;
			}
			}
		else {
		$select = "select Contenu FROM pages where Num=$Num";
		$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
		while ( $ligne = mysql_fetch_array($requete) ) 
			{
			
			echo "".$ligne[Contenu]."</br>\n" ;
			
			}}

		 ?></font></p>
    </td>
  </tr>
</table>
</body>
</html>
<? mysql_close($link) ?>
