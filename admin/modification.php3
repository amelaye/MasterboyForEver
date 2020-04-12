<? include ('securite.php'); ?> 
<style type="text/css">
<!--
td {  color: #FFFFFF}
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
if ($FPass == $Pass)
{
	echo "<html><head><title>Modification des paramètres</title></head><body bgcolor=000000>
  <div align=center><center> &nbsp; <br> &nbsp; <br>
  <p align=center><strong><font face=Arial color='white'>Modification des paramètres du guestbook <p></font></strong>
<table border=0 width=80%>
     <tr>
     <td width=100% bgcolor=#000000>
	 
	 <form action='modification_go.php3' method='post'>
	 <table border='0' width='100%'>
	 <tr>
	 <td width='80%'>
	  
	 <form action='installation.php3' method='post'>
	 <table border='0' width='100%'>
	 <tr>
	 <td width='80%'>
	 <font face='Verdana' size='2'>
	 <b>Nom :<br></b>
	 Le nom de l'administrateur.
	</font>
	 </td>
	 <td width='20%' valign='top'>
	 <input type='text' name='FNom' size='20' value='$Nom'>
	 </td>
	 </tr>
	 
	 <tr>
	 <td width='80%'>
	 <br>
	 <font face='Verdana' size='2'>
	 <b>Hote :<br></b>
	 C'est l'adresse du serveur mysql.
	</font>
	 </td>
	 <td width='20%' valign='top'>
	 <input type='text' name='FHote' size='20' value='$Hote'>
	 </td>
	 </tr>
	 
	 <tr>
	 <td width='80%'>
	 <br>
	 <font face='Verdana' size='2'>
	 <b>Nom de la base :<br></b>
	 C'est le nom de la base de donnée.
	</font>
	 </td>
	 <td width='20%' valign='top'>
	 <input type='text' name='FBase' size='20' value='$Base'>
	 </td>
	 </tr>
	 
	 <tr>
	 <td width='80%'>
	 <br>
	 <font face='Verdana' size='2'>
	 <b>Nom de la table :<br></b>
	 <font color='red'><b>Attention ! Si vous modifiez le nom de la table tous les messages seront perdus !</b></font> <br>C'est le nom de table qui contiendra les messages.
	</font>
	 </td>
	 <td width='20%' valign='top'>
	 <input type='text' name='FTable' size='20' value='$Table'>
	 </td>
	 </tr>
	 
	 <tr>
	 <td width='80%'>
	 <br>
	 <font face='Verdana' size='2'>
	 <b>Login :<br></b>
	 Le login du serveur mysql.
	</font>
	 </td>
	 <td width='20%' valign='top'>
	 <input type='text' name='FLogin' size='20' value='$Login'>
	 </td>
	 </tr>
	 
	 <tr>
	 <td width='80%'>
	 <br>
	 <font face='Verdana' size='2'>
	 <b>Mot de passe :<br></b>
	 Le mot de passe du serveur mysql.
	</font>
	 </td>
	 <td width='20%' valign='top'>
	 <input type='password' name='FP_login' size='20' value='$P_login'>
	 </td>
	 </tr>
	 

	 <tr>
	 <td width='80%'>
	 <br>
	 <font face='Verdana' size='2'>
	 <b>Mot de passe :<br></b>
	 Le mot de passe qui vous servira pour accéder à l'administration.
	</font>
	 </td>
	 <td width='20%' valign='top'>
	 <input type='password' name='FPass' size='20' value='$Pass'>
	 </td>
	 </tr>

	 <tr>
	 <td width='100%' colspan='2'>
	 <center>
	 <br>
	 <input type='submit' value='Enregistrer les informations'>
	 </center>
	 </td>
	 </tr>
	  </table>
	  <br>
	 
   </tr>
   <tr>
    
    </tr></table></center></div></body></html>";
}
?>