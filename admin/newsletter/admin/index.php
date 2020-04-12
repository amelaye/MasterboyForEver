<?
include("../../connection.php");
include("../include/fonctions.php");

//admin

// Total inscrits
$q = mysql_query("SELECT COUNT(*) AS num FROM ta_newsletter");
$r = mysql_fetch_array($q);
$tous = $r["num"];
?>
<html>
<head>
<title>Home</title>
<meta name="generator" content="Namo WebEditor v4.0">
<style type="text/css">
<!--
body {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #FFFFFF}
td {  }
a {  font-weight: bold; color: #000099; text-decoration: none}
-->
</style>
</head>

<body bgcolor="#000000">
<table cellpadding="0" cellspacing="0" bgcolor="#000000" height="172">
  <tr valign="top"> 
    <td height="224"> 
      <table cellpadding="0" cellspacing="0" bordercolordark="#000000" bordercolorlight="black" width="649">
        <tr> 
          <td colspan="2" height="158" valign="top" bgcolor="#000000"> 
            <table align="left" cellpadding="0" cellspacing="0" width="655">
              <tr bgcolor="#9999FF"> 
                <td width="647"> 
                  <p align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b><a href="?p=home">Home</a> 
                    :: <a href="?p=mail">Envoi mail</a> :: <a href="?p=inscrit">Inscrits</a> 
                    :: <a href="?p=archives">Archives </a>:: <a href="?p=code">Codes 
                    HTML</a></b></font></p>
                </td>
              </tr>
              <tr> 
                <td width="647"> 
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                </td>
              </tr>
              <tr> 
                <td width="647"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">&nbsp;il 
                  y a actuelement <?echo "$tous";?> inscrit(s)</font></b></font></td>
              </tr>
              <tr> 
                <td width="647"> 
                  <hr size="1" color="blue">
                </td>
              </tr>
              <tr> 
                <td width="647"> 
                  <p>&nbsp;<?if($p == "")
{
include "home.php";
}
else
{
include "$p.php";
}?><br>
                  </p>
                </td>
              </tr>
              <tr bgcolor="#9999FF"> 
                <td width="647">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
<!--Namo WebEditor Data 4.0
:EmbededNPI1
agkAAHhecwny92JkYGYwY2Bg0AfieEYGhkQgDaQYfn76BJRhBrIMgFxXIA1UyhAPpNEBE1QH
WHzvXiwqRoUGIgTCDBlMB8LewWKnY1FmYo6CU05icjZVnMSHZAooX1gAMSjn2ALzRRSOfAHK
GyCw4cV/hIoGJDZVXIbdEEaGDKBEDBBzAJ0BokcBKAT08IEREETgfEFFf0qg5Qt7IF8HiB2B
+SICR74A1TBgQKe8QEXvDluj/FLLixUCivIVfFJLSlKLhq0/cXnMOT83M1khODGvWME3mAq+
B+ULUD0BAgCp3yaT
-->






</html>