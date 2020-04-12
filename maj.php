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
    <td width="1298" valign="top" colspan="2"> <?
if(!session_is_registered('username') ||!session_is_registered('id'))
	{
	viewheader();
	echo"<center><h3>Vous n'êtes pas autorisé à accéder à cette page</h3></center>";
	viewfooter();
	exit;
	}

else
	{
	include("config.php");
	db_connect();
	$sql = "SELECT * FROM $dbtable WHERE id = '$id'";

	$resultat = mysql_query ($sql);
	$modif = mysql_fetch_array ($resultat);

	if ($action == "maj")
	{
		if (strlen($password) > 10)
			{
			echo"<center><b>$passmaxcar</b></center>";
			exit;
			}
		if (!is_uploaded_file($photo))
			{
			$photo_name ="".$modif['photo']."";
			}
		if (!is_uploaded_file($bouton))
			{
			$bouton_name ="".$modif['bouton']."";
			}
		if (is_uploaded_file($photo))
		{
			if ($photo_type == "image/pjpeg" OR $photo_type == "image/gif")
			{	
			move_uploaded_file ($_FILES['photo']['tmp_name'],$imgs_folder . "/" . $photo_name);
			}
		else
			{
			echo"<center><b><u>Type du fichier</u><br>".$_FILES['photo']['type']."<br>Invalide</b></center>";
			exit;
			}
		} 

		if (is_uploaded_file($bouton))
		{
			if ($bouton_type == "image/pjpeg" OR $bouton_type == "image/gif")
			{	
			move_uploaded_file ($_FILES['bouton']['tmp_name'],$imgs_folder . "/" . $bouton_name);
			}
			else
			{
			echo"<center><b><u>Type du fichier</u><br>".$_FILES['bouton']['type']."<br>Invalide</b></center>";
			exit;
			}
		} 

	$query = "UPDATE $dbtable SET username ='$username', password='$password', email='$email', url='$url', photo='$photo_name', bouton='$bouton_name',message='$message' WHERE id = '$id'";
	$result = mysql_query($query);
	?> 
      <META HTTP-EQUIV="refresh" CONTENT="0; URL=">
      <?
	}

	elseif ($action == "suppr")
	{
	$query = "DELETE FROM $dbtable WHERE id = '$id'";
	mysql_query ($query);
	session_unregister("username");
	session_unregister("id"); 
	session_unset(); 
	session_destroy(); 
	$expire = 365*24*3600; 
	setcookie("username","",time()-$expire,"/","");
	setcookie("id","",time()-$expire,"/","");  
	header("location: index.php");
	}

}

viewheader();
echo"<center><h2>Modification de votre profil</h2><br>";
echo"<h1><b>$username</b><br></h1>";
echo"<a href='fiche_membre.php?id=". $_SESSION['id']. "'>voir votre profil</a><br>";
echo"<a href='logout.php'>logout</a><br>";
echo"<a href='index.php'>retour</a><br></center>";
echo"<br>";
echo"<br>";
?> 
      <p align = "center">Sur cette page vous pouver modifier ou supprimer des 
        informations.<br>
        <center>
          <u>Attention, toute suppression est définitive.</u> 
        </center>
      <center>
        <br>
        <table width="188" height="100" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td align="center" valign="top"><b><PHOTO</b></td>
          </tr>
          <tr> 
            <td align="center" valign="top"><br>
              <img src="uploads/<?php echo $modif['photo']; ?>" width="100" height="100"></td>
          </tr>
        </table><form action="maj.php?id=<?php echo $_SESSION['id'] ?>" method="post" enctype="multipart/form-data"> 
        <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
        <table width="" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000" align="center">
          <tr> 
            <center>
              <td>Pseudo : </td>
              <td> 
                <input type="text" class="textfield" name="username" size="40" value="<?php echo $modif['username']; ?>" readonly>
              </td>
            </center>
          </tr>
          <tr> 
            <td>Password : </td>
            <td> 
              <input type="text" class="textfield" name="password" size="40" value="<?php echo $modif['password']; ?>">
            </td>
          </tr>
          <tr> 
            <td>Email : </td>
            <td> 
              <input type="text" class="textfield" name="email" size="40"  value="<?php echo $modif['email']; ?>">
            </td>
          </tr>
          <tr> 
            <td>Site : </td>
            <td> 
              <input type="text" class="textfield" name="url" size="40"  value="<?php echo $modif['url']; ?>">
            </td>
          </tr>
          <tr> 
            <td>Message : </td>
            <td> 
              <input type="text" class="textfield" name="message" size="40"  value="<?php echo $modif['message']; ?>">
            </td>
          </tr>
          <tr> 
            <td><br>
            </td>
            <td><br>
              Changement de votre photo et/ou de votre bouton.<br>
              <br>
            </td>
          </tr>
          <tr> 
            <td>Photo : </td>
            <td> 
              <input class="textfield" name="photo" type="file">
            </td>
          </tr>
        </table>
        <table>
          <tr> 
            <td align="center"><br>
              <select name="action" class="textfield" >
                <option value="maj"> Modifier</option>
                <option value="suppr"> Supprimer</option>
              </select>
              <input type="submit" class="textfield" value="Envoi" name="submit">
            </td></form>
        </table>
      </center>
      <?
viewfooter();?> </td>
  </tr>
</table>
</body>

</html>
