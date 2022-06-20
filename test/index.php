<?php
$myname = "ruby";

function sayHi($name = "goto") {
    // 関数の中で定義する変数 => ローカル変数
    $myname = "php";
    return "Hi! ".$name." from ".$myname;
}

echo sayHi();
echo $myname;
?>