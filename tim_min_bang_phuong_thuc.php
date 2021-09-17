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
<form action="tim_min_bang_phuong_thuc.php" method="post">
    <table>
        <tr>
           <td> Your array:</td>
            <td>
                <input type="text" name="input">
            </td>
        </tr>
        <tr>
            <td> </td>
            <td>
                <input type="submit" value="Find">
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["input"];
        $arr = explode(",",$str);
        for($i=0; $i<count($arr); $i++){
            $arr[$i] = (int)$arr[$i];
        }
     //   var_dump($arr);
        function findIndexOfMin($arr){
            $min = $arr[0];
            $index = 0;
            for($i=1; $i<count($arr); $i++){
                if($min > $arr[$i]){
                    $min = $arr[$i];
                    $index = $i;
                }
            }
            return $index;
        }
       echo "vi tri cua so nho nhat trong mang la: ". findIndexOfMin($arr);
    }





?>