<?php
require '../includes/auth-check.php';
require '../../includes/db.php';

$dados = [
    'titulo' => $_POST['titulo'] ?? '',
    'descricao' => $_POST['descricao'] ?? '',
    'link' => $_POST['link'] ?? '',
    'destaque' => isset($_POST['destaque']) ? 1 : 0
];

// Processar upload de imagem
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $nomeArquivo = uniqid() . '.' . $extensao;
    $diretorioDestino = '../../assets/images/cursos/';
    
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorioDestino . $nomeArquivo)) {
        $dados['imagem'] = $nomeArquivo;
    }
}

try {
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        // Edição
        $dados['id'] = $_POST['id'];
        $sql = "UPDATE cursos SET titulo = :titulo, descricao = :descricao, link = :link, destaque = :destaque" . 
               (isset($dados['imagem']) ? ", imagem = :imagem" : "") . " WHERE id = :id";
    } else {
        // Criação
        $sql = "INSERT INTO cursos (titulo, descricao, link, destaque" . 
               (isset($dados['imagem']) ? ", imagem" : "") . ") VALUES (:titulo, :descricao, :link, :destaque" . 
               (isset($dados['imagem']) ? ", :imagem" : "") . ")";
    }
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute($dados);
    
    header('Location: index.php?success=1');
    exit;
} catch (PDOException $e) {
    die("Erro ao salvar curso: " . $e->getMessage());
}