<?php
// SQL Injection 취약점
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = " . $id;
mysql_query($query);

// XSS 취약점
echo $_GET['name'];

// 커맨드 인젝션 취약점
system($_GET['cmd']);

// 파일 인클루드 취약점
include($_GET['file']);

echo "<h1>Hello from app2 - Security Test</h1>";
?>
