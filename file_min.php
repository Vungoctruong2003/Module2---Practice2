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
<h2> Your array: </h2>
<form action="file_min.php" method="post">
    <input type="text" name="input">
    <input type="submit" value="Find">
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
    $min = $arr[0];
    for($i=1; $i<count($arr); $i++){
        if($min > $arr[$i]){
            $min = $arr[$i];
        }
    }
    echo "so nho nhat trong mang cua ban la: ".$min;
}

?>
