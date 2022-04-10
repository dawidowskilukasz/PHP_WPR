<?php
$a = 54;
$b = 88;
$c = 21;
echo("Od najmnijeszej do największej: ");
if ($a < $b && $a < $c) {
    echo("$a ");
    if ("$b < $c")
        echo("$b $c");
    else
        echo("$c $b");
}
if ($b < $a && $b < $c) {
    echo("$b ");
    if ("$a < $c")
        echo("$a $c");
    else
        echo("$c $a");
}
if ($c < $b && $c < $a) {
    echo("$c ");
    if ("$a < $b")
        echo("$a $b");
    else
        echo("$b $a");
}
echo("<br>");
echo("Od największej do najmniejszej: ");
if ($a > $b && $a > $c) {
    echo("$a ");
    if ("$b > $c")
        echo("$b $c");
    else
        echo("$c $b");
}
if ($b > $a && $b > $c) {
    echo("$b ");
    if ("$a > $c")
        echo("$a $c");
    else
        echo("$c $a");
}
if ($c > $b && $c > $a) {
    echo("$c ");
    if ("$a > $b")
        echo("$a $b");
    else
        echo("$b $a");
}
?>
