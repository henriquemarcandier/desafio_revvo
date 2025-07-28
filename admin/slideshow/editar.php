<?php
require '../includes/auth-check.php';
require '../../includes/db.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$slideId = $_GET['id'];

try {
    $stmt = $pdo->prepare("SELECT * FROM slideshow WHERE id = ?");
    $stmt->execute([$slideId]);
    $slide = $stmt->fetch();

    if (!$slide) {
        header('Location: index.php?error=not_found');
        exit;
    }
} catch (PDOException $e) {
    die("Erro ao carregar slide: " . $e->getMessage());
}

$pageTitle = "Editar Slide: " . htmlspecialchars($slide['titulo']);
include '../includes/header.php';
?>

<div class="container mx-auto px-4 py-8">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Editar Slide</h1>
        <a href="index.php" class="text-blue-600 hover:text-blue-800">
            ← Voltar para lista
        </a>
    </div>

    <form action="salvar.php" method="POST" enctype="multipart/form-data" class="max-w-3xl bg-white p-6 rounded-lg shadow-md">
        <input type="hidden" name="id" value="<?= $slide['id'] ?>">

        <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Current Image Preview -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Imagem Atual</label>
                <div class="border border-gray-200 rounded-md p-2">
                    <?php if ($slide['imagem']): ?>
                        <img src="../../assets/images/slideshow/<?= htmlspecialchars($slide['imagem']) ?>" 
                             alt="Imagem atual do slide" 
                             class="w-full h-auto rounded">
                        <div class="mt-2 text-center">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="remover_imagem" class="h-4 w-4 text-blue-600">
                                <span class="ml-2 text-sm text-gray-600">Remover imagem</span>
                            </label>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Form Fields -->
            <div class="space-y-6">
                <div>
                    <label for="titulo" class="block text-sm font-medium text-gray-700 mb-1">Título*</label>
                    <input type="text" id="titulo" name="titulo" required
                           value="<?= htmlspecialchars($slide['titulo']) ?>"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="descricao" class="block text-sm font-medium text-gray-700 mb-1">Descrição</label>
                    <textarea id="descricao" name="descricao" rows="3"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($slide['descricao']) ?></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="link_botao" class="block text-sm font-medium text-gray-700 mb-1">Link do Botão</label>
                        <input type="text" id="link_botao" name="link_botao"
                               value="<?= htmlspecialchars($slide['link_botao']) ?>"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label for="texto_botao" class="block text-sm font-medium text-gray-700 mb-1">Texto do Botão</label>
                        <input type="text" id="texto_botao" name="texto_botao" 
                               value="<?= htmlspecialchars($slide['texto_botao'] ?? 'VER CURSO') ?>"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="ordem" class="block text-sm font-medium text-gray-700 mb-1">Ordem</label>
                        <input type="number" id="ordem" name="ordem" min="1"
                               value="<?= $slide['ordem'] ?>"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="ativo" name="ativo" 
                               <?= $slide['ativo'] ? 'checked' : '' ?>
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="ativo" class="ml-2 block text-sm text-gray-700">
                            Slide ativo
                        </label>
                    </div>
                </div>

                <div>
                    <label for="imagem" class="block text-sm font-medium text-gray-700 mb-1">Nova Imagem</label>
                    <input type="file" id="imagem" name="imagem" accept="image/*"
                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="mt-1 text-xs text-gray-500">Deixe em branco para manter a imagem atual.</p>
                </div>
            </div>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="index.php" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md">Cancelar</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Salvar Alterações</button>
        </div>
    </form>
</div>

<?php include '../includes/footer.php'; ?>