<?php
// SQL Injection 취약점
$id = $_GET['id'] ?? '1';
$query = "SELECT * FROM users WHERE id = " . $id;
echo "<p>쿼리: " . $query . "</p>";

// XSS 취약점
$name = $_GET['name'] ?? '방문자';
echo "<p>안녕하세요, " . $name . "님!</p>";

echo "<h1>Hello from app2 - 🍋 레몬 (취약한 소스)</h1>";
echo "<p>배포 시간: " . date('Y-m-d H:i:s') . "</p>";
?>
