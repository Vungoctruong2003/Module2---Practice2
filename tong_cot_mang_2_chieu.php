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
<form action="tong_cot_mang_2_chieu.php" method="post">
    <table>
        <tr>
            <td> Your Array: </td>
            <td>
                <input type="text" name="inputArr">
            </td>
        </tr>
        <tr>
            <td> Your Column: </td>
            <td>
                <input type="number" name="inputCol">
            </td>
        </tr>
        <tr>
            <td> </td>
            <td>
                <input type="submit" value="Sum">
            </td>
        </tr>


    </table>

</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["inputArr"];
    $col = $_POST["inputCol"];
    $arr = explode(",", $str);
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] = (float)$arr[$i];
    }
    var_dump($arr);
}
?>