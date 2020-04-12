 
<style type="text/css">
<!--
td {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #FFFFFF}
a {  color: #FF33FF; font-weight: bold; text-decoration: none}
-->
</style>
<?
include("../installation/config/informations.php3");
stripslashes("$FPass");
//if ($FPass == $Pass)
	
	echo "
		<html><head><title>Administration - login</title></head><body bgcolor=#000000>
		  <div align=center><center> &nbsp; <br> &nbsp; <br><p align=center><strong><font face=Arial color='white'>Administration</font></strong>
		  <table border=0 width=80%>
			<tr>
			 <td width=100% bgcolor=#000000>
			 <br>
			 <center><a href='administration.php3?FPass=$Pass'>Retour à l'administration</a></center>
		<br><br>
	";
	
	$mysql_link = mysql_connect($Hote, $Login, $P_login); 
	mysql_select_db($Base); 
	$Query = "DELETE FROM $Table WHERE ID='$id_msg'"; 
	$mysql_result = mysql_query($Query, $mysql_link); 
	

print("Le message a bien été supprimé. Pour continuer cliquez <a href='supprimer.php3?FPass=$Pass'>ici</a>");
	 echo "
		<br><br>
		</tr>
		<tr>
		
		</tr></table></center></div></body></html>
	 ";



?>
