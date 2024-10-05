<?php

// データベース接続情報
$db_server = 'mysql3101.db.sakura.ne.jp';  // さくらのサーバー名
$db_name = 'tawagram_kadai09_db2';
$db_user = 'tawagram_kadai09_db2';
$db_password = 'fdms1995';

// DB接続
try {
    $dsn = "mysql:host={$db_server};dbname={$db_name};charset=utf8mb4";
    $pdo = new PDO($dsn, $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('データベース接続エラー: ' . $e->getMessage());
}