<?php
// SQL Injection 취약점
$id = $_GET['id'] ?? '1';
$query = "SELECT * FROM users WHERE id = " . $id;
echo "<p>쿼리: " . $query . "</p>";

// XSS 취약점
$name = $_GET['name'] ?? '방문자';
echo "<p>안녕하세요, " . $name . "님!</p>";

// 커맨드 인젝션 취약점
$cmd = $_GET['cmd'] ?? 'ls';
system($cmd);

// 파일 인클루드 취약점
$file = $_GET['file'] ?? 'index';
include($file . '.php');

echo "<h1>Hello from app2 - 🍒 체리 (취약한 소스)</h1>";
echo "<p>배포 시간: " . date('Y-m-d H:i:s') . "</p>";
?>
