<?php
$arr = [
    [1,2,3,4],
    [4,5,4,9],
    [9,-2,-4,10],
    [10,15,3,7]
];
$sum = 0;
for ($i=0; $i<count($arr); $i++){
    for ($j=0; $j<count($arr[$i]); $j++){
      if($i == $j){
          $sum += $arr[$i][$j];
        }
    }
}
echo "tong duong cheo chinh cua ban la: ".$sum;
