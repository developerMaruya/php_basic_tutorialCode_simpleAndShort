<?php

// type of fucntion 
// 1 build in function
// 2 user define function
// 3 function with return value
// 4) function with default value

echo "build function , its a system build function";
$string = "Hello, World!";
echo "<br>";
echo $string;
$length = strlen($string);
echo "      Length of the string: " . $length;  // Output: Length of the string: 13



echo "<br>";
echo "user define function <br>";
function sum($a,$b){
    $c=$a+$b;
    echo"$c";
}
// function calling 
sum(10,15);


function check($c){
    if($c>1){
        echo "<br>sum is perform";
    }else{
        echo "<br>check again";
    }
}
check(10);


// function with return value 
function sub($x,$y){
    $z=$x-$y;
    return $z;
}
echo "<br>secound way to print result as". sub(20,5);
$result=sub(20,5);
echo "<br>result of subtraction is : $result <br>";


// default function if we give then ok other wise it take default value
function greet($name = "Guest") {
    echo "Hello, $name";
    echo "<br>";
}

greet();          // Output: Hello, Guest!
greet("John");    // Output: Hello, John!

?>