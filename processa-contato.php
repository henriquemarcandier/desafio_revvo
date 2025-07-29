<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coletar dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    // Validações básicas
    if (empty($nome) || empty($email) || empty($mensagem)) {
        header('Location: contato.php?status=erro');
        exit;
    }

    // Configurar e-mail
    $para = "contato@leocursos.com";
    $titulo = "Contato via site - " . $assunto;
    
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Telefone: $telefone\n\n";
    $corpo .= "Mensagem:\n$mensagem";
    
    $cabecalhos = "From: $email\r\n";
    $cabecalhos .= "Reply-To: $email\r\n";

    // Enviar e-mail
    $enviado = mail($para, $titulo, $corpo, $cabecalhos);

    // Redirecionar com status
    if ($enviado) {
        header('Location: contato.php?status=sucesso');
    } else {
        header('Location: contato.php?status=erro');
    }
    exit;
} else {
    header('Location: contato.php');
    exit;
}
?>