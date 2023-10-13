<h2>印星星</h2>
<?php

// 直角三角形
echo "* <br>";
echo "** <br>";
echo "*** <br>";
echo "**** <br>";
echo "***** <br>";
echo "<hr>";

for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j <= $i; $j++) {
    echo "*";
  }
  echo "<br>";
}
echo "<br>";
// 倒直角三角形
for ($i = 4; $i >= 0; $i--) {
  for ($j = 0; $j <= $i; $j++) {
    echo "*";
  }
  echo "<br>";
}
echo "<br>";

// 正三角形
// for ($i=0; $i < ; $i++) { 
//   # code...
// }