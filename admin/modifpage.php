<? include ('securite.php'); 
$select="select * from pages where Num=$Num";
$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error());
$total = mysql_num_rows($result);

	
$select = "select * FROM pages where Num=$Num";
$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
$ligne = mysql_fetch_array($requete);


?>
<html>
<head>
<title>Modifier une page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
input {  background-color: #CC00CC; font-family: Verdana, Arial, Helvetica, sans-serif}
textarea {  font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #CC00CC}
select {  font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #CC00CC}
-->
</style>
</head>

<body bgcolor="#000000">
<form name="form1" action="modif.php?id=<? echo $id; ?>&Num=<? echo $Num ; ?>" method="post" >
  <p align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#00CCCC"><b><font size="4" color="#CC00CC">Modification 
    d'une page</font></b></font></p>
  <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Titre 
    de la page : </font> 
    <input type="text" name="Titre" value="<? echo $ligne[Titre]; ?>">
  </p>

  <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Titre 
    apparaissant sur la page :<br>
    </font><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF"> 
    <textarea name="TitrePage" rows="2" wrap="VIRTUAL" cols="50"><? echo $ligne[TitrePage]; ?></textarea>
    </font></p>
  <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Rubrique 
    : 
    <select name="Rubrique">
		<option salected><? echo $ligne[Rubrique]; ?></option>
      <option>Nouveaut&eacute;s</option>
      <option>Groupe</option>
      <option>Forever</option>
      <option>Fans</option>
      <option>Archives</option>
    </select>
    </font></p>
<p><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Contenu 
  de la page :</font></p>
  <p> 
    <textarea name="Contenu" cols="75" rows="20"><? echo $ligne[Contenu]; ?></textarea>
  </p>
  <p align="center"> 
    <input type="submit" name="Submit" value="Modifier">
  </p>
</form>
</body>
</html>
