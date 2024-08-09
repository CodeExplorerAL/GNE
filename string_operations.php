<?php
// 字符串操作
$str = "Hello, PHP World!";
// 字符串長度
echo strlen($str) . "\n"; // 17
// 子字符串
echo substr($str, 7, 3) . "\n"; // PHP
// 替換字符串
echo str_replace("PHP", "Amazing PHP", $str) . "\n"; // Hello, Amazing PHP World!
// 字符串轉數組
$arr = explode(" ", $str);
print_r($arr);
/*
(
[0] => Hello,
[1] => PHP
[2] => World!
)
*/
// 字符串轉數組
echo implode(" - ", $arr) . "\n"; // Hello, - PHP - World!