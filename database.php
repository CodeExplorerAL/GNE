<?php
$conn = new mysqli("localhost", "username", "password", "database");

if ($conn->connect_error) {
  die("連接失敗: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM users WHERE age > 18";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . " - 名字: " . $row["name"] . "\n";
  }
} else {
  echo "0 個結果";
}

$conn->close();
