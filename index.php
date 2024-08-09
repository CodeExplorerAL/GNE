<?php
// echo "Hello, World!";

/* echo "Hello, World!";
echo "Hello, World!"; */

echo "Hello, World!";

// 變量類型

// 1. 整數 (int)
$number = 10;

// 2. 浮點數 (float)
$pi = 3.14;

// 3. 字符串 (string)
$greeting = "Hello!";

// 4. 布林值 (boolean)
$is_valid = true;

// 5. 數組 (array)
// 索引數組（以數字索引）
$colors = ["red", "yellow", "blue"];
echo $colors[1];                     // yellow
// 關聯數組（以鍵值對形式）
$ages = ["Alice" => 25, "Bob" => 30];
echo $ages["Alice"];                 // 25

// 函數
// 定義和調用函數
function greet($name)
{
  return "Hello, " . $name . "!";
}
echo greet("Alice");                  // Hello, Alice!
// 使用預設參數值
function greets($name = "Guest")
{
  return "Hello, " . $name . "!";
}
echo greets();                        // Hello, Guest!

$name = "ABC";
echo $name;         // ABC

$number = [1, 2, 3];
echo $number[0];    // 1
echo $number[1];    // 2
echo $number[2];    // 3

$friends = ["Alice" => 25, "Bob" => 30, "Charlie" => 35];
foreach ($friends as $name => $age) {
  echo $name . " is " . $age . " years old.";
} // Alice is 25 years old.Bob is 30 years old.Charlie is 35 years old.

function add($a, $b)
{
  return $a + $b;
}
echo add(3, 5); // 8

function adds($a = 0, $b = 0)
{
  return $a + $b;
}
echo adds();      // 0
echo adds(5);     // 5
echo adds(3, 7);  // 10
