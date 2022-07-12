<?php
//key=種類、value=単価
$price = ["りんご" => "150","みかん" => "150","桃" => "300"];

foreach($price as $key => $value) {
  echo "${key}は1個${value}円<br>";
} 

echo "<br>";

function totalamount($price, $number) {
  $total = $price * $number;
  return "${total}";
}

foreach($price as $key => $value) {
  if($key == "りんご") {
  $total = totalamount($value,2);
  echo "${key}は${total}円です。<br>";
  } elseif($key == "みかん") {
    $total = totalamount($value,1);
    echo "${key}は${total}円です。<br>";
  } elseif($key == "桃") {
    $total = totalamount($value,10);
    echo "${key}は${total}円です。<br>";
  } 
}

?>