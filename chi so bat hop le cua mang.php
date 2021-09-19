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
<form method="post" action="chi%20so%20bat%20hop%20le%20cua%20mang.php">
    <label>
        <p> Your Index :</p>
        <input type="number" name="input">
    </label>
    <input type="submit" value="Find">
</form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $index = $_POST["input"];
    $arr = [14 ,36,2,3,4, 5, 30, 11, 69, 43, 81, 11, 92, 27, 61, 26, 82, 12, 92, 68, 86, 91, 61, 12, 13, 9 ,22 ,44, 1,7 ,5,2 ,29, 18, 1,9, 51, 3, 70, 22, 34, 49, 28, 35, 8, 83, 46, 40, 12, 66, 11, 57, 20, 0 ,3 ,93, 6,0, 35, 99, 77, 36, 40, 6 ,51, 73, 32, 90, 2,0 ,8,1 ,66, 78, 82, 7 ,51 ,72, 24, 29, 22, 57, 14, 94, 43, 65, 76, 48, 83, 88, 11, 78, 78, 7,3, 40, 80, 50, 83, 26];
    try {
        if($index<0 || $index > 100){
            throw new Exception('Chỉ số nằm ngoài giới hạn của mảng');
        }
        echo "Giá trị của phần tử có chỉ số ".$index." là ".$arr[$index];
    }catch (Exception $e){
        echo  $e->getMessage();
    }

}

?>