<html>
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>
<form action="1.php" method="post">
    <input type="text" name="n1">
    <input type="text" name="n2">
    <select name="oper">
        <option value="SUM (+)">SUM (+)</option>
        <option value="SUB (-)">SUB (-)</option>
        <option value="MUL (*)">MUL (*)</option>
        <option value="DIV (/)">DIV (/)</option>
    </select>
    <input type="submit" value="=">
</form>
<?php
if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['oper'])) {
    if (is_numeric($_POST['n1']) && is_numeric($_POST['n2'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $operation = $_POST['oper'];
        switch ($operation) {
            case 'SUM (+)':
                echo $n1 + $n2;
                break;
            case 'SUB (-)':
                echo $n1 - $n2;
                break;
            case 'MUL (*)':
                echo $n1 * $n2;
                break;
            case 'DIV (/)':
                if($n2 == 0){
                    echo "nie dziel przez 0";
                }
                else{
                echo $n1 / $n2;
                }
                break;
        }
    } else {
        echo "Musisz podać 2 liczby";
    }
}
?>
</body>
</html>