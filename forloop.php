<?php

$b=5;
for($i=1;$i<=$b;$i++){
    echo "<br>";
    echo "$i";
}
echo "<hr>";
// for loop in string 
$str="rbmaurya";
$chars=str_split($str);
foreach($chars as $char){

    echo "$char";
    echo "<br>";
}
echo "<hr>";
// loop in array
echo "loop in array";
$data=array("rb","pradeep","dev");
$length=count($data);
for($i=1;$i<=$length;$i++){
    echo "<br>";
    echo "$i";
}
?>