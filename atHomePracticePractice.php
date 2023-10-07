<h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
<?php
$year = 1968;
echo "年分 : $year";
echo "<hr>";

// 巢狀 if 判斷式
if( $year % 4 === 0) {
  if ($year % 100 !== 0) {
    echo "$year 是閏年";
  } else {
    if ($year % 400 === 0) {
      echo "$year 是閏年";
    } else {
        echo "$year 不是潤年";
    }
  }
} else {
    echo "$year 不是閏年";
}

// 簡化上面的巢狀結構
if ($year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0)) {
    echo "$year 是閏年";
} else {
    echo "$year 是平年";
}