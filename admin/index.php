<?
include ('securite.php'); 
include("fonctions.php");
if ($racine==""){ $racine=".."; }
if (!is_dir($racine)){$racine="..";$erreur="Dossier s�lectionn� invalide";}
$repertoire = stripslashes($repertoire);
$racine = stripslashes($racine);

///////////////////////////////////////////////////////

if ($action=="envoyer_fichier"){
  $fichier = str_replace("\\","/",$fichier);
  $xp = split("/",$fichier);
  $i = count($xp);
  $dest = $racine."/".$xp[$i-1];
  copy($fichier,$dest);
  $reussite = "Fichier copi� avec succ�s";
}



if ($action=="creer_repertoire"){
 if (is_dir($racine."/".$repertoire)){$erreur="D�sol� ce r�pertoire existe d�j�";} else {
  if (!rep_valide($repertoire)){$erreur="Le nom du r�pertoire est invalide";} else {
   mkdir($racine."/".$repertoire,"0777");
   $reussite="R�pertoire cr�� avec succ�s";
  }
 }
}

if ($action=="supprimer_repertoire"){
 if (!is_dir($racine."/".$repertoire)){$erreur="D�sol� ce r�pertoire n'existe pas";} else {
  if (!rep_valide($repertoire)){$erreur="D�sol�, le nom du r�pertoire est invalide";} else {
   if ($confirm=="oui"){
    delete($racine."/".$repertoire);
    $reussite="R�pertoire supprim� avec succ�s";
   } else {
    $confirmer="�tes-vous s�r de vouloir supprimer le r�pertoire \"".$repertoire."\" ? <a href=\"index.php?action=supprimer_repertoire&racine=".$racine."&repertoire=".$repertoire."&confirm=oui\">Oui</a> - <a href=\"index.php?racine=".$racine."\">Non</a>";
   }
  }
 }
}

if ($action=="supprimer_fichier"){
 if (!file_exists($racine."/".$fichier)){$erreur="D�sol� ce fichier n'existe pas";} else {
  if (!rep_valide($fichier)){$erreur="D�sol�, le nom du fichier est invalide";} else {

   if ($confirm=="oui"){
    delete($racine."/".$fichier);
    $reussite="Fichier supprim� avec succ�s";
   } else {
    $confirmer="�tes-vous s�r de vouloir supprimer le fichier \"".$fichier."\" ? <a href=\"index.php?action=supprimer_fichier&racine=".$racine."&fichier=".$fichier."&confirm=oui\">Oui</a> - <a href=\"index.php?racine=".$racine."\">Non</a>";
   }

  }
 }
}


if ($action=="renommer_repertoire"){
 if (!is_dir($racine."/".$repertoire)){$erreur="D�sol� ce r�pertoire n'existe pas";} else {
  if ($nouveau_repertoire==""){
   $confirmer='<img src="images/renommer.gif" width="17" height="17" align="middle">
   Comment voulez-vous renommer le r�pertoire ?<br><table><form action="index.php">
   <tr><td><input type="text" name="nouveau_repertoire" value=""><input type="hidden"
   name="racine" value="'.$racine.'"><input type="hidden" name="action"
   value="renommer_repertoire"><input type="hidden"    name="repertoire" value="'.$repertoire.'">
   </td><td><input type="submit" value="Renommer"></td></form></tr></table>';
  } else {
   if (!rep_valide($nouveau_repertoire)){
    $erreur="D�sol�, le nom du r�pertoire est invalide";
    $confirmer='<img src="images/renommer.gif" width="17" height="17" align="middle">
    Comment voulez-vous renommer le r�pertoire ?<br><table><form action="index.php">
    <tr><td><input type="text" name="nouveau_repertoire" value=""><input type="hidden"
    name="racine" value="'.$racine.'"><input type="hidden" name="action"     value="renommer_repertoire">
    <input type="hidden" name="repertoire" value="'.$repertoire.'">
    </td><td><input type="submit" value="Renommer"></td></form></tr></table>';
   } else {
    rename($racine."/".$repertoire,$racine."/".$nouveau_repertoire);
    $reussite="R�pertoire renomm� avec succ�s";
   }
  }
 }
}

if ($action=="renommer_fichier"){
 if (!file_exists($racine."/".$fichier)){$erreur="D�sol� ce fichier n'existe pas";} else {
  if ($nouveau_fichier==""){
   $confirmer='<img src="images/renommer.gif" width="17" height="17" align="middle">
   Comment voulez-vous renommer le fichier ?<br><table><form action="index.php">
   <tr><td><input type="text" name="nouveau_fichier" value=""><input type="hidden"
   name="racine" value="'.$racine.'"><input type="hidden" name="action" value="renommer_fichier">
   <input type="hidden" name="fichier" value="'.$fichier.'">
   </td><td><input type="submit" value="Renommer"></td></form></tr></table>';
  } else {
   if (!rep_valide($nouveau_fichier)){
    $erreur="D�sol�, le nom du fichier est invalide";
   $confirmer='<img src="images/renommer.gif" width="17" height="17" align="middle">
   Comment voulez-vous renommer le fichier ?<br><table><form action="index.php">
   <tr><td><input type="text" name="nouveau_fichier" value=""><input type="hidden"
   name="racine" value="'.$racine.'"><input type="hidden" name="action" value="renommer_fichier">
   <input type="hidden" name="fichier" value="'.$fichier.'">
   </td><td><input type="submit" value="Renommer"></td></form></tr></table>';
   } else {
    rename($racine."/".$fichier,$racine."/".$nouveau_fichier);
    $reussite="Fichier renomm� avec succ�s";
   }
  }
 }
}

if ($action=="copier_fichier"){
 if (!file_exists($racine."/".$fichier)){
  $erreur="D�sol� ce fichier n'existe pas";
 } else {
  if ($destination==""){
   $confirmer='<img src="images/copier.gif" width="17" height="17" align="middle">
   Dans quel r�pertoire voulez vous copier ce fichier ?<br><table><form action="index.php">
   <tr><td>';
   $confirmer.= '<select name="destination">';
   deroul_arbo("..");
   $confirmer.= "</select>";
   $confirmer.= '<input type="hidden"
   name="racine" value="'.$racine.'"><input type="hidden" name="action" value="copier_fichier">
   <input type="hidden" name="fichier" value="'.$fichier.'">
   </td><td><input type="submit" value="Copier"></td></form></tr></table>';
  } else {
   if (!is_dir($destination)){
   $erreur="D�sol�, le nom du r�pertoire est invalide";
   $confirmer='<img src="images/copier.gif" width="17" height="17" align="middle">
   Dans quel r�pertoire voulez vous copier ce fichier ?<br><table><form action="index.php">
   <tr><td>';
   $confirmer.= '<select name="destination">';
   deroul_arbo("..");
   $confirmer.= "</select>";
   $confirmer.= '<input type="hidden"
   name="racine" value="'.$racine.'"><input type="hidden" name="action" value="copier_fichier">
   <input type="hidden" name="fichier" value="'.$fichier.'">
   </td><td><input type="submit" value="Copier"></td></form></tr></table>';
   } else {
    copy($racine."/".$fichier,$destination."/".$fichier);
    $reussite="Fichier copi� avec succ�s";
   }
  }
 }
}

if ($action=="deplacer_fichier"){
 if (!file_exists($racine."/".$fichier)){
  $erreur="D�sol� ce fichier n'existe pas";
 } else {
  if ($destination==""){
   $confirmer='<img src="images/deplacer.gif" width="17" height="17" align="middle">
   Dans quel r�pertoire voulez vous d�placer ce fichier ?<br><table><form action="index.php">
   <tr><td>';
   $confirmer.= '<select name="destination">';
   deroul_arbo("..");
   $confirmer.= "</select>";
   $confirmer.= '<input type="hidden"
   name="racine" value="'.$racine.'"><input type="hidden" name="action" value="deplacer_fichier">
   <input type="hidden" name="fichier" value="'.$fichier.'">
   </td><td><input type="submit" value="D�placer"></td></form></tr></table>';
  } else {
   if (!is_dir($destination)){
    $erreur="D�sol�, le nom du fichier est invalide";
   $confirmer='<img src="images/deplacer.gif" width="17" height="17" align="middle">
   Dans quel r�pertoire voulez vous d�placer ce fichier ?<br><table><form action="index.php">
   <tr><td>';
   $confirmer.= '<select name="destination">';
   deroul_arbo("..");
   $confirmer.= "</select>";
   $confirmer.= '<input type="hidden"
   name="racine" value="'.$racine.'"><input type="hidden" name="action" value="deplacer_fichier">
   <input type="hidden" name="fichier" value="'.$fichier.'">
   </td><td><input type="submit" value="D�placer"></td></form></tr></table>';
   } else {
    copy($racine."/".$fichier,$destination."/".$fichier);
    unlink($racine."/".$fichier);
    $reussite="Fichier d�plac� avec succ�s";
   }
  }
 }
}

if ($action=="editer_fichier"){
 if (!file_exists($racine."/".$fichier)){
  $erreur="D�sol� ce fichier n'existe pas";
 } else {
  if ($source!=""){
   unlink($racine."/".$fichier);
   $fd = fopen($racine."/".$fichier, "w+");
   fseek($fd,0);
   fputs($fd,stripslashes($source));
   fclose($fd);
   $reussite = "Fichier modifi� avec succ�s";
  } else {
   $fd = fopen($racine."/".$fichier, "r");
   $source = fread($fd, filesize ($racine."/".$fichier));
   fclose($fd);
   $confirmer='<img src="images/editer.gif" width="17" height="17" align="middle">
   Voici le fichier � �diter :<br><table><form action="index.php">
   <tr><td>';
   $confirmer.= '<textarea cols="55" rows="5" name="source">';
   $confirmer.= $source;
   $confirmer.= "</textarea>";
   $confirmer.= '<input type="hidden"
   name="racine" value="'.$racine.'"><input type="hidden" name="action" value="editer_fichier">
   <input type="hidden" name="fichier" value="'.$fichier.'">
   </td></tr><tr><td><div align="right"><input type="submit" value="Modifier"></td></form></tr></table>';
  }
 }
}


///////////////////////////////////////////////////////
?>
<html>
<head>
<style>
input.creer{
	color: #ff3300 ;
	font-family: Tahoma ;
	font-size: 11px ;
}
input.poster{
	color: #ff3300 ;
	font-family: Tahoma ;
	font-size: 11px ;
}
td {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #FFFFFF}
</style>
<title>N-File</title>
</head>
<body topmargin="0" leftmargin="0" bgcolor="#000000" link="#004488" vlink="#004488" alink="#ff3300">
<table width="100%" cellspacing=0 cellpadding=1>
  <? if ($erreur!=""){
?> 
  <tr bgcolor="#000000"> 
    <td colspan=12><font color="#FFCC33" face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><b><b><? echo $erreur; ?></font></td>
  </tr>
  <? } 
if ($reussite!=""){
?> 
  <tr bgcolor="#000000"> 
    <td colspan=12><font color="#FF00FF" face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><b><b><? echo $reussite; ?></font></td>
  </tr>
  <? }
if ($confirmer!=""){
?> 
  <tr bgcolor="#000000"> 
    <td colspan=12><font color="#9999FF" face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><b><b><? echo $confirmer; ?></font></td>
  </tr>
  <? }
?> 
  <tr> 
    <td bgcolor="#eeeeee"><img width="17" height="17" src="images/racine.gif"></td>
    <td bgcolor="#CCCCFF" colspan=11><font size="-1" face="Tahoma" color="#000000"><b><? splitter($racine); ?></font></td>
  </tr>
  <tr bgcolor="#660066"> 
    <td width="17"> 
      <div align="center"><font color="#CCCCCC"><b><font size="-1">&nbsp;</font></b></font></div>
    </td>
    <td width="75"> 
      <div align="center"><font color="#CCCCCC"><b>&nbsp;Nom</b></font></div>
    </td>
    <td width="25"> 
      <div align="center"><font color="#CCCCCC"><b><font size="-1">&nbsp;</font></b></font></div>
    </td>
    <td width="3"> 
      <div align="center"><font color="#CCCCCC"><b><img src="images/separation.gif" width="1" height="10"></b></font></div>
    </td>
    <td width="75"> 
      <div align="center"><font color="#CCCCCC"><b>&nbsp;Taille</b></font></div>
    </td>
    <td width="25"> 
      <div align="center"><font color="#CCCCCC"><b><font size="-1">&nbsp;</font></b></font></div>
    </td>
    <td width="3"> 
      <div align="center"><font color="#CCCCCC"><b><img src="images/separation.gif" width="1" height="10"></b></font></div>
    </td>
    <td width="75"> 
      <div align="center"><font color="#CCCCCC"><b>&nbsp;Type</b></font></div>
    </td>
    <td width="25"> 
      <div align="center"><font color="#CCCCCC"><b><font size="-1">&nbsp;</font></b></font></div>
    </td>
    <td width="3"> 
      <div align="center"><font color="#CCCCCC"><b><img src="images/separation.gif" width="1" height="10"></b></font></div>
    </td>
    <td width="75"> 
      <div align="center"><font color="#CCCCCC"><b>&nbsp;Actions</b></font></div>
    </td>
    <td> 
      <div align="center"><font color="#CCCCCC"><b><font size="-1">&nbsp;</font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="17" bgcolor="#ffffff"><?
  echo '<img width="17" height="17" src="images/repertoire.gif">';
 ?></td>
    <td bgcolor="#000000" colspan="3"><b> <a href="index.php?racine=<?

$rep = explode("/",$racine);
for ($i=0;$i+1<count($rep);$i++){
echo $rep[$i];
if ($i+2!=count($rep)){echo "/";}
}
?>"><? echo ".."; ?></a></b></td>
    <td bgcolor="#000000" colspan="3">-</td>
    <td bgcolor="#000000" colspan="3">R�pertoire</td>
    <td bgcolor="#000000" colspan="2"><font size="-1">&nbsp;</font></td>
  </tr>
  <?
$i=0;
$j=0;
$fp = opendir($racine);
while ($file = readdir($fp))
{
 if ($file!="." && $file!="..")
 {
  if (!is_dir($racine."/".$file)){
   $fichiers[$i] = $file;
   $i++;
  } else {
   $repertoires[$j] = $file;
   $j++;
  }
 }
}

closedir($fp);
if (count($repertoires)!=0){ sort($repertoires); }
if (count($fichiers)!=0){ sort($fichiers); }
for ($i=0;$i<count($repertoires);$i++){
 $file = $repertoires[$i];
 ?> 
  <tr> 
    <td width="17" bgcolor="#000000"><?
 if ($action=="creer_repertoire"&&$repertoire==$file){
  echo '<img width="17" height="17" src="images/nouveau_repertoire.gif">';
 } else {
  echo '<img width="17" height="17" src="images/repertoire.gif">';
 } ?></td>
    <td bgcolor="#000000" colspan="3"><b> <a href="index.php?racine=<? echo  $racine."/".$file; ?>"><? echo $file; ?></a></b></td>
    <td bgcolor="#000000" colspan="3">-</td>
    <td bgcolor="#000000" colspan="3">R�pertoire</td>
    <td bgcolor="#000000" colspan="2"> <a href="index.php?action=supprimer_repertoire&racine=<? echo $racine; ?>&repertoire=<? echo $file ?>"><img border="0" width="17" height="17" src="images/supprimer.gif" alt="Supprimer ce r�pertoire"></a> 
      <a href="index.php?action=renommer_repertoire&racine=<? echo $racine; ?>&repertoire=<? echo $file ?>"><img border="0" width="17" height="17" src="images/renommer.gif" ALT="Renommer ce r�pertoire"></a> 
    </td>
  </tr>
  <?
}

for ($i=0;$i<count($fichiers);$i++){
 $file = $fichiers[$i];
 $extension = extension($file);
 ?> 
  <tr> 
    <td width="17" bgcolor="#000000"><img width="17" height="17" src="<? echo image_ext($extension); ?>"></td>
    <td bgcolor="#000000" colspan="3"><b><a href="<? echo $racine."/".$file; ?>" target="_blank"><? echo $file; ?></a></b></td>
    <td bgcolor="#000000" colspan="3"><? echo taille($racine."/".$file); ?></td>
    <td bgcolor="#000000" colspan="3"><? echo description_ext($extension); ?></td>
    <td bgcolor="#000000" colspan="2"> <a href="index.php?action=supprimer_fichier&fichier=<? echo $file; ?>&racine=<? echo $racine; ?>"><img border="0" width="17" height="17" src="images/supprimer.gif" ALT="Supprimer ce fichier"></a> 
      <a href="index.php?action=renommer_fichier&fichier=<? echo $file; ?>&racine=<? echo $racine; ?>"><img border="0" width="17" height="17" src="images/renommer.gif" ALT="Renommer ce fichier"></a> 
      <a href="index.php?action=copier_fichier&fichier=<? echo $file; ?>&racine=<? echo $racine; ?>"><img border="0" width="17" height="17" src="images/copier.gif" ALT="Copier ce fichier"></a> 
      <a href="index.php?action=deplacer_fichier&fichier=<? echo $file; ?>&racine=<? echo $racine; ?>"><img border="0" width="17" height="17" src="images/deplacer.gif" ALT="D�placer ce fichier"></a> 
      <? if (editable($extension)){ ?> <a href="index.php?action=editer_fichier&fichier=<? echo $file; ?>&racine=<? echo $racine; ?>"><img border="0" width="17" height="17" src="images/editer.gif" ALT="Editer ce fichier"></a> 
      <? } ?> </td>
  </tr>
  <?
}
?> 
</table>
<br>
<br>
<table>

<tr><form name="creer_repertoire" action="index.php">
    <td colspan="3"><img width="17" height="17" src="images/nouveau_repertoire.gif" align="middle"> 
      Cr�er un r�pertoire</td>
  </tr>
<tr><td colspan="2"><input type="hidden" name="action" value="creer_repertoire"><input type="hidden" name="racine" value="<? echo $racine; ?>"><input type="text" name="repertoire" class="creer"></td><td><input type="submit" value="Cr�er"></td></form></tr>

<tr><form name="envoyer_fichier" action="index.php">
    <td colspan="3"><img width="17" height="17" src="images/upload.gif" align="middle"> 
      Envoyer un fichier</td>
  </tr>
<tr><input type="hidden" name="action" value="envoyer_fichier"><td colspan="2"><input type="file" name="fichier" class="creer"></td><td><input type="submit" value="Envoyer"></td></form></tr>
</table>
</body>
</html>