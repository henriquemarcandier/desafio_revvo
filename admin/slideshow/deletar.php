<?php
require '../includes/auth-check.php';
require '../../includes/db.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: index.php');
    exit;
}

try {
    // Primeiro obtemos o nome da imagem para deletar o arquivo
    $stmt = $pdo->prepare("SELECT imagem FROM slideshow WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $slide = $stmt->fetch();
    
    if ($slide && $slide['imagem']) {
        $arquivoImagem = '../../assets/images/slideshow/' . $slide['imagem'];
        if (file_exists($arquivoImagem)) {
            unlink($arquivoImagem);
        }
    }
    
    // Depois deletamos o registro
    $stmt = $pdo->prepare("DELETE FROM slideshow WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    
    header('Location: index.php?deleted=1');
    exit;
} catch (PDOException $e) {
    die("Erro ao deletar slide: " . $e->getMessage());
}