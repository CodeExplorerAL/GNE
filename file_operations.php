<?php
// 文件操作
// 寫入文件
$content = "這是要寫入文件的內容";
file_put_contents("test.txt", $content);
// 讀取文件
$readContent = file_get_contents("test.txt");
echo $readContent . "\n";
// 追加內容到文件
file_put_contents("test.txt", "\n這是追加的內容", FILE_APPEND);
