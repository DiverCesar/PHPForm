<?php
$host = 'https://byixbngbbdyugffpnylx.supabase.co';
$port = '5432';
$dbname = 'postgres';
$user = 'postgres';
$password = 'Pufle.landia15';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed.");
}
?>