<?php

// 控制結構 展示 if-else, switch, for, while, 和 foreach
$score = 85;
// if-else
if ($score >= 90) {
  echo "優秀";
} elseif ($score >= 80) {
  echo "良好";
} else {
  echo "繼續努力";
}
// switch
switch (true) {
  case ($score >= 90):
    echo "A";
    break;
  case ($score >= 80):
    echo "B";
    break;
  default:
    echo "C";
}
// for 循環
for ($i = 0; $i < 5; $i++) {
  echo $i . "";
}
// while 循環
$count = 0;
while ($count < 5) {
  echo "Count: " . $count . "\n";
  $count++;
}
// foreach 循環
$fruits = ["蘋果", "香蕉", "橙子"];
foreach ($fruits as $fruit) {
  echo $fruit . "\n";
}
