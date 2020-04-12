<? include "securite.php"; ?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
input {  background-color: #9999FF; font-family: Verdana, Arial, Helvetica, sans-serif}
textarea {  font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #9999FF}
select {  font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #9999FF}
-->
</style>
</head>

<body bgcolor="#000000">
<form action="<? echo "ajout.php?id=".$id.""; ?>" method="post" name="form1">
  <p align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#00CCCC"><b><font size="4" color="#9999FF">Ajout 
    d'une page</font></b></font></p>
  <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Titre 
    de la page : </font>
    <input type="text" name="Titre">
  </p>

  <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Titre 
    apparaissant sur la page :<br>
    </font><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF"> 
    <textarea name="TitrePage" rows="2" wrap="VIRTUAL" cols="50"></textarea>
    </font></p>
  <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Rubrique 
    : 
    <select name="Rubrique">
      <option selected>Nouveaut&eacute;s</option>
      <option>Groupe</option>
      <option>Forever</option>
      <option>Fans</option>
      <option>Archives</option>
    </select>
    </font></p>
<p><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Contenu 
  de la page :</font></p>
  <p> 
    <textarea name="Contenu" cols="75" rows="20" wrap="VIRTUAL"></textarea>
  </p>
  <p align="center"> 
    <input type="submit" name="Submit" value="Ajouter">
    <input type="reset" name="Submit2" value="R&eacute;tablir">
  </p>
</form>
</body>
</html>
