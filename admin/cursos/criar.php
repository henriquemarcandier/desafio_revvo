<?php
require '../includes/auth-check.php';
$pageTitle = "Novo Curso";
include '../includes/header.php';
?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Adicionar Novo Curso</h1>
    
    <form action="salvar.php" method="POST" enctype="multipart/form-data" class="max-w-3xl bg-white p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <label for="titulo" class="block text-sm font-medium text-gray-700 mb-1">Título</label>
            <input type="text" id="titulo" name="titulo" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        
        <div class="mb-4">
            <label for="descricao" class="block text-sm font-medium text-gray-700 mb-1">Descrição</label>
            <textarea id="descricao" name="descricao" rows="4"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label for="link" class="block text-sm font-medium text-gray-700 mb-1">Link</label>
                <input type="text" id="link" name="link"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div>
                <label class="flex items-center">
                    <input type="checkbox" name="destaque" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span class="ml-2 text-sm text-gray-700">Destacar este curso</span>
                </label>
            </div>
        </div>
        
        <div class="mb-6">
            <label for="imagem" class="block text-sm font-medium text-gray-700 mb-1">Imagem</label>
            <input type="file" id="imagem" name="imagem" accept="image/*"
                class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            <p class="mt-1 text-xs text-gray-500">Formatos: JPG, PNG. Tamanho máximo: 2MB.</p>
        </div>
        
        <div class="flex justify-end">
            <a href="index.php" class="mr-3 bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md">Cancelar</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Salvar Curso</button>
        </div>
    </form>
</div>

<?php include '../includes/footer.php'; ?>