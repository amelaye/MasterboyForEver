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
    	echo "<center>-- Vous ne pouvez pas accèder à cette zone --<br>";
    	echo"<b>L'accès est réservé aux membres</b><br>";
    	echo"<a href='register.php'>Enregistrement</a></center>";
    	viewfooter();
    	exit;
    	}
	
	viewheader();
	echo"<h2>Espace membres</h2><br>";
	echo "<h3>Bienvenue <b>". $_SESSION['username'] ."</b></h3><br>";
	echo "<h3>votre id :  <b>". $_SESSION['id'] ."</b></h3><br>";
	?>
<?

	viewfooter();
?> 
      <p>Vous voici sur une page r&eacute;serv&eacute;e aux membres. Ici vous 
        pourrez profiter d'exclusivit&eacute;s qu'on ne trouve nulle part ailleurs.</p>
      <p>Il y a quatre ans, la t&eacute;l&eacute;vision allemande avait diffus&eacute; 
        deux interviews. Je vous laisse profiter de l'occasion, qui sera encore 
        plus agr&eacute;able si vous comprenez l'allemand ... quoique vu les circonstances 
        on comprend assez bien ce qu'il se passe. Les interviews sont d&eacute;coup&eacute;es 
        en plusieurs morceaux, et sont en format Real Streamming.</p>
      <p>Interview 1 :<a href="masterboy1.rpm"> premier extrait</a> - <a href="masterboy2.rpm">deuxi&egrave;me 
        extrait</a> - <a href="masterboy3.rpm">troisi&egrave;me extrait</a></p>
      <p>Interview 2 :<a href="masterboytwo1.rpm"> permier extrait</a> - <a href="masterboytwo2.rpm">deuxi&egrave;me 
        extrait</a></p>
    </td>
  </tr>
</table>
</body>

</html>
