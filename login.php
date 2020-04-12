<?php
	include('config.php');

	if($username=='' || $password=='')
	{
	viewheader();
	echo"<h3>$champsrequis</h3>";
	viewfooter();
	exit;
	}
	
	db_connect();
	$sql = "select password from $dbtable where username='$username'";
	$req = mysql_query($sql) or die('Erreur SQL');
	$rez = mysql_fetch_array($req);

	if($rez['password'] != $password)
	{
	viewheader();
	echo"<h3>$wrongident</h3>";
	viewfooter();
	exit;
	}

	else
	{
	$sql2 = "select id from $dbtable where username='$username'";
	$req2 = mysql_query($sql2) or die('Erreur SQL !<br>'.$sql2.'<br>'.mysql_error());
	$data2 = mysql_fetch_array($req2);
	$id = $data2['id'];
	$expire = 365*24*3600; 
	setcookie("username","$username",time()+$expire,"/","");
	setcookie("id","$id",time()+$expire,"/","");    
	session_start();
	session_register('username');
	session_register('id');
	$_SESSION['username'] = $username;
	$_SESSION['id'] = $id;
	header("Location: membres.php");
	}

?> 

