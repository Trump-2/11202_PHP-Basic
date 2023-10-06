<?php

// 宣告空陣列
// $a = array();
$a = [];

$a[] = 10;
$a[] = 30;
$a[] = "泰山";
$a[] = "新莊";

echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[0];
echo "<br>";
echo $a[2];
echo "<hr>";

$b = [];
$b = ["name" => "YIHONG", "age" => 25, "degree" => "college", 'phone' => '0911222333'];
echo "<pre>";
print_r($b);
echo "</pre>";

echo $b["age"];
echo "<br>";
echo $b["phone"];
