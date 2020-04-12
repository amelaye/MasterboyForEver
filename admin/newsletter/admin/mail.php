 
<meta name="generator" content="Namo WebEditor v4.0">
<style type="text/css">
<!--
input {  background-color: #CCCCFF}
select {  background-color: #CCCCFF}
textarea {  background-color: #CCCCFF}
-->
</style>

<body bgcolor="#000000">
<p><font face="Arial" size="2"><b><font face="Verdana, Arial, Helvetica, sans-serif" color="#CCCCFF">Envoyer 
  un mail &agrave; tout le monde ;) &nbsp;Vous pouvez inserez du code HTML mais 
  pas les balise &lt;html&gt;&lt;head&gt;&lt;/head&gt;&lt;/html&gt;</font></b></font></p>
<form name="form1" method="post">
    
  <table width="533" align="center" bgcolor="#000000">
    <tr> 
      <td width="95" align="right"> 
        <p><font size="2" color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><b>Sujet 
          : </b></font></p>
      </td>
      <td width="426" align="left"> 
        <p><font size="2"> 
          <input type="text" name="sujet" size="60">
          </font></p>
      </td>
    </tr>
    <tr> 
      <td width="95" align="right" valign="top"> 
        <p><font size="2"><font size="2"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"></font></font></font></font></p>
      </td>
      <td width="426"> 
        <p><font face="Verdana"> 
          <select name="face" size="1">
            <option selected>Selectioner une police</option>
            <option value="Comic Sans Ms">Comic Sans Ms</option>
            <option value="Arial">Arial</option>
            <option value="Tempus Sans ITC">Tempus Sans ITC</option>
            <option value="Verdana">Verdana</option>
          </select>
          <select name="size" size="1">
            <option selected>Taille</option>
            <option value="1">1 (8pts)</option>
            <option value="2">2 (10pts)</option>
            <option value="3">3 (12pts)</option>
            <option value="4">4 (14pts)</option>
            <option value="5">5 (18 pts)</option>
            <option value="6">6 (24pts)</option>
            <option value="7">7 (36pts)</option>
          </select>
          </font><font face="Verdana" size="1">( que dans l'email ) 
          <input type="hidden" name="p" value="send">
          <input type="hidden" name="login" value="<?echo"$lo";?>">
          <input type="hidden" name="pass" value="<?echo"$pa";?>">
          </font></p>
      </td>
    </tr>
    <tr> 
      <td width="95" align="right" valign="top" rowspan="3"> 
        <p><font size="2" color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><b>Contenu 
          : </b></font></p>
      </td>
      <td width="426"> 
        <p><font size="2"> 
          <textarea name="body" rows="18" cols="60" style="font-family:'Comic Sans MS'; font-size:10pt;"></textarea>
          </font></p>
      </td>
    </tr>
    <tr> 
      <td width="426" align="left"> 
        <p><font face="Arial" size="2"> <font face="Verdana, Arial, Helvetica, sans-serif"> 
          <font color="#FFFFFF"> <b>
          <input type="radio" name="option" value="FREE" checked>
          Mode Free &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <input type="radio" name="option" value="PRO">
          Mode PRO</b></font></font></font></p>
      </td>
    </tr>
    <tr> 
      <td width="426" align="left"> 
        <p><font size="2"> 
          <input type="submit" value="Envoyer">
          <input type="reset" value="Réinitialiser">
          </font></p>
      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
