<?
include("config.php");
session_start();
?>
<html>

<head>
<title>Fiche membre</title>
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
	if(!session_is_registered('username') ||!session_is_registered('id'))
    	{
    	viewheader();
    	echo "<center>Vous n'estes pas autorisé à afficher cette page<'br>";
    	echo"<b>L'accès est réservé aux membres</b><br>";
    	echo"<a href='register.php'>Enregistrement</a></center>";
    	viewfooter();
    	exit;
    	}
	
	viewheader();
	
	echo"<center><h2>Fan Zone</h2><br>";
	echo"<h1>Espace membres</h1><br>";
	echo "<h3>Bienvenue <b>". $_SESSION['username'] ."</b></h3><br>";
	echo "<h3>votre id :  <b>". $_SESSION['id'] ."</b></h3><br></center>";

	echo"<center><h4>Options</h4>";
	echo"<a href='fiche_membre.php?id=". $_SESSION['id']. "'>voir votre profil</a><br>";
	echo"<a href='maj.php?id=". $_SESSION['id']. "'>modifier votre profil</a><br>";
	echo"<a href='logout.php'>logout</a><br>";
	echo"<a href='index.php'>retour</a><br>";
	echo"<br><br>";
	echo"<a href='pagemembre1.php'>Page membre</a><br></center>";

	viewfooter();
?> </td>
  </tr>
</table>
</body>

</html>
