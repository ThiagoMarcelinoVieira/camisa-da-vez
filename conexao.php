<?php
// Define o fuso horário
date_default_timezone_set('America/Sao_Paulo');

// ===== DADOS DO BANCO (InfinityFree) =====
$host = 'sql104.infinityfree.com';
$db   = 'if0_40716146_camisa_da_vez';
$user = 'if0_40716146';
$pass = '19533298';
$charset = 'utf8mb4';

// ===== DSN =====
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// ===== OPÇÕES DO PDO =====
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// ===== CONEXÃO =====
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {

    die('Erro ao conectar com o banco de dados.');
}