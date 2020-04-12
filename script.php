<? //début de scripts.php
if(file_exists("incl/webhoover/".$REMOTE_ADDR.".txt")){
$fp=fopen("incl/webhoover/".$REMOTE_ADDR.".txt","r");
$n=fgets($fp,255);
fclose($fp);
$d=date("YmdHi");
if($n<=$d){
unlink("incl/webhoover/".$REMOTE_ADDR.".txt");
}else{
echo "<script>alert('Votre IP est bloquée pour 5 minutes car vous avez tenté d\'aspirer le site');opener=self;self.close()</script>";
exit;
}
}
?>
<a href="webhoover.php"><img border=0 src="img/webhoover.php" width=0 height=0></a>
