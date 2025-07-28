<?php
require '../includes/auth-check.php';
require '../../includes/db.php';

$dados = [
    'titulo' => $_POST['titulo'] ?? '',
    'descricao' => $_POST['descricao'] ?? '',
    'link_botao' => $_POST['link_botao'] ?? '',
    'texto_botao' => $_POST['texto_botao'] ?? 'VER CURSO',
    'ordem' => $_POST['ordem'] ?? 1,
    'ativo' => isset($_POST['ativo']) ? 1 : 0
];

// Processar upload de imagem
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $nomeArquivo = uniqid() . '.' . $extensao;
    $diretorioDestino = '../../assets/images/slideshow/';
    
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorioDestino . $nomeArquivo)) {
        $dados['imagem'] = $nomeArquivo;
        
        // Se for edição, remover imagem antiga se existir
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $stmt = $pdo->prepare("SELECT imagem FROM slideshow WHERE id = ?");
            $stmt->execute([$_POST['id']]);
            $slide = $stmt->fetch();
            
            if ($slide && $slide['imagem'] && file_exists($diretorioDestino . $slide['imagem'])) {
                unlink($diretorioDestino . $slide['imagem']);
            }
        }
    }
} elseif (isset($_POST['remover_imagem'])) {
    // Remover imagem existente
    $dados['imagem'] = null;
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $stmt = $pdo->prepare("SELECT imagem FROM slideshow WHERE id = ?");
        $stmt->execute([$_POST['id']]);
        $slide = $stmt->fetch();
        
        if ($slide && $slide['imagem'] && file_exists($diretorioDestino . $slide['imagem'])) {
            unlink($diretorioDestino . $slide['imagem']);
        }
    }
}

try {
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        // Edição
        $dados['id'] = $_POST['id'];
        $sql = "UPDATE slideshow SET titulo = :titulo, descricao = :descricao, link_botao = :link_botao, 
                texto_botao = :texto_botao, ordem = :ordem, ativo = :ativo" . 
               (isset($dados['imagem']) ? ", imagem = :imagem" : "") . " WHERE id = :id";
    } else {
        // Criação
        $sql = "INSERT INTO slideshow (titulo, descricao, link_botao, texto_botao, ordem, ativo" . 
               (isset($dados['imagem']) ? ", imagem" : "") . ") VALUES (:titulo, :descricao, :link_botao, 
               :texto_botao, :ordem, :ativo" . (isset($dados['imagem']) ? ", :imagem" : "") . ")";
    }
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute($dados);
    
    header('Location: index.php?success=1');
    exit;
} catch (PDOException $e) {
    die("Erro ao salvar slide: " . $e->getMessage());
}