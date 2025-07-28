<?php
require '../includes/auth-check.php';
$pageTitle = "Novo Slide";
include '../includes/header.php';
?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Adicionar Novo Slide</h1>
    
    <form action="salvar.php" method="POST" enctype="multipart/form-data" class="max-w-3xl bg-white p-6 rounded-lg shadow-md">
        <div class="space-y-6">
            <div>
                <label for="titulo" class="block text-sm font-medium text-gray-700 mb-1">Título*</label>
                <input type="text" id="titulo" name="titulo" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div>
                <label for="descricao" class="block text-sm font-medium text-gray-700 mb-1">Descrição</label>
                <textarea id="descricao" name="descricao" rows="3"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="link_botao" class="block text-sm font-medium text-gray-700 mb-1">Link do Botão</label>
                    <input type="text" id="link_botao" name="link_botao"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label for="texto_botao" class="block text-sm font-medium text-gray-700 mb-1">Texto do Botão</label>
                    <input type="text" id="texto_botao" name="texto_botao" value="VER CURSO"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="ordem" class="block text-sm font-medium text-gray-700 mb-1">Ordem de Exibição</label>
                    <input type="number" id="ordem" name="ordem" min="1" value="1"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div class="flex items-center">
                    <input type="checkbox" id="ativo" name="ativo" checked
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="ativo" class="ml-2 block text-sm text-gray-700">
                        Slide ativo
                    </label>
                </div>
            </div>
            
            <div>
                <label for="imagem" class="block text-sm font-medium text-gray-700 mb-1">Imagem*</label>
                <input type="file" id="imagem" name="imagem" accept="image/*" required
                    class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                <p class="mt-1 text-xs text-gray-500">Tamanho recomendado: 1920×1080px. Formatos: JPG, PNG.</p>
            </div>
        </div>
        
        <div class="flex justify-end mt-8 space-x-3">
            <a href="index.php" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md">Cancelar</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Salvar Slide</button>
        </div>
    </form>
</div>

<?php include '../includes/footer.php'; ?>