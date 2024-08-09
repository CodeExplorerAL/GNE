<?php
// 防止 SQL 注入
$username = mysqli_real_escape_string($conn, $_POST['username']);
// 使用 mysqli_real_escape_string 函數來轉義用戶輸入的資料，防止 SQL 注入攻擊
$query = "SELECT * FROM users WHERE username = '$username'";

// 防止 XSS 攻擊
$userInput = "<script>alert('XSS');</script>";
// 使用 htmlspecialchars 函數來將特殊字符轉換為 HTML 實體，防止 XSS 攻擊
echo htmlspecialchars($userInput);

// 密碼哈希
$password = "user_password";
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
// 使用 password_hash 函數來生成密碼的雜湊值，保護密碼的安全

// 驗證密碼
if (password_verify($password, $hashedPassword)) {
  // 使用 password_verify 函數來檢查用戶提供的密碼與存儲的雜湊值是否匹配
  echo "密碼正確";
}
