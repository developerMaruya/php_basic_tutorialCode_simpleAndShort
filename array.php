<?php

// index array
$data=array("rb","maurya",25);
echo $data[2];
// associative array
// key=>value
echo "<br>";
$india =array("capital"=>"Lucknow","state"=>"up");
echo $india['state'];


// loop in array
echo "<br>";
$fruits = array("apple", "banana", "orange");
foreach($fruits as $rb){
    echo "$rb<br>";
}
echo "<br>";
// Accessing keys and values using foreach
foreach ($fruits as $key => $value) {
    echo $key . ": " . $value . "\n";
  }


  // multidimansal array 
$data1=array(
    array("rb","maurya",25),
    array("apple", "banana", "orange"),
);

echo "<br>";
echo $data1[0][1];
echo "<br> secound also print<br>";
echo $data1[1][1];

?>