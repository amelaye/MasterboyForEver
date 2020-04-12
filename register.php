 <?
include("config.php");
viewheader();
?>

<head>
<title>Enregistrez-vous !</title>
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
    <td colspan="3"> 
      <div align="center"><img src="frst.gif" width="702" height="122" align="middle"></div>
    </td>
  </tr>
    <? include('banner.inc'); ?>
  <tr> 
    <td width="139" valign="top"> 
      <? include('menu2.inc'); ?>
    </td>
    <td width="1298" valign="top" colspan="2"> 
      <div align="center"> 
        <h2>Fan Zone</h2>
        <br>
        <h1>Inscription </h1>
      </div>
      <table width="" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr> 
          <td colspan="2"><br>
            Pour vous inscrire &agrave; la Masterboy Fan Zone, merci de remplir 
            ce formulaire. <br>
            <br><form method="post" action="verif.php" method='post' enctype="multipart/form-data"> 
          </td>
        </tr>
        <tr> 
          <td width="100">Pseudo :&nbsp;</td>
          <td> 
            <input class="textfield" name="username" type="text">
          </td>
        </tr>
        <tr> 
          <td>Mot de passe :&nbsp;</td>
          <td> 
            <input class="textfield" name="password" type="password">
          </td>
        </tr>
        <tr> 
          <td>Email :&nbsp;</td>
          <td> 
            <input class="textfield" name="email" type="text">
          </td>
        </tr>
        <tr> 
          <td>Site web :&nbsp;</td>
          <td> 
            <input class="textfield" name="url" type="text">
          </td>
        </tr>
        <tr> 
          <td>Photo :&nbsp;</td>
          <td> 
            <input class="textfield" name="photo" type="file">
          </td>
        </tr>
        <tr> 
          <td>Message (255 caract. max.) :&nbsp;</td>
          <td> 
            <input class="textfield" name="message" type="text">
          </td>
        </tr>
      </table>
      <div align="center"> 
        <p>&nbsp;</p>
        <p> 
          <input type="submit" name="submit" value="ok" class="textfield"></form> 
          <?
viewfooter();
?> </p>
      </div>
    </td>
  </tr>
</table>
</body>

</html>
