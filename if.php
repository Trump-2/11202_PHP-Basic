<?php

$score=75;
echo "我的成績：".$score;
echo "<br>";
echo "判斷為：";
if($score >= 90) {
  echo "great";
} else if ($score >= 80) {
  echo "good";
} else {
  echo "normal";
}

// 為甚麼印不出來
echo false;