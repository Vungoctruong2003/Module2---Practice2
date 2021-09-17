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
<form action="xoa%20phan%20tu%20mang.php" method="post">
    <table>
        <tr>
            <td> Your String </td>
            <td>
                <input type="text" name="string">
            </td>
        </tr>
        <tr>
            <td> Your Character</td>
            <td>
                <input type="text" name="character">
            </td>
        </tr>
        <tr>
            <td> </td>
            <td>
                <input type="submit" value="Delete">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["string"];
    $cha = $_POST["character"];
    $arr = explode(",",$str);
   for($i=0; $i<count($arr); $i++){
       if($arr[$i] == $cha){
           array_splice($arr, $i, 1);
       }
   }
var_dump($arr);
}
?>