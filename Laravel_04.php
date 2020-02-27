<?php

//課題1
function twice($a){
    return $a*2;
}
echo twice(1);
echo "\n";


//課題2
function sum($a,$b){
    return $a + $b;
}
echo sum(1,1);
echo "\n";


//課題3
function product($arr){
    $number = 1;
    foreach($arr as $a){
    $number *=$a;
    }
    return  $number;
}

echo product(array(1,3,5,7,9));
echo "\n";

//課題4 
 function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number<$a){
         $max_number = $a;
     }
 }

 return $max_number;
 }

echo max_array(array(1,2,3));
echo "\n";

//課題5

//strip_tags
$string = '<a href="http://google.com">Google</a>';
echo strip_tags($string);
echo "\n";

//array_push
$data = array("1","2","3");
array_push($data,"4","5");
foreach($data as $d){
echo $d;
echo "\n";
}

//array_merge
$data = array("1ch"=>"soccer","2ch"=>"baseball");
$add_data = array("2ch"=>"teniss","3ch"=>"basktball");
$data2=array_merge($data,$add_data);
foreach($data2 as $d){
    echo $d;
    echo "\n";
};

//time, mktime
$now = time();
echo $now;
echo "\n";

$timestamp = mktime(23,30,0,25,2,2020);
echo $timestamp;
echo "\n";

//data
$timestamp = time() - (60 * 60 * 24) * 7 + (9 * 60 * 60);
$lastweek = date("y年m月d日h時i分s秒",$timestamp);
echo $lastweek;
?>