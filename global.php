<?php
// 假設這是一個處理表單的 PHP 文件

// 處理 GET 請求
if (isset($_GET['name'])) {
  // 確保 'name' 參數存在，然後輸出 HTML 安全的歡迎消息
  echo "Hello, " . htmlspecialchars($_GET['name']) . "!";
}

// 處理 POST 請求
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // 確保請求方法是 POST，然後從 POST 數據中獲取用戶名和密碼
  $username = $_POST['username'];
  $password = $_POST['password'];
}

// 使用 SESSION
session_start(); // 啟動會話
$_SESSION['user_id'] = 123; // 設置會話變量 'user_id'
echo "用戶 ID: " . $_SESSION['user_id']; // 輸出會話變量 'user_id'
