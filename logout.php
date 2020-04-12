<?php 
session_start(); 
session_unregister("username"); 
session_unregister("id");
session_unset(); 
session_destroy(); 
$expire = 365*24*3600; 
setcookie("username","",time()-$expire,"/","");
setcookie("id","",time()-$expire,"/","");    
?><head>
<title>Déconnection</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
td {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #FFFFFF}
h1 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; font-weight: bold; color: #000000; background-color: #CCCCCC; background-image:   url(backgr.jpg)}
a {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #CCCCCC; font-style: normal; text-decoration: none}
h2 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14pt; font-weight: bold; color: #99CCFF}
h3 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; font-weight: bold; color: #CCCCFF}
table {  background-color: #000000}
.classe {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #000000; background-color: #CCCCCC; background-image:   url(backgr.jpg); font-weight: bold}
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="800" border="0" cellspacing="0" cellpadding="3">
  <tr> 
    <td colspan="2"> 
      <div align="center"><img src="frst.gif" width="702" height="122" align="middle"></div>
    </td>
  </tr>
  <tr> 
       <? include ('banner.inc'); ?> 
  </tr>
  <tr> 
    <td width="139" valign="top"> 
           <? include ('menu2.inc'); ?> 
    </td>
    <td width="649" valign="top">D&eacute;connexion 
      ... </td>
  </tr>
</table>
</body>



<META HTTP-EQUIV="refresh" CONTENT="2; URL=page.php"> 
