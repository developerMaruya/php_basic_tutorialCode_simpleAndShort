<?php

class Class3{
//     function __construct(){
//         $this->x=10;
//         echo "start constructor";
//     }
//     function fun1(){
//         echo "<br>hello";
//         echo $this->x;
//     }
//     function __destruct(){
//         echo "<br>end ";
//     }
// }
// $obj=new Class3();
// $obj->fun1()


// with value 

function __construct($y){
    $this->x=$y;
    echo "start constructor";
}
function fun1(){
    echo "<br>hello";
    echo $this->x;
}
function __destruct(){
    echo "<br>end ";
}
}
$obj=new Class3(20);
$obj->fun1()

?>