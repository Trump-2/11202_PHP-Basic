<h1>利用程式來產生陣列</h1>
<style>
table,
td {
  border: 3px solid black;
  border-collapse: collapse;
}

td {
  width: 5%;
  text-align: center;
}
</style>
<?php

$nineMulitpleNine = [];
for ($i = 1; $i <= 9; $i++) {
  for ($j = 1; $j <= 9; $j++) {
    $nineMulitpleNine[] = "$i * $j = " . ($i * $j);
  }
}
echo "<pre>";
print_r($nineMulitpleNine);
echo "</pre>";

// 也可以用 foreach 來做，且比較適合
for ($i = 0; $i <= count($nineMulitpleNine) - 1; $i++) {
  echo $nineMulitpleNine[$i];
  if ($i % 9 == 8) {
    echo "<br>";
  }
}

echo "<table>";
for ($i = 0; $i <= count($nineMulitpleNine) - 1; $i++) {
  // echo $nineMulitpleNine[$i];
  if ($i % 9 == 0) {
    echo "<tr>
    <td>$nineMulitpleNine[$i]</td>";
  } else if ($i % 9 == 8) {
    echo "<td>$nineMulitpleNine[$i]</td></tr>";
  } else {
    echo "<td>$nineMulitpleNine[$i]</td>";
  }
}
echo "</table>";