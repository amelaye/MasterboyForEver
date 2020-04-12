<?
if($a == ""){
	$q2 = mysql_query("SELECT * FROM ta_archives");
	while ($r2 = mysql_fetch_array($q2)) {
	echo"
	<a href=\"?a=1&p=archives&id=".$r2["id"]."&login=$lo&pass=$pa\"> - ".$r2["sujet"]." le ".$r2["date"]."</a><br>
	";
	}
}
else
{
	$q2 = mysql_query("SELECT * FROM ta_archives WHERE id=$id");
	while ($r2 = mysql_fetch_array($q2)) {
?>
<meta name="generator" content="Namo WebEditor v4.0">
<body bgcolor="#000000">
<table align="center" cellpadding="0" cellspacing="0" width="539">
  <tr bgcolor="#CCCCFF"> 
    <td width="539"> 
      <p><font color="#000000"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Sujet 
        :<? echo"".$r2["sujet"]."";?></font></b></font></p>
    </td>
  </tr>
  <tr> 
    <td width="539"> 
      <p><font face="Arial"><span style="font-size:5pt;">&nbsp;</span></font></p>
    </td>
  </tr>
  <tr bgcolor="#CCCCFF"> 
    <td width="539"> 
      <p><font face="Arial" size="2" color="#000000">&nbsp;<?echo conv($r2["body"]);?></font></p>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<?
	}
}
?>
