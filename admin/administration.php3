 
<style type="text/css">
<!--
td {  font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF}
p {  color: #FFFFFF; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt}
a {  }
-->
</style>
<?
include("../installation/config/informations.php3");
stripslashes("$FNom");
stripslashes("$FHote");
stripslashes("$FBase");
stripslashes("$FTable");
stripslashes("$FPass");

//if ($FPass == $Pass){
	
	$mysql_link = mysql_connect($Hote, $Login, $P_login); 
	mysql_select_db($Base); 		
	$sql = "SELECT * FROM $Table";
	$resultat = mysql_db_query($Base, $sql);
	$nb_enr = mysql_num_rows($resultat);
	
	
	echo "<html><head><title>Et zou !!</title></head><body bgcolor=#000000>
<p align=center><strong><font face=Arial color='white'>Administration</font></strong>
  <div align=center><center> &nbsp; <br> &nbsp; <br>
  <table border=0 width=80%>
    <tr>
    
     <td width=100% bgcolor=#000000>	 
	<p><font face=Arial size=2> &nbsp; <br>
      <div align=center><center>
            <font face=Arial size=2>
            <table
      border=0 cellspacing=1 cellpadding=0 width='80%'>
              <tr> 
                <td colspan=2><div> 
                    <p><font size=2
          color=#ffccff><strong>Paramètres du Forum :</strong></font></div></td>
              </tr>
              <tr> 
                <td><font size='2' face='verdana' color=#ffffff>Nom :</font></td>
                <td><font size=2>$Nom</font></td>
              </tr>
              <tr> 
                <td><font size=2>Hôte :</font></td>
                <td><font size=2>$Hote</font></td>
              </tr>
              <tr> 
                <td><font size=2>Nom de la base :</font></td>
                <td><font size=2>$Base</font></td>
              </tr>
              <tr> 
                <td><font size=2>Nom de la table :</font></td>
                <td><font size=2>$Table</font></td>
              </tr>
              <tr> 
                <td><font size=2>Login :</font></td>
                <td><font size=2>$Login</font></td>
              </tr>
              <tr> 
                <td><font size=2>Mot de passe base de donn&eacute;es 
                  :</font></td>
                <td><font size=2>(Caché)</font></td>
              </tr>
              <tr> 
                <td height='98' colspan=2> <div align=center> 
                    <center>
                      <form method=POST action='modification.php3'>
                        <input name='submit' type=submit value='Modifier les personnalisations...'>
                        <input type=hidden value='$Pass' name=FPass>
                      </form>
                    </center>
                  </div></td>
              </tr>
            </table>
            </font> 
          </center>
      </center></div><div align=center><center>
            <p><font face=Arial size=2 color=#ffffff><strong>Actuellement $nb_enr 
              message(s) sont enregistr&eacute;(s)</strong></font></p>
      </center></div><div align=center><center><table border=0 cellspacing=1>
        <tr>
          <td><div align=center><center><p><font face=Verdana size=2 color=#ffccff><strong>Gestion du forum</strong></font></td>
        </tr>
        <tr>
                <td><font size=2>
<form action='supprimer.php3' methode='POST'><input type='hidden' name=FPass value='$Pass'><input type=submit value=&gt;&gt;>
                    Supprimer un <font size='2'>message</font> 
                  </form>
         
     
          </td>
        </tr>
      </table>
      </center></div>
</font></p>	 
   </tr>
   <tr>
       </tr></table></center></div></body></html>";
//}


?> 
