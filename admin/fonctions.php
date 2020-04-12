<?

function deroul_arbo($racine){
$fp = opendir($racine);
while ($file = readdir($fp))
{
 if ($file!="." && $file!="..")
 {
  if (is_dir($racine."/".$file)){
  deroul_arbo($racine."/".$file);
  }
 }
}
closedir($fp);
global $confirmer;
$confirmer.= '<option value="'.$racine.'">'.$racine;
}

function delete($file) {
 chmod($file,0777);
 if (is_dir($file)) {
  $handle = opendir($file); 
  while($filename = readdir($handle)) {
   if ($filename != "." && $filename != "..")
{
    delete($file."/".$filename);
   }
  }
  closedir($handle);
  rmdir($file);
 } else {
  unlink($file);
 }
}


function rep_valide($rep){
if (str_replace("\\",".",$rep)!=$rep){return false;}
if (str_replace("/",".",$rep)!=$rep){return false;}
if (str_replace(":",".",$rep)!=$rep){return false;}
if (str_replace("*",".",$rep)!=$rep){return false;}
if (str_replace("?",".",$rep)!=$rep){return false;}
if (str_replace("\"",".",$rep)!=$rep){return false;}
if (str_replace("<",".",$rep)!=$rep){return false;}
if (str_replace(">",".",$rep)!=$rep){return false;}
if (str_replace("|",".",$rep)!=$rep){return false;}
return true;
}

function splitter($racine){
$split = explode("/",$racine);
for ($i=0;$i<count($split);$i++){
 $route .= $split[$i]."/";
if ($split[$i]!=""){
 $retour .= ' <a href="index.php?racine='.$route.'">'.$split[$i].'</a> /';
}
}
echo $retour;
}


function image_ext($extension){
$extension = strtolower($extension);
if ($extension==".php"){ return "images/extensions/php.gif"; }
if ($extension==".php3"){ return "images/extensions/php.gif"; }
if ($extension==".phtml"){ return "images/extensions/php.gif"; }
if ($extension==".htm"){ return "images/extensions/html.gif"; }
if ($extension==".html"){ return "images/extensions/html.gif"; }
if ($extension==".js"){ return "images/extensions/js.gif"; }
if ($extension==".css"){ return "images/extensions/css.gif"; }

if ($extension==".gif"){ return "images/extensions/gif.gif"; }
if ($extension==".jpg"){ return "images/extensions/jpg.gif"; }
if ($extension==".png"){ return "images/extensions/png.gif"; }

if ($extension==".cab"){ return "images/extensions/zip.gif"; }
if ($extension==".zip"){ return "images/extensions/zip.gif"; }
if ($extension==".ace"){ return "images/extensions/zip.gif"; }
if ($extension==".tgz"){ return "images/extensions/zip.gif"; }
if ($extension==".gz"){ return "images/extensions/zip.gif"; }
if ($extension==".tar"){ return "images/extensions/zip.gif"; }
if ($extension==".rar"){ return "images/extensions/zip.gif"; }

if ($extension==".wav"){ return "images/extensions/wav.gif"; }
if ($extension==".mid"){ return "images/extensions/mid.gif"; }
if ($extension==".mp3"){ return "images/extensions/mp3.gif"; }

if ($extension==".exe"){ return "images/extensions/exe.gif"; }
if ($extension==".bas"){ return "images/extensions/bat.gif"; }
if ($extension==".bat"){ return "images/extensions/bat.gif"; }
if ($extension==".com"){ return "images/extensions/com.gif"; }
if ($extension==".pif"){ return "images/extensions/com.gif"; }

if ($extension==".mov"){ return "images/extensions/wav.gif"; }
if ($extension==".avi"){ return "images/extensions/wav.gif"; }
if ($extension==".mpg"){ return "images/extensions/wav.gif"; }
if ($extension==".mpeg"){ return "images/extensions/wav.gif"; }
if ($extension==".swf"){ return "images/extensions/swf.gif"; }

if ($extension==".txt"){ return "images/extensions/txt.gif"; }
if ($extension==".nfo"){ return "images/extensions/txt.gif"; }



return "images/extensions/inconnu.gif";
}

function editable($extension){
 $extension = strtolower($extension);
 if ($extension==".php"||$extension==".php3"||$extension==".phtml"||$extension==".htm"||$extension==".html"||$extension==".js"||$extension==".css"||$extension==".bas"||$extension==".bat"||$extension==".txt"||$extension==".nfo")
 {
  return true; 
 } else { 
  return false; 
 }
}


function description_ext($extension){
$extension = strtolower($extension);
if ($extension==".php"){ return "Fichier PHP"; }
if ($extension==".php3"){ return "Fichier PHP3"; }
if ($extension==".phtml"){ return "Fichier PHTML"; }
if ($extension==".htm"){ return "Fichier HTML"; }
if ($extension==".html"){ return "Fichier HTML"; }
if ($extension==".js"){ return "Fichier Javascript"; }
if ($extension==".css"){ return "Feuille de Style"; }

if ($extension==".gif"){ return "Image GIF"; }
if ($extension==".jpg"){ return "Image JPEG"; }
if ($extension==".png"){ return "Image PNG"; }

if ($extension==".cab"){ return "Archive CAB"; }
if ($extension==".zip"){ return "Archive WinZip"; }
if ($extension==".ace"){ return "Archive WinAce"; }
if ($extension==".tgz"){ return "Archive Tgz"; }
if ($extension==".gz"){ return "Archive Gz"; }
if ($extension==".tar"){ return "Archive Tar"; }
if ($extension==".rar"){ return "Archive Rar"; }

if ($extension==".mid"){ return "Audio MIDI"; }
if ($extension==".wav"){ return "Audio WAV"; }
if ($extension==".mp3"){ return "Audio MP3"; }

if ($extension==".exe"){ return "Exécutable"; }
if ($extension==".bat"){ return "Fichier Batch"; }
if ($extension==".bas"){ return "Fichier QBasic"; }
if ($extension==".com"){ return "Exécutable"; }
if ($extension==".pif"){ return "Raccourci"; }


if ($extension==".xls"){ return "Fichier Excel"; }
if ($extension==".doc"){ return "Fichier Word"; }
if ($extension==".pdf"){ return "Fichier PDF"; }

if ($extension==".mov"){ return "Video MOV"; }
if ($extension==".avi"){ return "Vidéo AVI"; }
if ($extension==".mpg"){ return "Vidéo MPEG"; }
if ($extension==".mpeg"){ return "Vidéo MPEG"; }
if ($extension==".swf"){ return "Animation FLASH"; }

if ($extension==".txt"){ return "Fichier Texte"; }
if ($extension==".nfo"){ return "Fichier Texte"; }

return "Fichier ".$extension;
}


function taille($fichier)
	{
	global $size_unit;
	$taille=filesize($fichier);
	if ($taille >= 1073741824) {$taille = round($taille / 1073741824 * 100) / 100 . " Go";}
	elseif ($taille >= 1048576) {$taille = round($taille / 1048576 * 100) / 100 . " Mo";}
	elseif ($taille >= 1024) {$taille = round($taille / 1024 * 100) / 100 . " Ko";}
	else {$taille = $taille . " octets";} 
	if($taille==0) {$taille="-";}
	return $taille;
	}

function extension($fichier){
$exts = explode(".",$fichier);
$ext = ".".$exts[count($exts)-1];
return $ext;
}


?>