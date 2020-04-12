<?php
include('config.php');

if (empty($username) || empty($password) || empty($email))
	{
	viewheader();
	echo"<h2>$champsrequis</h2>";
	viewfooter();
	exit;
	}

if (strlen($username) > 20) {
	viewheader();
	echo"<h2>$usermaxcar</h2>";
	viewfooter();
	exit;
	}

if (strlen($username) < 3){
	viewheader();
	echo"<h2>$usermincar</h2>";
	viewfooter();
	exit;
	}

if (strspn($username,"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ") == 0) {
	viewheader();
	echo"<h2>$usercar</h2>";
	viewfooter();
	exit;
	}

if (strrpos($username,' ') > 0){
	viewheader();
	echo"<h2>$userspc</h2>";
	viewfooter();
	exit;
	}
	
if (strlen($password) > 10) {
	viewheader();
	echo"<h2>$passmaxcar</h2>";
	viewfooter();
	exit;
	}

if (strlen($password) < 5){
	viewheader();
	echo"<h2>$passmincar</h2>";
	viewfooter();
	exit;
	}

if (strrpos($password,' ') > 0){
	viewheader();
	echo"<h2>$passspc</h2>";
	viewfooter();
	exit;
	}	
	
if (empty($url)) 
	{ 
	} 

if ($url != "")
	{
	$url = trim($url);
	$url = ereg_replace("http://", "", $url);
	$s=substr_count($url,"http://");
	$d=substr_count($url,".");
	if ($s==0 && $d>=1){
	$url_ok = "ok";
	}
	else
	{
	viewheader();
	echo "Url non valide...<br>";
	viewfooter();
	exit;
	}
	}
	else
	{
	$url_ok = "ok";
	}
	
if(!ereg('^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+'.
        '@'.
        '[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.'.
        '[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$',
        $email))
   	{
   	viewheader();
	echo "Email non valide...<br>";
	viewfooter();
	exit;
   	}

if (!is_uploaded_file($photo))
	{
	$photo_name ="photo_sans.jpg";
	}

if (!is_uploaded_file($bouton))
	{
	$bouton_name ="bouton_sans.jpg";
	}

if (is_uploaded_file($photo))
	{
	if ($photo_type == "image/pjpeg" OR $photo_type == "image/gif")
	{	
	move_uploaded_file ($_FILES['photo']['tmp_name'],$imgs_folder . "/" . $photo_name);
	}
	else
	{
	echo"<center><font><b><u>Type du fichier</u><br>".$_FILES['photo']['type']."<br>Invalide</b></font></center>";
	exit;
	}
	} 

	if (is_uploaded_file($bouton))
	{
	if ($bouton_type == "image/pjpeg" OR $bouton_type == "image/gif") {	
	move_uploaded_file ($_FILES['bouton']['tmp_name'],$imgs_folder . "/" . $bouton_name);
	}
	else
	{
	echo"<center><font><b><u>Type du fichier</u><br>".$_FILES['bouton']['type']."<br>Invalide</b></font></center>";
	exit;
	}
	} 
	
	$db = mysql_connect($dbhost, $dblogin, $dbpassword); 
	mysql_select_db($dbname,$db); 
	$requete=mysql_db_query($dbname,"select * from $dbtable where username=\"$username\"",$db) or die(mysql_error());
	$num=mysql_num_rows($requete);

	if($num!=0)
	{
	viewheader();
	echo"<h2>$usernamepris<a href=\"javascript:history.back()\">retour</a></h2>";
	viewfooter();
	exit;
	}
	
	$requetem=mysql_db_query($dbname,"select * from $dbtable where email=\"$email\"",$db) or die(mysql_error());
	$numm=mysql_num_rows($requetem);

	if($numm!=0)
	{
	viewheader();
	echo"<h2>$emailpris<a href=\"javascript:history.back()\">retour</a></h2>";
	viewfooter();
	exit;
	}

	else
	{
	$date = time();	
	$taille = 20;
	$lettres = "abcdefghijklmnopqrstuvwxyz0123456789";
	srand(time());
	for ($i=0;$i<$taille;$i++)
	{
	$id.=substr($lettres,(rand()%(strlen($lettres))),1);
	}
		
	$sql = "INSERT INTO $dbtable (id, username, password, email, url, photo, bouton, date_reg, message) VALUES 
	('$id',
	'$username', 
	'$password', 
	'$email', 
	'$url', 
	'$photo_name', 
	'$bouton_name',
	'$date',
	'$message'
	)
	";
	mysql_query ($sql);
	
	
	$expire = 365*24*3600; 
	setcookie("username","$username",time()+$expire,"/","");
	setcookie("id","$id",time()+$expire,"/","");    
	
	session_start();
	session_register('username');
	session_register('id');
	header("Location: membres.php");
	

}
?> 