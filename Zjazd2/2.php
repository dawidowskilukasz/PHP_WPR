<html>
<head>
    <title>2</title>
    <meta charset="UTF-8"/>
</head>
<body>
<?php
if (!empty($_POST['guestnum'])) {
    echo "<h3><b>Podsumowanie rezerwacji</b></h3>";
    echo "<p>Liczba gości: <b>" . $_POST['guestnum'] . "</b></p>";
    echo "<p>Imie: <b>" . $_POST['name'] . "</b></p>";
    echo "<p>Nazwisko: <b>" . $_POST['surname'] . "</b></p>";
    echo "<p>Adres: <b>" . $_POST['address'] . "</b></p>";
    echo "<p>E-mail: <b>" . $_POST['email'] . "</b></p>";
    echo "<p>Nr telefonu: <b>" . $_POST['tel'] . "</b></p>";
    echo "<p>Data odjazdu: <b>" . $_POST['date'] . "</b></p>";
    echo "<p>Forma płatności: <b>" . $_POST['pay'] . "</b></p>";
    if (!empty($_POST['hour'])) {
        echo "<p>Godzina przyjazdu: <b>" . $_POST['hour'] . "</b></p>";
    }
    echo "<p><b>Udogodnienia:</b></p>";
    echo "<p>Pokój dla pary z dzieckiem: <b>" . (!empty($_POST['child']) ? $_POST['child'] : "nie") . "</b></p>";
    echo "<p>Klimatyzacja: <b>" . (!empty($_POST['ac']) ? $_POST['ac'] : "nie") . "</b></p>";
    echo "<p>Widok na morze: <b>" . (!empty($_POST['sea']) ? $_POST['sea'] : "nie") . "</b></p>";
    echo "<p>Udogodnienia dla palaczy: <b>" . (!empty($_POST['smoke']) ? $_POST['smoke'] : "nie") . "</b></p>";
}
?>
</body>
</html>