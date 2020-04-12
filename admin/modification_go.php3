<? include ('securite.php'); ?> 
<style type="text/css">
<!--
td {  color: #FFFFFF}
-->
</style>

<?
if($FNom != "" && $FPass != "" && $FHote != "" && $FBase != "" && $FLogin != "" && $FTable != ""){




	$fp = fopen("../installation/config/informations.php3","w");

	stripslashes("$FPass");
	stripslashes("$FHote");
	stripslashes("$FBase");
	stripslashes("$FLogin");
	stripslashes("$FP_login");
	stripslashes("$FTable");


	//On rajoute les parametres dans le fichier de config
	fwrite($fp,"<?\n\$Nom = \"$FNom\";\n\$Pass = \"$FPass\";\n\$Hote = \"$FHote\";\n\$Base = \"$FBase\";\n\$Login = \"$FLogin\";\n\$P_login = \"$FP_login\";\n\$Table = \"$FTable\";",1000);	if($notifa != ""){
		fwrite($fp,"\$notif = \"$notifa\";",1000);
	}
	fclose($fp);
	
	$fht = fopen("../installation/config/.htaccess","w");
	fwrite($fht,"deny from file informations.php3",400);
	fclose($fht);
	
	// création de la table
	
	include("../installation/config/informations.php3");
	
	$mysql_link = mysql_connect($Hote, $Login, $P_login); 
	mysql_select_db($Base); 
	$Query = "CREATE Table $Table(ID INT NOT NULL AUTO_INCREMENT,Pseudo char(40),EMail char(40),Ville char(40),Pays char(20),Message LONGTEXT,Url char(40),primary key (Id)) ";	
	$mysql_result = mysql_query($Query, $mysql_link); 
	
	
	echo "<html><head><title>Modification des paramètres</title></head><body bgcolor=#000000>
  <div align=center><center> &nbsp; <br> &nbsp; <br>
<p align=center><strong><font face=Arial color='white'>Modification</font></strong>
  <table border=0 width='80%'>
    <tr>
     <td width=100% bgcolor=#000000>
	 <p align=center><strong><font face=Arial color='black' size='4'><br><b>Modification des paramètres</b></font></strong></p>
<b><big>Modification terminée avec succés !</big>

<br><br>
Retour à la section d'<a href='administration.php3?FPass=$Pass'>administration</a>. <br>
<BR></tr>
   <tr>
    
    </tr></table></center></div></body></html>";	
}

else
{
echo "<html><head><title>Modification - Forum</title></head><body bgcolor=FFFFFF>
  <div align=center><center> &nbsp; <br> &nbsp; <br>
  <table border=0 width='80%'>
    <tr>
     <td width=100% bgcolor=#006595><p align=center><strong><font face=Arial color='white'>Modification</font></strong></td>
    </tr>  <tr>
     <td width=100% bgcolor=#D0DCE8>
	 <p align=center><strong><font face=Arial color='black' size='4'><br><b>Modification des paramètres</b></font></strong></p>
<b><big>Erreur :</big>
<br>Tous les champs doivent être remplis !</b>
<br>
   </tr>
   <tr>
    
    </tr></table></center></div></body></html>";
	}
?>
