<?php
require '../includes/auth-check.php';
require '../../includes/db.php';

// Check if course ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$cursoId = $_GET['id'];

// Fetch course data
try {
    $stmt = $pdo->prepare("SELECT * FROM cursos WHERE id = ?");
    $stmt->execute([$cursoId]);
    $curso = $stmt->fetch();

    if (!$curso) {
        header('Location: index.php?error=not_found');
        exit;
    }
} catch (PDOException $e) {
    die("Erro ao carregar curso: " . $e->getMessage());
}

$pageTitle = "Editar Curso: " . htmlspecialchars($curso['titulo']);
include '../includes/header.php';
?>

<div class="container mx-auto px-4 py-8">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Editar Curso</h1>
        <a href="index.php" class="text-blue-600 hover:text-blue-800">
            ← Voltar para lista de cursos
        </a>
    </div>

    <form action="salvar.php" method="POST" enctype="multipart/form-data" class="max-w-3xl bg-white p-6 rounded-lg shadow-md">
        <input type="hidden" name="id" value="<?= $curso['id'] ?>">

        <div class="mb-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Current Image Preview -->
            <div class="md:col-span-1">
                <label class="block text-sm font-medium text-gray-700 mb-2">Imagem Atual</label>
                <div class="border border-gray-200 rounded-md p-2">
                    <?php if ($curso['imagem']): ?>
                        <img src="../../assets/images/cursos/<?= htmlspecialchars($curso['imagem']) ?>" 
                             alt="Imagem atual do curso" 
                             class="w-full h-auto rounded">
                        <div class="mt-2 text-center">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="remover_imagem" class="h-4 w-4 text-blue-600">
                                <span class="ml-2 text-sm text-gray-600">Remover imagem</span>
                            </label>
                        </div>
                    <?php else: ?>
                        <div class="bg-gray-100 h-40 flex items-center justify-center rounded text-gray-500">
                            Nenhuma imagem cadastrada
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Form Fields -->
            <div class="md:col-span-2 space-y-6">
                <div>
                    <label for="titulo" class="block text-sm font-medium text-gray-700 mb-1">Título*</label>
                    <input type="text" id="titulo" name="titulo" required
                           value="<?= htmlspecialchars($curso['titulo']) ?>"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="descricao" class="block text-sm font-medium text-gray-700 mb-1">Descrição</label>
                    <textarea id="descricao" name="descricao" rows="4"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($curso['descricao']) ?></textarea>
                </div>

                <div>
                    <label for="link" class="block text-sm font-medium text-gray-700 mb-1">Link</label>
                    <input type="text" id="link" name="link"
                           value="<?= htmlspecialchars($curso['link']) ?>"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="destaque" name="destaque" 
                           <?= $curso['destaque'] ? 'checked' : '' ?>
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="destaque" class="ml-2 block text-sm text-gray-700">
                        Destacar este curso
                    </label>
                </div>

                <div>
                    <label for="imagem" class="block text-sm font-medium text-gray-700 mb-1">Nova Imagem</label>
                    <input type="file" id="imagem" name="imagem" accept="image/*"
                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="mt-1 text-xs text-gray-500">Formatos: JPG, PNG. Tamanho máximo: 2MB.</p>
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