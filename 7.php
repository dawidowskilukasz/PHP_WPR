<?php
$Month = 5;
$Day = 20;
if (($Month > 0) and ($Month <= 12)) {
    switch ($Month) {
        case 1:
            if ($Day <= 31 or 0 > $Day) {
                echo "Styczeń $Day";
            } else {
                echo "Błąd dnia";
            }
            break;

        case 2:
            if ($Day <= 29 or 0 > $Day) {
                echo "Luty $Day";
            } else {
                echo "Błąd dnia";
            }
            break;
        case 3:
            if ($Day <= 31 or 0 > $Day) {
                echo "Marzec $Day";
            } else {
                echo "Błąd dnia";
            }
            break;
        case 4:
            if ($Day <= 30 or 0 > $Day) {
                echo "Kwiecień $Day";
            } else {
                echo "Błąd dnia";
            }
            break;
        case 5:
            if ($Day <= 31 or 0 > $Day) {
                echo "Maj $Day";
            } else {
                echo "Błąd dnia";
            }
            break;
        case 6:
            if ($Day <= 30 or 0 > $Day) {
                echo "Czerwiec $Day";
            } else {
                echo "Błąd dnia";
            }
            break;
        case 7:
            if ($Day <= 31 or 0 > $Day) {
                echo "Lipiec $Day";
            } else {
                echo "Błąd dnia";
            }
            break;
        case 8:
            if ($Day <= 30 or 0 > $Day) {
                echo "Sierpień $Day";
            } else {
                echo "Błąd dnia";
            }
            break;
        case 9:
            if ($Day <= 31 or 0 > $Day) {
                echo "Wrzesień $Day";
            } else {
                echo "Błąd dnia";
            }
            break;
        case 10:
            if ($Day <= 30 or 0 > $Day) {
                echo "Październik $Day";
            } else {
                echo "Błąd dnia";
            }
            break;
        case 11:
            if ($Day <= 31 or 0 > $Day) {
                echo "Listopad $Day";
            } else {
                echo "Błąd dnia";
            }
            break;
        case 12:
            if ($Day <= 30 or 0 > $Day) {
                echo "Grudzień $Day";
            } else {
                echo "Błąd dnia";
            }
            break;
    }

} else echo "Błąd miesiąca";
?>