<? include ('securite.php'); ?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
a:active {  color: #FFFF99; text-decoration: none; font-weight: bold}
a:hover {  font-weight: bold; color: #FFCC33; text-decoration: none}
a:link {  font-weight: bold; color: #FF33FF; text-decoration: none}
a:visited {  font-weight: bold; color: #ff33ff; text-decoration: none}
-->
</style>
</head>

<body bgcolor="#000000">
<p align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"><b>Masterboy</b></font></p>
<p align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">The 
  back-office</font></b></p>
<p><img src="../bcq.JPG" width="125" height="132"></p>
<p><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"><a href="index.php?id=<? echo $id ?>" target="main">Gestion 
  des fichiers</a></font></p>
<p><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"><a href="ajoutpage.php?id=<? echo $id ?>" target="main">Ajouter 
  une nouvelle page</a></font></p>
<p><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"><a href="liste.php?id=<? echo $id ?>" target="main">Modifier 
  une page</a></font></p>
<p><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"><a href="livre.php3?admin?id=<? echo $id ?>" target="main">G&eacute;rer 
  le GuestBook</a></font></p>
<p><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"><a href="listefans.php?id=<? echo $id ?>" target="main">G&eacute;rer 
  les fans</a></font></p>
<p><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"><a href="newsletter/admin/index.php?id=<? echo $id ?>" target="main">G&eacute;rer 
  la Newsletter</a></font></p>
</body>
</html>
