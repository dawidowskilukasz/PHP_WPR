<?php
$a = 8;
$b = 6;
$c = 7;
if ($a + $b > $c and $a + $c > $b and $c + $b > $a) {
    echo("Z bokow a: $a");
    echo(" b: $b");
    echo(" c: $c");
    echo("Powstanie trojkąt");
} else {
    echo("BLĄD!!!");
}
?>