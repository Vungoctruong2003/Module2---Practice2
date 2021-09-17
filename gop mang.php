<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="gop%20mang.php" method="post">
    <table>
        <tr>
            <td>
                Array1:
            </td>
            <td>
                <input type="text" name="arr1">
            </td>
        </tr>
        <tr>
            <td>
                Array2:
            </td>
            <td>
                <input type="text" name="arr2">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Mach">
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr3 = array();
    $str1 = $_POST["arr1"];
    $arr1 = explode(",", $str1);
    for($i=0; $i<count($arr1); $i++){
        array_push($arr3,$arr1[$i]);
    }

    $str2 = $_POST["arr2"];
    $arr2 = explode(",", $str2);
    for($i=0; $i<count($arr2); $i++){
        array_push($arr3,$arr2[$i]);
    }

    var_dump($arr3);
}

?>
