<?php
// includes/db.php
$host = 'localhost';
$dbname = 'revvo_desafio';
$username = 'root';
$password = '';
$url_site = 'https://localhost/desafio_revvo/';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

// Função para listar cursos
function getCursos($pdo) {
    $stmt = $pdo->query("SELECT * FROM cursos");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Função para adicionar curso
function addCurso($pdo, $titulo, $descricao, $imagem, $link) {
    $stmt = $pdo->prepare("INSERT INTO cursos (titulo, descricao, imagem, link) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$titulo, $descricao, $imagem, $link]);
}

// Funções similares para atualizar e deletar...
?>