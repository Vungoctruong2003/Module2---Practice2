<?php
$arr = [
    [1,2,3,4],
    [3,5,9,16,-2],
    [1,33,26,66,15,0]
];
$max = $arr[0][0];
for ($i=0; $i<count($arr); $i++){
    for ($j=0; $j<count($arr[$i]); $j++){
        if($arr[$i][$j] > $max){
            $max = $arr[$i][$j];
        }
    }
}
echo "gia tri lon nhat trong mang cua ban la:".$max;