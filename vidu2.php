<?php
//Hàm ẩn danh'
$say = function ($massage){
    echo $massage;
};
//gọi hàm
$say('Hello world');

//Callback:là gọi llại 1 function trong 1 functon

function call_back($callback){
    $callback();
}
//gọi hàm

call_back(function(){
    echo "<br> tôi tên la trang";
});
//Sử dụng array filter
$arr = [1,3,5,4,7,8,13,22,24];
echo "<pre>";
//lọc ra các số lẻ trong mảng thì dùng array filter
$arr2 = array_filter($arr,function($n){
    return $n %2==1;
});
var_dump($arr2);
//gấp đôi giá trị của các phân tử trong mảng arr
$arr3 = array_map(function($n){
    return $n*2;
},$arr);
print_r($arr3);

//Biến toàn cục

$a=10;$b=12;
fuction tinhtong(){
    global $a,$b;//dùng global để gọi lại biên $a, $b
    $tong =$a+$b;
    echo "tong $a+$b=$tong";
}
//tinh tông c
tinhtong();