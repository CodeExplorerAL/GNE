<?php

// 定義正則表達式模式，用於驗證郵箱地址
$pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
// 測試的郵箱地址
$email = "user@example.com";

// 使用 preg_match 函數來檢查郵箱地址是否符合正則表達式模式
if (preg_match($pattern, $email)) {
  // 如果郵箱地址符合模式，則顯示「有效的郵箱地址」
  echo "有效的郵箱地址";
} else {
  // 如果郵箱地址不符合模式，則顯示「無效的郵箱地址」
  echo "無效的郵箱地址";
}

// 替換示例
$string = "The quick brown fox";
// 定義正則表達式模式，用於查找要替換的文本
$pattern = "/quick/";
// 定義替換內容
$replacement = "lazy";
// 使用 preg_replace 函數來根據正則表達式模式替換字符串中的內容
echo preg_replace($pattern, $replacement, $string) . "\n";
// 輸出替換後的字符串，結果為 "The lazy brown fox"
