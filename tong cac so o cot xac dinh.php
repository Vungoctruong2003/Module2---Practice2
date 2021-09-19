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
<h2> Your Column </h2>
<form action="tong%20cac%20so%20o%20cot%20xac%20dinh.php" method="post">
    <input type="number" name="input">
    <input type="submit" value="Find">
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $col = $_POST["input"];
    $sum = 0;
    $arr = [
        [1,2,4],
        [4,5,9],
        [9,-2,-4,10,3,6],
        [10,15,3,7,8]
    ];
    for ($i=0; $i<count($arr); $i++){
        for ($j=0; $j<count($arr[$i]); $j++){
            if($j == $col){
                $sum += $arr[$i][$j];
            }
        }
    }
echo "tong cac so o cot ".$col." la: ".$sum;
}
?>
