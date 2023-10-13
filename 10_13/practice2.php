<style>
table,
td {
  border: 1px solid orange;

}

table {
  border-collapse: collapse;
  text-align: center;
}

td {
  padding: 3px 9px;
}
</style>
<h2>九九乘法表</h2>

<?php
echo "<table>";
for ($j = 1; $j <= 9; $j++) {
  echo "<tr>";
  for ($i = 1; $i <= 9; $i++) {
    echo "<td>";
    echo "$j x $i = " . ($j * $i);
    echo "</td>";
  }
  echo "</tr>";
}
echo "</table>";

echo "<hr>";

// echo "<table>";
echo "<table>";
echo "<tr>";
echo "<td>乘數</td>";
echo "<td>1</td>";
echo "<td>2</td>";
echo "<td>3</td>";
echo "<td>4</td>";
echo "<td>5</td>";
echo "<td>6</td>";
echo "<td>7</td>";
echo "<td>8</td>";
echo "<td>9</td>";
for ($j = 1; $j <= 9; $j++) {
  echo "<tr>";
  echo "<td>";
  echo $j;
  echo "</td>";
  for ($i = 1; $i <= 9; $i++) {
    echo "<td>";
    echo $i * $j;
    echo "</td>";
  }
  echo "<tr>";
}
echo "</tr>";
echo "</table>";
// echo "</table>";
?>


<?php
// 土法煉鋼法
// for ($i = 1; $i <= 9; $i++) {
//   echo "1 x $i = " . (1 * $i) . "&nbsp;&nbsp;&nbsp;";
// }
// echo "<br>";
// for ($i = 1; $i <= 9; $i++) {
//   echo "2 x $i = " . (2 * $i) . "&nbsp;&nbsp;&nbsp;";
// }
// echo "<br>";
// for ($i = 1; $i <= 9; $i++) {
//   echo "3 x $i = " . (3 * $i) . "&nbsp;&nbsp;&nbsp;";
// }
// echo "<br>";
// for ($i = 1; $i <= 9; $i++) {
//   echo "4 x $i = " . (4 * $i) . "&nbsp;&nbsp;&nbsp;";
// }
// echo "<br>";
// for ($i = 1; $i <= 9; $i++) {
//   echo "5 x $i = " . (5 * $i) . "&nbsp;&nbsp;&nbsp;";
// }
// echo "<br>";
// for ($i = 1; $i <= 9; $i++) {
//   echo "6 x $i = " . (6 * $i) . "&nbsp;&nbsp;&nbsp;";
// }
// echo "<br>";
// for ($i = 1; $i <= 9; $i++) {
//   echo "7 x $i = " . (7 * $i) . "&nbsp;&nbsp;&nbsp;";
// }
// echo "<br>";
// for ($i = 1; $i <= 9; $i++) {
//   echo "8 x $i = " . (8 * $i) . "&nbsp;&nbsp;&nbsp;";
// }
// echo "<br>";
// for ($i = 1; $i <= 9; $i++) {
//   echo "9 x $i = " . (9 * $i) . "&nbsp;&nbsp;&nbsp;";
// }
// echo "<br>";
// echo "<br>";

// 土法煉鋼簡化後
// for ($j = 1; $j <= 9; $j++) {

//   for ($i = 1; $i <= 9; $i++) {
//     echo "$j x $i = " . ($j * $i) . "&nbsp;&nbsp;&nbsp;";
//   }
//   echo "<br>";
// }
?>