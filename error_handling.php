<?php
// 錯誤處理
try {
  $file = fopen("non_existent_file.txt", "r");
  if (!$file) {
    throw new Exception("無法打開文件");
  }
} catch (Exception $e) {
  echo "捕獲到異常：" . $e->getMessage() . "\n";
} finally {
  echo "這總是會執行\n";
}
// die() 示例
// 嘗試除以零，這會引發錯誤
$number = 10;
$denominator = 0;
// 使用 die() 終止腳本
if ($denominator == 0) {
  die("錯誤：無法除以零。");
}
// 這行程式碼不會執行，因為前面的 die() 已經終止了腳本
$result = $number / $denominator;
echo "結果: " . $result;
