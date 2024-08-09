<?php
// 日期和時間
echo date("Y-m-d H:i:s") . "\n";
echo time() . "\n";

// 數組操作
$stack = ["orange", "banana"];
array_push($stack, "apple");
$fruit = array_pop($stack);
echo $fruit . "\n";

// 字符串函數
$text = "   Hello, World!   ";
echo trim($text) . "\n";
echo strtoupper($text) . "\n";
