<!--	<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title> Bonjour depuis PHP </title>
</head>
<body>
<?php echo 'Bonjour généré dynamiquement en PHP !';
	phpinfo();  ?>
</body>
</html> -->
<!--	<!doctype html>
<html>
<head>
<title>
Navigateur
</title>
<body>
Les informations sur le Navigateur sont :
<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>
</body>
</html>  -->

<!doctype html>
<html>
<head>
<title>
Navigateur
</title>
<body>
Les informations sur le Navigateur sont :
<?php
/*$AGENT=$_SERVER['HTTP_USER_AGENT'];
echo $AGENT;
echo("\n<P>");
if (stristr($AGENT,"MSIE")) {
?>
<b>Vous semblez utiliser Internet Explorer !</b>
<?php }
elseif (preg_match("/Firefox/i",$AGENT))
{ ?>
<b>Vous semblez utiliser Firefox !</b>
<?php }
elseif (preg_match("/chrome/i",$AGENT))
{ ?>
<b>Vous semblez utiliser Chrome !</b>
<?php }
elseif (preg_match("/Safari/",$AGENT))
{ ?>
<b>Vous semblez utiliser Safari !</b>
<?php }
else echo "Navigateur Inconnu !"; */
function infos(){
$env = array('remote_addr','http_accept_language','http_
˓→host',
'http_user_agent','script_filename','server_addr',
'server_name','server_signature','server_software',
'request_method','query_string','request_uri','script_name
˓→');
$retour =array();
foreach ($env as $clef) $retour[$clef] = getenv($clef);
return $retour;
}
$tab = infos();
foreach ($tab as $clef=>$val) echo $clef." :".$val."<br>\n";
?>

</body>
</html>