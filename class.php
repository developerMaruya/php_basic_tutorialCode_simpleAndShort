<?php

class Calculate{
    public $a;
    public $b;

    public function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    public function add(){
        return $this->a + $this->b;

    }
    public function sub(){
        return $this->a - $this->b;
    }
}

$calculator=new Calculate(20,10);
$sum=$calculator->add();
echo "sum is $sum";
$sub=$calculator->sub();
echo "<br> sub is $sub";


?>




