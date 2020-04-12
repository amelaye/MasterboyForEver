<table width="162" border="1" cellspacing="0" cellpadding="3" bordercolor="#CCCCCC">
        <tr background="backgr.jpg" bgcolor="#CCCCCC"> 
          <td height="6"> 
            <p class="classe" align="center">Nouveaut&eacute;s</p>
          </td>
        </tr>
        <tr> 
          <td><font color="#FFFFFF"><?
		$select='select * from pages where Rubrique="Nouveautés"';
		$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error());
		$total = mysql_num_rows($result);

	
	
		$select = 'select * FROM pages where Rubrique="Nouveautés"';
		$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
		while ( $ligne = mysql_fetch_array($requete) ) 
			{
			
			$myfichier='mboy.php?Num='.$ligne[Num].'';
			echo "<a href=\"$myfichier\">".$ligne[Titre]."</a></br>\n" ;
			
			}
		 ?></font></td>
        </tr>
      </table>
      <br>
      <table width="162" border="1" cellspacing="0" cellpadding="3" bordercolor="#CCCCCC">
        <tr background="backgr.jpg" bgcolor="#CCCCCC"> 
          <td height="8"> 
            <p class="classe" align="center">Le groupe</p>
          </td>
        </tr>
        <tr> 
          <td><font color="#FFFFFF"><?
		$select='select * from pages where Rubrique="Groupe"';
		$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error());
		$total = mysql_num_rows($result);

	
	
		$select = 'select * FROM pages where Rubrique="Groupe"';
		$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
		while ( $ligne = mysql_fetch_array($requete) ) 
			{
			
			$myfichier='mboy.php?Num='.$ligne[Num].'';
			echo "<a href=\"$myfichier\">".$ligne[Titre]."</a></br>\n" ;
			
			}
		 ?></font></td>
        </tr>
      </table>
      <br>
      <table width="162" border="1" cellspacing="0" cellpadding="3" bordercolor="#CCCCCC">
        <tr bgcolor="#CCCCCC"> 
          <td height="14"> 
            <p class="classe" align="center">For ever ...</p>
          </td>
        </tr>
        <tr> 
          <td><font color="#FFFFFF"><?
		$select='select * from pages where Rubrique="Forever"';
		$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error());
		$total = mysql_num_rows($result);

	
	
		$select = 'select * FROM pages where Rubrique="Forever"';
		$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
		while ( $ligne = mysql_fetch_array($requete) ) 
			{
			
			$myfichier='mboy.php?Num='.$ligne[Num].'';
			echo "<a href=\"$myfichier\">".$ligne[Titre]."</a></br>\n" ;
			
			}
		 ?></font></td>
        </tr>
      </table>
      <br>
      <table width="162" border="1" cellspacing="0" cellpadding="3" bordercolor="#CCCCCC">
        <tr bgcolor="#CCCCCC" align="center" valign="top"> 
          <td height="1"> 
            <p class="classe">Pour les fans ...</p>
          </td>
        </tr>
        <tr> 
          <td><font color="#FFFFFF"><?
		$select='select * from pages where Rubrique="Fans"';
		$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error());
		$total = mysql_num_rows($result);

	
	
		$select = 'select * FROM pages where Rubrique="Fans"';
		$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
		while ( $ligne = mysql_fetch_array($requete) ) 
			{
			
			$myfichier='mboy.php?Num='.$ligne[Num].'';
			echo "<a href=\"$myfichier\">".$ligne[Titre]."</a></br>\n" ;
			
			}
	echo "<a href=\"page.php\">Masterboy FANS !</a></br>\n" ;
echo "<a href=\"livredor.php3\">Guestbook</a></br>\n" ;
echo "<a href=\"http://www.amelieonline.net/forum/\" target=\"forum\">Forum</a></br>\n" ;
		 ?></font></td>
        </tr>
      </table>
<br>
<table width="162" border="1" cellspacing="0" cellpadding="3" bordercolor="#CCCCCC">
        <tr bgcolor="#CCCCCC" align="center" valign="top"> 
          <td height="1"> 
            
      <p class="classe">Archives</p>
          </td>
        </tr>
        <tr> 
          <td><font color="#FFFFFF">
		<?
		include ('connection.php');
		$select='select * from pages where Rubrique="Archives"';
		$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error());
		$total = mysql_num_rows($result);

	
	
		$select = 'select * FROM pages where Rubrique="Archives"';
		$requete = mysql_query($select,$link)  or die ('Erreur : '.mysql_error() );
		while ( $ligne = mysql_fetch_array($requete) ) 
			{
			
			$myfichier='mboy.php?Num='.$ligne[Num].'';
			echo "<a href=\"$myfichier\">".$ligne[Titre]."</a></br>\n" ;
			
			;
}
mysql_close($link);
		 ?></font></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    
