<h2>直角三角形</h2>
<?php
// echo '*';
// echo '**';
// echo '***';
// echo '****';
// echo '*****';
// echo "<hr>";

// 外迴圈負責產生列數
for ($j = 0; $j < 5; $j++) {
  // 內迴圈負責印星星
  for ($i = 0; $i <= $j; $i++) {
    echo "*";
  }
  echo "<br>";
}
echo "<hr>";
?>
<h2>倒直角三角形</h2>
<?php
// 外迴圈負責產生列數
for ($j = 5; $j >= 1; $j--) {
  // 內迴圈負責印星星
  for ($i = 0; $i < $j; $i++) {
    echo "*";
  }
  echo "<br>";
}
echo "<hr>";
?>


<style>
/* 這裡使用 universal selector 來選取所有的元素 */
* {
  font-family: 'Courier New', Courier, monospace;
}
</style>
<h2>正三角形</h2>
<?php
// echo "&nbsp;&nbsp;&nbsp;&nbsp;*<br>";
// // = 
// // echo &nbsp;
// // echo &nbsp;
// // echo &nbsp;
// // echo &nbsp;
// // echo *;
// // echo <br>;
// echo "&nbsp;&nbsp;&nbsp;***<br>";
// // =
// // echo &nbsp;
// // echo &nbsp;
// // echo &nbsp;
// // echo *;
// // echo *;
// // echo *;
// // echo <br>;
// echo "&nbsp;&nbsp;*****<br>";
// // =
// // echo &nbsp;
// // echo &nbsp;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo <br>;
// echo "&nbsp;*******<br>";
// // =
// // echo &nbsp;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo <br>;

// echo "*********<br>";
// // =
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo <br>;

// 巢狀迴圈，內層有兩個迴圈

// 外迴圈負責產生列數
for ($i = 0; $i < 5; $i++) {
  // 此迴圈負責印空白
  for ($j = 0; $j < 4 - $i; $j++) {
    echo "&nbsp;";
  }

  // 此迴圈負責印星星
  for ($k = 0; $k < 2 * $i + 1; $k++) {
    echo "*";

  }
  echo "<br>";
}
echo "<hr>";
?>

<h2>倒正三角形</h2>
<?php
// 巢狀迴圈，內層有兩個迴圈

// 外迴圈負責產生列數
for ($i = 4; $i >= 0; $i--) {
  // 此迴圈負責印空白
  for ($j = 0; $j < 4 - $i; $j++) {
    echo "&nbsp;";
  }

  // 此迴圈負責印星星
  for ($k = 0; $k < 2 * $i + 1; $k++) {
    echo "*";

  }
  echo "<br>";
}
echo "<hr>";
?>
<h2>菱形</h2>
<?php
// 巢狀迴圈，內層有兩個迴圈

// 外迴圈負責產生列數
// $tmp = 0;
for ($i = 0; $i < 9; $i++) {
  //
  if ($i <= 4) {
    $tmp = $i;
  } else {
    $tmp--;
  }

  // 此迴圈負責印空白
  for ($j = 0; $j < 4 - $tmp; $j++) {
    echo "&nbsp;";
  }

  // 此迴圈負責印星星
  for ($k = 0; $k < 2 * $tmp + 1; $k++) {
    echo "*";

  }
  echo "<br>";
}
echo "<hr>";
?>

<h2>矩形</h2>
<?php
for ($i = 0; $i < 7; $i++) {
  for ($j = 0; $j < 7; $j++) {
    if ($i === 0 || $i === 6) {
      echo "*";
    } else if ($j === 0 || $j === 6) {
      echo "*";
    } else {
      // 這裡要注意不能使用 " "，只會顯示一個空白而已
      echo "&nbsp;";
    }
  }
  echo "<br>";
}
?>