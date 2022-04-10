<?php
$tab1 = array(2, 4, 7, 8, 15);
$tab2 = array(3, 7, 90, 1, 55);

$Sum = 0;

for ($i = 0; $i <= 4; $i++) {
    $Sum += $tab1[$i] * $tab2[$i];
    echo("<br>");
    echo $Sum;
}
?>
