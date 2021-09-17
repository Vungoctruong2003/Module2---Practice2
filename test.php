<?php
//$firstList = array("John", "Jeny", "Rose", "Jack");
//$secondList = array("Adam", "Rose", "Jack", "Tyson", "Tom");
//echo "cac ten trung nhau la: ";
//for($i=0; $i<count($firstList); $i++) {
//    for ($j = 0; $j < count($secondList); $j++) {
//        if ($firstList[$i] == $secondList[$j]) {
//            echo   $firstList[$i] . "   ";
//        }
//    }
//}

$firstList = array("John", "Jeny", "Rose", "Jack");
$secondList = array("Adam", "Rose", "Jack", "Tyson", "Tom");
echo "cac ten trung nhau la: ";
for($i=0; $i<count($firstList); $i++) {
    if(in_array($firstList[$i],$secondList)){
        echo $firstList[$i]." ";
    }
}