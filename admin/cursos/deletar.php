<?php
require '../includes/auth-check.php';
require '../../includes/db.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: index.php');
    exit;
}

try {
    // Primeiro obtemos o nome da imagem para deletar o arquivo
    $stmt = $pdo->prepare("SELECT imagem FROM cursos WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $curso = $stmt->fetch();
    
    if ($curso && $curso['imagem']) {
        $arquivoImagem = '../../assets/images/cursos/' . $curso['imagem'];
        if (file_exists($arquivoImagem)) {
            unlink($arquivoImagem);
        }
    }
    
    // Depois deletamos o registro
    $stmt = $pdo->prepare("DELETE FROM cursos WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    
    header('Location: index.php?deleted=1');
    exit;
} catch (PDOException $e) {
    die("Erro ao deletar curso: " . $e->getMessage());
}