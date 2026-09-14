<?php

$num = 4;

if($num >0){
    echo "$num is greater than 0";
}


$age = 14;

echo "<br>";
if(($age > 12) && ($age < 20)) {
    echo "You are a teenager";
}


echo "<br>";
$age = 19;
if ($age < 18) {
    echo "You are under 18";
}else{
    echo "You are an adult";
}

echo "<br>";

$number = 5;
if($number < 0){
    echo "The value of $number is a negative number";
}elseif($number == 0){
    echo  "The value of $number is a zero";
}else {
    echo "The value of $number is a positive number";
}

echo "<br>";

$dita =1;

switch($dita) {

case 1:
     echo "E hene";
     break;
case 2: 
    echo "E marte";
     break;
case 3: 
    echo "E merkure";
     break;

default:
echo "Dite e pavlefshme";

}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//Loops
 //1. While loop
$x = 1;
while($x <= 5) {
    echo "The number is : $x <br>";
    $x++;
}

 //2.Do while loop
 echo "<br>";
 echo "<br>";

    $y = 1;
 do {
    echo "The number is : $y <br>";
    $y++;
 }while($y >= 5);

 //3.For loop
 for($x=0; $x <=10;$x++){
       echo "Numri eshte: $x <br>";
 }
  echo "<br>";

 //4.Foreach loop - works only on arrays

  $cars = array("BMW","Vw","Audi","Tesla");

  foreach($cars as $value){
    echo "$value <br>";
  }

  
$age = array("John" => 18, "Michael" => 20, "Joe" => 13);
 foreach($age as $key => $value){
    echo "$key = $value  <br>";
 }


?>