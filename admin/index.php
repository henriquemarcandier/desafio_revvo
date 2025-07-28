<?php

require 'includes/auth-check.php';
$pageTitle = "Dashboard Admin";
require '../includes/db.php';
include 'includes/header.php';

try {
    // Contar cursos
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM cursos");
    $totalCursos = $stmt->fetch()['total'];
    
    // Contar slides
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM slideshow");
    $totalSlides = $stmt->fetch()['total'];
} catch (PDOException $e) {
    die("Erro ao carregar dados: " . $e->getMessage());
}
?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-8">Dashboard Administrativo</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Cursos</h2>
            <p class="text-3xl font-bold text-blue-600"><?= $totalCursos ?></p>
            <div class="mt-4">
                <a href="cursos/index.php" class="text-blue-600 hover:text-blue-800">Gerenciar Cursos →</a>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Slideshow</h2>
            <p class="text-3xl font-bold text-blue-600"><?= $totalSlides ?></p>
            <div class="mt-4">
                <a href="slideshow/index.php" class="text-blue-600 hover:text-blue-800">Gerenciar Slides →</a>
            </div>
        </div>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Ações Rápidas</h2>
        <div class="flex flex-wrap gap-4">
            <a href="cursos/criar.php" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Novo Curso</a>
            <a href="slideshow/criar.php" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Novo Slide</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>