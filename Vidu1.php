<?php
// hàm k có gia trị trả về
// function tinhtong($a,$b){
//     return $a+$b;
// }
// // gợi hàm
// $tong=tinhtong(12,3);
// echo "<br> Tong=$tong";

// // hàm k có giá tri trả về
// function tinhtong2($a,$b){
//     $tong=$a+$b;
//     echo "<br> Tổng=$tong";
// }
// // Gọi hàm

// Tinhtong2(25,5);

// //hàm có tham số có giá trị mạc đihj
// function massage($name='trangnt',$email='trangnt@gmail.com'){
//     echo "<br>Name:$name";
//     echo "<br>Email:$email";
// }
// //Gọi hàm
// massage();//TH k truyền vào gia strị thì nó sẽ lấy giá trị mmặc định 
// massage('Nguyến văn ha');//TH khi đã truyền vào 1 già trị thì nó sẽ lấy 1 gia trị cho và 1 giá trị mạc định

// //hàm khong xác định tham số
//Cách 1
function thamso(){
    $arr=func_get_args();
    var_dump($arr);

}
//Gọi hàm
thamso(1,2,3,56,'trangnt','23','Hello',123);

//cách 2
// function thamso2(...$spreed){
//     foreach($spreed as $sp){//dung vòng lặp để lây ra từng phần tử
//         echo "$sp<br>";
//     }
// }
// thamso2(1,2,3,56,'trangnt','23','Hello',123);