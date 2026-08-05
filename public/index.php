<?php
// SQL Injection 취약점
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = " . $id;

// XSS 취약점
echo $_GET['name'];

// 커맨드 인젝션 취약점
system($_GET['cmd']);

echo "<h1>Hello from app2 - 취약한 소스</h1>";
?>
