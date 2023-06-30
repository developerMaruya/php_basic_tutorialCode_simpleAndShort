<?php

echo "operators.....";

/*
Arithmatic operators $x+$y, $x-$y
Assign operators x=y,x+=yield
Comparison operators $x==$y(equal), $x===$y(identical)
Increment/Decrement operators ++$x, pre-increment
Logical operators $x and $y, $x or $y
String operators $txt1.$txt2
Array operators  union of $x and $y(array comparison)
*/
$a=10;
$b=2;
$c=$a+$b;
echo "c is $c";

echo "show data type using var_dump ";
$d="rb";
var_dump($a);
var_dump($d);


// assign operator

echo "use assign operator as a++ ".$a++;


?>