<?
$d=date("YmdHi")+5; // +5 > bannis 5min $fichier="incl/webhoover/".$REMOTE_ADDR.".txt";
$fp2=fopen($fichier,"w+");
fputs($fp2,($d));
fclose($fp2);
?>
<script>
alert('Vous semblez tenter d\'aspirer le site. Votre IP est bloquée pour 5 minutes')
</script>