<?php
require_once '../includes/config_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Antispam Honeypot Check
    if (!empty($_POST['hp_field'])) {
        die('Spam detectado.');
    }

    // Receber e sanitizar dados do formulário
    $nome = htmlspecialchars(trim($_POST['nome'] ?? ''), ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $whatsapp = htmlspecialchars(trim($_POST['whatsapp'] ?? ''), ENT_QUOTES, 'UTF-8');
    $empresa = htmlspecialchars(trim($_POST['empresa'] ?? ''), ENT_QUOTES, 'UTF-8');
    $assinantes = htmlspecialchars(trim($_POST['assinantes'] ?? ''), ENT_QUOTES, 'UTF-8');

    // Respostas Estratégicas
    $resp_1 = htmlspecialchars(trim($_POST['resp_1'] ?? ''), ENT_QUOTES, 'UTF-8');
    $resp_2 = htmlspecialchars(trim($_POST['resp_2'] ?? ''), ENT_QUOTES, 'UTF-8');
    $resp_3 = htmlspecialchars(trim($_POST['resp_3'] ?? ''), ENT_QUOTES, 'UTF-8');
    $resp_4 = htmlspecialchars(trim($_POST['resp_4'] ?? ''), ENT_QUOTES, 'UTF-8');
    $resp_5 = htmlspecialchars(trim($_POST['resp_5'] ?? ''), ENT_QUOTES, 'UTF-8');
    $resp_6 = htmlspecialchars(trim($_POST['resp_6'] ?? ''), ENT_QUOTES, 'UTF-8');
    $resp_7 = htmlspecialchars(trim($_POST['resp_7'] ?? ''), ENT_QUOTES, 'UTF-8');
    $resp_8 = htmlspecialchars(trim($_POST['resp_8'] ?? ''), ENT_QUOTES, 'UTF-8');

    // Validação Básica
    if (empty($nome) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../aplicacao.php?erro=email_invalido');
        exit;
    }

    // Inserção Segura (Prepared Statements via PDO)
    $sql = "INSERT INTO leads_mentoria 
            (nome, email, whatsapp, empresa_isp, qtd_assinantes, 
            resp_1, resp_2, resp_3, resp_4, resp_5, resp_6, resp_7, resp_8) 
            VALUES 
            (:nome, :email, :whatsapp, :empresa_isp, :qtd_assinantes, 
            :resp_1, :resp_2, :resp_3, :resp_4, :resp_5, :resp_6, :resp_7, :resp_8)";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':whatsapp' => $whatsapp,
            ':empresa_isp' => $empresa,
            ':qtd_assinantes' => $assinantes,
            ':resp_1' => $resp_1,
            ':resp_2' => $resp_2,
            ':resp_3' => $resp_3,
            ':resp_4' => $resp_4,
            ':resp_5' => $resp_5,
            ':resp_6' => $resp_6,
            ':resp_7' => $resp_7,
            ':resp_8' => $resp_8,
        ]);

        // Redireciona para o sucesso
        header('Location: ../sucesso.php');
        exit;

    } catch (\PDOException $e) {
        // Redireciona com erro genérico
        error_log($e->getMessage());
        header('Location: ../aplicacao.php?erro=falha_db');
        exit;
    }
} else {
    // Redireciona caso não seja POST
    header('Location: ../aplicacao.php');
    exit;
}
?>