<?php
$text = "qwertyuiopasdfghjklzxcvbnm";
$text = preg_replace("'[^a-zA-Z]'", "", $text);
$text = strtolower($text);

$textlit = str_split($text);
sort($textlit);

$litera = 1;
for ($i = 1; $i < count($textlit); $i++) {
    if ($textlit[$i] != $textlit[$i - 1]) {
        $litera++;
    }
}
//echo($litera);
$literasuma = 26;
$panagram = false;
if ($litera == $literasuma) {
    $panagram = true;
}
echo(var_export($panagram));
?>