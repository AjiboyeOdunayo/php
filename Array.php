<?php
//coment: how to define an array in php


// $nums[ ]='1';
// $nums[ ]='1';
// var_dump($nums)

// var_dump ($cars[0]);
// foreach ($nums as $mycar) {
//   echo ($mycar)

// }


// comment: associative array

// $car = array("my care"=>"volvo"=>"obo_car"=>"Benz");
// for ($car=0; as $key =>$value)
//  {
//   echo $value."<br>";
// }
//

// comment:multidimentional array

// $car["vehicle"]["four_wheels"] = "Benz";
// $car["vehicle"]["six_wheels"] = "trailler";
// foreach($car as $value){
//   echo $value["four_wheels"];
// }

$car["vehicle"]["four_wheels"]["color"]= "Red";
$car["vehicle"]["six_wheels"]["color"]= "Blue";
 foreach($car as $value){
  foreach($value as $item){
     echo $item["color"];
   }
 }
// foreach($car as $value){
//   echo $value["four_wheels"]." ".$value["six_wheels"];
// }

 ?>
