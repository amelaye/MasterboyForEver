<? include ('../connection.php'); 
include ('securite.php'); 

echo $username;
exit();
$select="select * from membres where membres.username=".$id;
$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error());
$total = mysql_num_rows($result);

	
$select = "select * FROM membres where membres.username=".$id;
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
<form name="form1" action="modifier_fan.php?id=<? echo $ligne[id];?>" method="post" >
  <table width="100%" border="0" cellspacing="0" cellpadding="3">
    <tr bgcolor="#CC00CC"> 
      <td>
        <div align="center"><font color="#FFFFFF"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Fiche 
          d'identit&eacute; du FAN</font></b></font></div>
      </td>
    </tr>
  </table>
  <table width="800" border="0" cellspacing="0" cellpadding="3">
    <tr> 
      <td height="9" width="185"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Id 
        du FAN :</font></td>
      <td height="9" width="235"> 
        <input type="text" name="id" value="<? echo $ligne[id]; ?>" >
      </td>
      <td rowspan="7" width="362">
        <div align="center"><img src="../uploads/<? echo $ligne[photo]; ?>" ></div>
      </td>
    </tr>
    <tr> 
      <td width="185"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Pseudonyme 
        :</font></td>
      <td width="235"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF"> 
        <input type="text" name="pseudo" value="<? echo $ligne[username]; ?>">
        </font></td>
    </tr>
    <tr> 
      <td width="185"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Mot 
        de passe : </font></td>
      <td width="235"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF"> 
        <input type="text" name="passe" value="<? echo $ligne[password]; ?>">
        </font></td>
    </tr>
    <tr> 
      <td width="185"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Email 
        :</font></td>
      <td width="235"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF"> 
        <input type="text" name="email" value="<? echo $ligne[email]; ?>">
        </font></td>
    </tr>
    <tr> 
      <td width="185"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Date 
        Registration :</font></td>
      <td width="235"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF"> 
        <input type="text" name="date" value="<? echo $ligne[date_reg]; ?>">
        </font></td>
    </tr>
    <tr> 
      <td width="185"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Popularit&eacute; 
        : </font></td>
      <td width="235"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        <input type="text" name="clicks" value="<? echo $ligne[clicks]; ?>">
        </font></td>
    </tr>
    <tr> 
      <td width="185"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Message 
        :</font></td>
      <td width="235"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        <input type="text" name="message" value="<? echo $ligne[message]; ?>">
        </font></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p align="center"> 
    <input type="submit" name="Submit" value="Modifier">
  </p>

  </form>
</body>
</html>
