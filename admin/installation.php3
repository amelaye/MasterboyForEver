<?

if($FNom != "" && $FPass != "" && $FHote != "" && $FBase != "" && $FLogin != "" && $FTable != ""){
  if(mkdir("config", 0777)){
  	// créeation du fichier de renseignement de location de la base de donnée
	$fp = fopen("config/informations.php3","w");
	
	stripslashes("$FPass");
	stripslashes("$FHote");
	stripslashes("$FBase");
	stripslashes("$FLogin");
	stripslashes("$FP_login");
	stripslashes("$FTable");	

	//On rajoute les parametres dans le fichier de config
	fwrite($fp,"<?\n\$Nom = \"$FNom\";\n\$Pass = \"$FPass\";\n\$Hote = \"$FHote\";\n\$Base = \"$FBase\";\n\$Login = \"$FLogin\";\n\$P_login = \"$FP_login\";\n\$Table = \"$FTable\";",1000);
	if($notifa != ""){
		fwrite($fp,"\$notif = \"$notifa\";",1000);
	}
	fclose($fp);
	
	$fht = fopen("config/.htaccess","w");
	fwrite($fht,"deny from file informations.php3",400);
	fclose($fht);
	
	// création de la table
	
	include("config/informations.php3");

 	$mysql_link = mysql_connect($Hote, $Login, $P_login); 
	mysql_select_db($Base); 
	$Query = "CREATE Table $Table(ID INT NOT NULL AUTO_INCREMENT,Pseudo char(40),EMail char(40),Ville char(40),Pays char(20),Message LONGTEXT,Url char(40),primary key (Id)) ";
	$mysql_result = mysql_query($Query, $mysql_link); 

	// compte rendu des operations

	echo "<html><head><title>Installation - Login $Version</title><meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'></head>
		<body bgcolor=#000000>
		<div align=center><center> &nbsp; <br> &nbsp; <br>
  		<table border=0 width=80%>
   		<tr>
     	<td width=100% bgcolor=#006595><p align=center><strong><font face=Arial color='white'>Installation</font></strong></td>
    	</tr>  <tr>
     	<td width=100% bgcolor=#D0DCE8>
		<p align=center><strong><font face=Arial color='black' size='4'><br>
        <b>Création des paramètres</b></font></strong></p>
        <p align=center><strong><big>Installation terminée avec succée !</big> 
        </strong><br>
        <br>
        <u><b>Rapport de l'installation :</b></u><br>
        <br>
        <u>Création des fichiers de personnalisation :</u> <font color='#009900'>OK</font> 
        <br>
        <u>Création de la table $Table dans la base de donnée $Base :</u> 
        <font color='#009900'>OK</font><br>
        <u>Dianostic :</u> Installation  <font color='#009900'>OK</font><br>
        <br>
        Vous pouvez maintenant vous rendre dans la section d'<a href='index.php3?admin'>administration</a>. 
        <br>
        <BR>
        <br>
        </p>
		</tr>
   		<tr>
    	<td width=100% bgcolor=#006595><p align=center><strong><font face=Arial size=1 color='white'>Copyright&copy; 
            BigfootSPI 2002- 2003 Tous droits réservés</font></strong></td>
    	</tr></table></center></div></body></html>";	
	}
	
	else{
		echo "<html><head><title>Installation - Forum</title></head><body bgcolor=FFFFFF>
  		<div align=center><center> &nbsp; <br> &nbsp; <br>
  		<table border=0 width=80%>
    	<tr>
    	<td width=100% bgcolor=#006595><p align=center><strong><font face=Arial color='white'>Installation</font></strong></td>
    	</tr>  <tr>
    	<td width=100% bgcolor=#D0DCE8>
		<p align=center><strong><font face=Arial color='black' size='4'><br>
    	<b>Création des paramètres</b></font></strong></p>
    	<div align='center'> 
    	<p><b><big><u><font color='#FF0000'>Erreur :</font></u></big> <br>
    	Impossible de créer le répertoire de configuration !<br>
    	</b><br>
    	</p>
    	</div></tr>
    	<br>
    	<td width=100% bgcolor=#006595><p align=center><strong><font face=Arial size=1 color='white'>Copyright&copy; 
    		BigfootSPI 2002- 2003 Tous droits réservés</font></strong></td>
    	</tr></table></center></div></body></html>";
	}
}


else{
	echo "<html><head><title>Installation - Forum</title></head><body bgcolor=FFFFFF>
  		<div align=center><center> &nbsp; <br> &nbsp; <br>
  		<table border=0 width=80%>
    	<tr>
     	<td width=100% bgcolor=#006595><p align=center><strong><font face=Arial color='white'>Installation</font></strong></td>
    	</tr>  <tr>
     	<td width=100% bgcolor=#D0DCE8>
	 	<p align=center><strong><font face=Arial color='black' size='4'><br>
        <b>Création des paramètres</b></font></strong></p>
        <div align='center'><b><big><font color='#FF0000'><u>Erreur :</u></font></big> 
        <br>
        Tous les champs doivent être remplis !</b> <br>
        <br>
        </div></tr>
   		<tr>
    	<td width=100% bgcolor=#006595><p align=center><strong><font face=Arial size=1 color='white'>Copyright&copy; 
        	BigfootSPI 2002- 2003 Tous droits réservés</font></strong></td>
    	</tr></table></center></div></body></html>";
}
?>