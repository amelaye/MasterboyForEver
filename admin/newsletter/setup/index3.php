
<html>

<head>
<title>Membre de ClickFR, Reseau francophone Paie-Par-Click </title>
<meta name="generator" content="Namo WebEditor v4.0">
</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
<table cellpadding="0" cellspacing="0" width="734">
    <tr>
        <td width="255">
            <p><img src="../admin/images/index_php_smartbutton1.gif" width="297" height="50" border="0"></p>
        </td>
        <td width="479">
<center><IFRAME NAME=iclickfr SRC=http://www5.click-fr.com/printk.cgi?a=10211-4040315&b=20 width=468 height=60 MARGINWIDTH=0 MARGINHEIGHT=0 HSPACE=0 VSPACE=0 FRAMEBORDER=0 SCROLLING=no>
<SCRIPT LANGUAGE=JavaScript> var nbre = Math.round(Math.random()*100000);
var chaine="<a href=http://www5.click-fr.com/clickj.cgi?a=10211-4040315&b=" + nbre + " target=clickfr><img border=0  height=60 width=468  SRC=http://www5.click-fr.com/printj.cgi?a=10211-4040315&b=" + nbre +" alt=\"*** Visitez notre Sponsor ! ***\"></a>";
document.write(chaine);
</SCRIPT></IFRAME>
                                    <p>&nbsp;</center>
        </td>
    </tr>
    <tr>
        <td width="734" colspan="2">
            <p><font face="Arial Black" size="4">&nbsp;Instalation de NewsProLetter</font></p>
            <table align="center" cellspacing="0" width="704" border="1" bordercolordark="white" bordercolorlight="black">
                <tr>
                    <td width="704" bgcolor="#F0EEEE">
                        <p align="left"><font face="Arial" size="2"><b><u>Etape 
                        3:<br></u></b><?

include("../include/config.php");
include("../include/fonctions.php");
?><?
//tables
$r["TA_newsletter"][0] = "CREATE TABLE ta_newsletter (
  id int(255) NOT NULL DEFAULT '0' auto_increment,
  email varchar(255) NOT NULL DEFAULT '' ,
  PRIMARY KEY (id)
)";

$r["TA_archives"][0] = "CREATE TABLE ta_archives (
  id int(255) NOT NULL DEFAULT '0' auto_increment,
  sujet varchar(255) NOT NULL DEFAULT '' ,
  body text NOT NULL ,
  date date NOT NULL DEFAULT '0000-00-00' ,
  PRIMARY KEY (id)
)";

$r["TA_config"][0] = "CREATE TABLE ta_config (
  email varchar(255) NOT NULL DEFAULT '' ,
  urlsite varchar(255) NOT NULL DEFAULT '' ,
  dossier varchar(255) NOT NULL DEFAULT '' 
)";
//créations			
while (list($key, $value) = each($r)) 
{
for ($i = 0; $i < count($r[$key]); $i++) 
{
$nl = mysql_query($r[$key][$i]);
}
}

$nl == true ? print("Création des tables réussi ") : print("ERREUR ! Tu n'a pas bien configuré le fichier CONFIG.PHP ou les tables TA_newsletter et TA_archives existe déjà sur le serveur Mysql !");
?></font></p>
                        <p align="left"><font face="Arial" size="2"><a href="index4.php">Maintenan 
                        tu doit configurer ton scripts pour qu'il marche ;) 
                        &gt;&gt;</a></font></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="255">
            <p><font face="Arial" size="2">&nbsp;</font></p>
        </td>
        <td width="479">
            <p><font face="Arial" size="2">&nbsp;</font></p>
        </td>
    </tr>
    <tr>
        <td width="734" colspan="2">
            <p align="center"><font face="Arial" size="1">NewsProLetter by <a href="http://www.teamsawards.fr.st" target="_blank">TeamsAwards</a></font></p>
        </td>
    </tr>
</table>
</body>








</html>
