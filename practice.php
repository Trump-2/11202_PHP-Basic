<?php

$score = 61;

$level = $score >= 60 ? '及格' : "不及格";
echo $level;

echo "<br>";

$year = 1965;
if ($year % 4 !== 0)
  echo "平年";
else if ($year % 100 !== 0)
  echo "閏年";
else if ($year % 400 !== 0)
  echo "平年";
else {
  echo "閏年";
}

echo "<br>";

for ($i = 1; $i < 16; $i += 2) {
  echo $i . ',';
}

echo "<br>";

for ($i = 10; $i < 100; $i += 10)
  echo $i . ",";

echo "<br>";
for ($i = 3; $i <= 97; $i += 2) {
  echo $i . ',';
}

echo "<br>";

while ($score >= 60) {
  // $score = $score - 1;
  $score -= 1;
}

echo $score;

echo "<br>";

$point = [10, 20, 30];
foreach ($point as $key => $value)
  echo $key . $value;
