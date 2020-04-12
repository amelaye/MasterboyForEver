<? include ('connection.php'); 

//echo $Num;
//exit();
?>
<html>
<head>
<title>MASTERBOY FOREVER !!!!</title>
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

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" text="#FFFFFF" link="#FF99FF" vlink="#FF00FF" alink="#FF0000">
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
      <h2 align="center"><?php
	include("installation/config/informations.php3");
	stripslashes("$Pseudo");
	stripslashes("$EMail");
	stripslashes("$Ville");
	stripslashes("$Pays");
	stripslashes("$Message");
	stripslashes("$Url");
	
	// Connexion à la base de donnée
	
	$mysql_link = mysql_connect($Hote, $Login, $P_login); 
	mysql_select_db($Base); 
	$Pseudo=strip_tags($Pseudo);
	$EMail=strip_tags($EMail);
	$Ville=strip_tags($Ville);
	$Pays=strip_tags($Pays);
	$Message=strip_tags($Message); // interdiction de code HTML et php
	$Url=strip_tags($Url);
	if($Message!=NULL){
		$Query = "INSERT INTO $Table (Pseudo, EMail, Ville, Pays, Message, Url) VALUES ('$Pseudo', '$EMail', '$Ville', '$Pays', '$Message', '$Url')"; 
		$mysql_result = mysql_query($Query, $mysql_link); 
		if($mysql_result==true){
			echo"
				<div align='center'>
				  <p><font face='Verdana, Arial, Helvetica, sans-serif'>Envoi de votre message :</font></p>
				  <p><font color='#cccccc' face='Verdana, Arial, Helvetica, sans-serif'><strong> 
					REUSSI</strong></font></p>			
				  <form name='retour' method='post' action='livredor.php3'>
					<input type='submit' name='Submit' value='Retour ---&gt;'>
				  </form>
				</div>";
		}
		else{
			echo"
				<div align='center'>
				  <p><font face='Verdana, Arial, Helvetica, sans-serif'>Envoi de votre message :</font></p>
				  <p><font color='#cccccc' face='Verdana, Arial, Helvetica, sans-serif'><strong> 
					ERREUR </strong></font></p>			
				  <form name='retour' method='post' action='livredor.php3'>
					<input type='submit' name='Submit' value='Retour ---&gt;'>
				  </form>
				</div>";	
		}
	}
	else{
		echo"
			<div align='center'>
			  <p><font face='Verdana, Arial, Helvetica, sans-serif'>Envoi de votre message :</font></p>
			  <p><font color='#cccccc' face='Verdana, Arial, Helvetica, sans-serif'><strong> 
				ERREUR (message vide)</strong></font></p>			
			  <form name='retour' method='post' action='livredor.php3'>
				<input type='submit' name='Submit' value='Retour ---&gt;'>
			  </form>
			</div>";
	}
?> </h2>
      </td>
  </tr>
</table>
</body>
</html>
<? mysql_close($link) ?>
