<?php
// Configurações e Conexão com Banco de Dados seguro - Padrão NOC 5.1

$host = 'localhost';
$db = 'BGP_Consultoria_ISP';
$user = 'bgp_admin';
$pass = 'PAsSnhF0rt3@202';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false, // Essencial para prevenir SQL Injection
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Em produção, os erros reais de DB não devem ser exibidos ao utilizador.
    // Lançando um erro genérico com arquivo de log (idealmente)
    error_log($e->getMessage());
    die('<div style="background-color:#0f172a; color:#f8fafc; font-family:monospace; padding:20px;">[SYS_ERROR] Falha de comunicação com o cluster de base de dados. A equipa de engenharia foi notificada.</div>');
}
?>