<h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
<?php

$year = 1989;
echo "年分: $year";
echo "<hr>";

// if ($year % 4 !== 0)
//   echo "平年";
// else if ($year % 100 !== 0)
//   echo "閏年";
// else if ($year % 400 !== 0)
//   echo "平年";
// else
//   echo "閏年";

if ($year % 4 === 0) {
  echo "$year 是閏年";
} else {
  echo "$year 是平年";
}
