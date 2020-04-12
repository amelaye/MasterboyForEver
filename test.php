<?
session_start();
?>
<html>

<head>
<title>Mise à jour</title>
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
input {  background-color: #CCCCFF; border: #6666FF}
select {  background-color: #CCCCFF; border: auto #6666FF}
textarea {  background-color: #CCCCFF}
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
      <center>
        <h2>CONTACT</h2>
        <p align="left"><b>Le site masterboy.fr.st a &eacute;t&eacute; con&ccedil;u 
          par Am&eacute;lie OnLine dont vous pouvez retrouver le site personnel 
          sur : <a href="http://www.amelieonline.net">http://www.amelieonline.net</a> 
          .</b></p>
        <p align="left"><b>Vous pouvez lui envoyer un message via le formulaire 
          ci-dessous :</b></p>
        <form name="form1" >
          <p align="left">Pseudo : 
            <input type="text" name="textfield">
            <br>
            <br>
            E-Mail : 
            <input type="text" name="textfield2">
          </p>
          <p align="left">Vous connaissez Masterboy depuis : 
            <select name="select">
              <option selected>Leurs d&eacute;buts, en 1990</option>
              <option>L'explosion de leurs tubes, en 1994</option>
              <option>Il y a cinq ans environ</option>
              <option>Il y a deux-trois ans</option>
              <option>Moins de deux ans</option>
            </select>
          </p>
          <p align="left">Question chanteuse, vous pr&eacute;f&eacute;rez : 
            <select name="select2">
              <option selected>Trixxi</option>
              <option>Anabel</option>
              <option>Linda</option>
            </select>
          </p>
          <p align="left">Votre album pr&eacute;f&eacute;r&eacute; : 
            <select name="select3">
              <option selected>The Masterboy Family</option>
              <option>Feeling Allright</option>
              <option>Different Dreams</option>
              <option>Generation Of Love</option>
              <option>Colours</option>
            </select>
          </p>
          <p align="left">Ce site vous para&icirc;t-il complet ? 
            <select name="select4">
              <option selected>Oui</option>
              <option>Non</option>
            </select>
          </p>
          <p align="left">Si non, que manquera&icirc;t-il au site ? 
            <input type="text" name="textfield3" maxlength="255" size="50">
          </p>
          <p align="left">Votre message :</p>
          <p align="left"> 
            <textarea name="textfield4" wrap="VIRTUAL" cols="60" rows="15"></textarea>
          </p>
          <p align="center"> 
            <input type="submit" name="Submit" value="Envoyer">
            <input type="reset" name="Submit2" value="Annuler">
          </p>
        </form>
      </center>
      </td>
  </tr>
</table>
</body>

</html>
