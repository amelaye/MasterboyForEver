<? 
if(file_exists('../installation/config/informations.php3'))

	{
		include('administration.php3');
		include('../installation/config/informations.php3');

		$option=implode($argv,'');
		
	}


else{
	echo "<HTML>
<body bgcolor='#000000' text='#FFFFFF' link='#FFFF00' vlink='#00FF00' alink='#FF0000'>
<div align='center'> 
  <form name='formulaire' method='post' action='installation.php3'>
    <p>&nbsp;</p>
    <table width='400' border='0'>
      <tr bgcolor='#666666'> 
        <td colspan='2'> <div align='center'><font face='Verdana, Arial, Helvetica, sans-serif'><strong><br>
            INSTALLATION<br>
            <br>
            </strong></font></div></td>
      </tr>
      <tr bgcolor='#00FFFF'> 
        <td><font color='#000000'><strong><br>
          Pseudo <em>(Admin)<br>
          <br>
          </em></strong></font></td>
        <td><div align='center'>
            <input name='FNom' type='text' id='FNom'>
          </div></td>
      </tr>
      <tr bgcolor='#00FFFF'> 
        <td width='50%'> <div align='left'><font color='#000000'><br>
            <strong>Pass <em>(Admin)</em></strong><br>
            <br>
            </font></div></td>
        <td width='50%'> <div align='center'> <font color='#000000'> 
            <input name='FPass' type='password' id='Pass'>
            </font></div></td>
      </tr>
      <tr bgcolor='#00FFFF'> 
        <td> <div align='left'><font color='#000000'><br>
            <strong>Adresse hote</strong><br>
            <br>
            </font></div></td>
        <td> <div align='center'> <font color='#000000'> 
            <input name='FHote' type='text' id='Hote' value='http://'>
            </font></div></td>
      </tr>
      <tr bgcolor='#00FFFF'> 
        <td> <div align='left'><font color='#000000'><br>
            <strong>Nom de la base</strong><br>
            <br>
            </font></div></td>
        <td> <div align='center'> <font color='#000000'> 
            <input name='FBase' type='text' id='Base'>
            </font></div></td>
      </tr>
      <tr bgcolor='#00FFFF'> 
        <td> <div align='left'><font color='#000000'><strong><br>
            Login</strong><br>
            <br>
            </font></div></td>
        <td> <div align='center'> <font color='#000000'> 
            <input name='FLogin' type='text' id='Login'>
            </font></div></td>
      </tr>
      <tr bgcolor='#00FFFF'> 
        <td> <div align='left'><font color='#000000'><br>
            <strong>Password</stroAng></strong><br>
            <br>
            </font></div></td>
        <td> <div align='center'> <font color='#000000'> 
            <input name='FP_login' type='text' id='Plog'>
            </font></div></td>
      </tr>
      <tr bgcolor='#00FFFF'> 
        <td> <div align='left'><font color='#000000'><strong><br>
            Nom de la table</strong><br>
            <br>
            </font></div></td>
        <td> <div align='center'> <font color='#000000'> 
            <input name='FTable' type='text' id='Table'>
            </font></div></td>
      </tr>
    </table>
    <p>
      <input name='Envoyer' type='submit' value='Demarrer l'installation'>
    </p>
  </form>
  
</div>
</HTML>";
}
?>