<?php

// $a = [];

$a[] = "Ab";
$a[2] = "B";
$a[] = "C";
echo "<pre>";
print_r($a);
echo "</pre>";

$b = [];
echo "<pre>";
print_r($b);
echo "</pre>";

$c = [1, 3, 5, 7];
$c = [2 => "a", 3 => "b", 4 => "c"];
echo "<pre>";
print_r($c);
echo "</pre>";

$d = ['a' => 10, 'b' => 20, 'c' => 30];
echo "<pre>";
print_r($d);
echo "</pre>";

// 會是 "C"
echo $a[3];
echo "<br>";
// 會是 "b"
echo $c[3];
echo "<br>";
echo $d['c'];
echo "<br>";

$e['name']= "YiHong";
$e['identity'] = ['son', 'brother', 'student', 'employee'];
echo "<pre>";
print_r($e);
echo "</pre>";

$f['name'] = "Ming";
$f['level'] = ['a' => 'Novice', 'b' => 'beginner', 'c'=> 'competitive'];
echo '<pre>';
print_r($f);
echo '</pre>';

// 因為 $e['identity'] 是一 array 所以要記得用 print_r ()
print_r( $e['identity']);
echo "<br>";
echo $e['identity'][1];
echo "<br>";
echo $f['level']['b'];