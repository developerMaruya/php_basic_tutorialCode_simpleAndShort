<?php
class class2{
    public $x=1;

    function fun1(){
        return $this->x++;
    }
}
$obj=new class2();
$obj->fun1();
echo $obj->x;


?>