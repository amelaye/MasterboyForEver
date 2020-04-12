<?


// "Magic Quotes"
set_magic_quotes_runtime(0);

// Ajout d'anti-slashes selon "Magic Quotes"
function AuAddSlashes($chaine) {
	return(get_magic_quotes_gpc() == 1 ? $chaine : AddSlashes($chaine));}

// Retire les anti-slashes selon "Magic Quotes"
function AuStripSlashes($chaine) {
	return(get_magic_quotes_gpc() == 1 ? StripSlashes($chaine) : $chaine);}

// Convertisseur texte en HTML compatible
function conv($chaine, $nobr = 0) {
	$chaine = htmlentities($chaine);
	if ($nobr != 1) {
		$chaine = nl2br($chaine);}
	$chaine = str_replace("&lt;", "<", $chaine);
	$chaine = str_replace("&gt;", ">", $chaine);
	$chaine = str_replace("&quot;", "\"", $chaine);
	$chaine = str_replace("[<]", "&lt;", $chaine);
	$chaine = str_replace("[>]", "&gt;", $chaine);
	return $chaine;
}

// Ajout de smilies
function souriez($chaine) {
	global $souriez;
	for ($i = 0; $i < count($souriez); $i++) {
		$chaine = str_replace($souriez[$i][0], "<img src=\"images/smilies/".$souriez[$i][1]."\" border=\"0\">", $chaine);}
	return $chaine;}

// Status ICQ
function icqStatus($no) {
	$image = @file("http://wwp.icq.com/scripts/online.dll?icq=".$no."&img=1");
	$longeur = strlen($image[1]);
	if ($longueur == 96) {
		$status = "<span style=\"color: #00AA00; font-weight: bold;\">ONLINE</span>";}
	elseif ($longueur == 83) {
		$status = "<span style=\"color: #FF0000;\">OFFLINE</span>";}
	else {
		$status = "désactivé";}
	return $status;
}

// Creation de l'index
function creerIndex($requete, $maximum) {
	global $deb, $total, $max, $commence;
	if ($deb <= 0 || !is_numeric($deb) || !isset($deb)) {
		$deb = 0;}
	$max = $maximum;
	$q = @mysql_query($requete);
	$r = @mysql_fetch_array($q);
	$total = $r["num"];
	$commence = $deb * $max;
}

// Navigateur de pages
function navBarre($plus) {
	global $total, $deb, $max, $PHP_SELF;
	if ($total > $max) {
		echo "<p align=\"center\">";
		if ($deb > 0) {
			echo "<a href=\"".basename($PHP_SELF)."?deb=".($deb - 1).$plus."\"><img src=\"images/gauche.gif\" border=\"0\"></a> <a href=\"".basename($PHP_SELF)."?deb=".($deb - 1).$plus."\">".$max." précédentes</a>&nbsp;";}
		if ($total > ($deb + 1) * $max) {
			echo "&nbsp;<a href=\"".basename($PHP_SELF)."?deb=".($deb + 1).$plus."\">".$max." suivantes</a> <a href=\"".basename($PHP_SELF)."?deb=".($deb + 1).$plus."\"><img src=\"images/droite.gif\" border=\"0\"></a>";}
		echo "<br>\n";
		for ($i = 0; $i < ceil($total / $max); $i++) {
			if ($i == $deb) {
				echo "(<b>".($i + 1)."</b>) ";}
			else {
				echo "(<a href=\"".basename($PHP_SELF)."?deb=".$i.$plus."\">".($i + 1)."</a>) ";}
		}
		echo "</p>\n\n";
	}
}

// Index de la page
function navIndex() {
	global $total, $deb, $max;
	if ($total > 0) {
		$total_pages = ceil($total / $max);
		return "Page ".($deb + 1)."/".($total_pages);
	}
	else {
		return "Page 1/1";}
}

// Cookies : pseudo et email
function paramCookies($auteur, $email) {
	global $site_cookie, $cauteur, $cemail, $cbloque;
	$cbloque = 1;
	$cauteur = AustripSlashes($auteur);
	$cemail = AustripSlashes($email);
	setCookie($site_cookie."Pseudo", AustripSlashes($auteur), time() + (3600 * 24 * 90));
	setCookie($site_cookie."Email", AustripSlashes($email), time() + (3600 * 24 * 90));
}

// Obtiens les infos
if ($cbloque != 1) {
	$cauteur = AustripSlashes($HTTP_COOKIE_VARS[$site_cookie."Pseudo"]);
	$cemail = AustripSlashes($HTTP_COOKIE_VARS[$site_cookie."Email"]);
}

// Titre, logo de la page
$adresse_fichier = $HTTP_SERVER_VARS["PHP_SELF"];
$adresse_fichier = basename($adresse_fichier);
$titre_page = $page_titre[$adresse_fichier][0];
$logo_page = $page_titre[$adresse_fichier][1];

// Selection du theme
$theme = $site_theme;
if (!empty($HTTP_COOKIE_VARS[$site_cookie."Theme"]) && is_dir("themes/".$HTTP_COOKIE_VARS[$site_cookie."Theme"])) {
	$theme = $HTTP_COOKIE_VARS[$site_cookie."Theme"];
}

?>