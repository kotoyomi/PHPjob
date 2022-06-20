<?php
//keyに単価を入れる
$price = ["りんご" => "150","みかん" => "150","桃" => "300"];

foreach($price as $key => $value) {
  echo "${key}は1個${value}円<br>";
} 

echo "<br>";

function totalamount($price, $number) {
  $total = $price * $number;
  print "${total}円です。<br>";

  /*
  foreach($price as $key) {
    echo "${key}は${total}円です。<br>";
  } */
}

  //りんご 
  totalamount($price["りんご"],2);
  //みかん 
  totalamount($price["みかん"],1);
  //桃 
  totalamount($price["桃"],10);

?>