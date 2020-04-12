
<style type="text/css">
<!--
p {  font-family: Verdana, Arial, Helvetica, sans-serif}
td {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #FFFFFF}
a {  font-weight: bold; color: #FF66FF; text-decoration: none}
-->
</style>
<?
include("../installation/config/informations.php3");
stripslashes("$FNom");
stripslashes("$FMail");
stripslashes("$FHote");
stripslashes("$FBase");
stripslashes("$FTable");
stripslashes("$FLogin");
stripslashes("$FSite");
stripslashes("$FPass");
stripslashes("$FP_login");
if ($FPass == $Pass){	
	echo "<html><head><title>Les petits messages ...</title></head><body bgcolor=#000000>
  <div align=center><center> &nbsp; <br> &nbsp; <br><p align=center><strong><font face=Arial color='white'>Administration</font></strong>
  <table border=0 width=80%>
    <tr>
     <td width=100% bgcolor=#000000>

	 <br>
	
<center><a href='administration.php3?FPass=$Pass'>Retour à l'administration</a></center>
<br><br>";

	
$mysql_link = mysql_connect($Hote, $Login, $P_login); 

	mysql_select_db($Base); 
	
$Query = "SELECT * FROM $Table ORDER BY ID DESC"; 

	$mysql_result = mysql_query($Query, $mysql_link); 
	

	while($row = mysql_fetch_row($mysql_result)){	
		$fId = $row[0];
		$fPseudo = $row[1];
		$fEMail = $row[2];
		$fVille = $row[3];
		$fPays = $row[4];
		$fMessage = $row[5];
		$fUrl = $row[6];
			
		print("<b>Pseudo :</b> $fPseudo<br>");
		print("<b>Mail :</b> <a href='mailto:$fEMail'>$fEMail</a><br>");
		print("<b>Ville :</b> $fVille<br>");
		print("<b>Pays :</b> $fPays<br>");
		print("<b>Message :</b> $fMessage<br>");
		print("<b>Url :</b> $fUrl<br><center><form action='supprimer_go.php3'><input type='hidden' name='id_msg' value='$fId'><input type='hidden' name='FPass' value='$Pass'><input type='submit' value='Supprimer'></form></center><hr width='70%'><br>");
 	}
	
	 
	 echo "
	<br><br>
	 
   </tr>
   <tr>
   
    </tr></table></center></div></body></html>";


}

else 
{
echo "<html><head><title>Administration - Login</title></head><body bgcolor=FFFFFF>
  <div align=center><center> &nbsp; <br> &nbsp; <br>
  <table border=0 width=80%>
    <tr>
     <td width=100% bgcolor=#006595><p align=center><strong><font face=Arial color='white'>Administration</font></strong></td>
    </tr>  <tr>
     <td width=100% bgcolor=#D0DCE8>
	 <br>
Le mot de passe est faux !
<br><br>
   </tr>
   <tr>
   
    </tr></table></center></div></body></html>";
}

?>
