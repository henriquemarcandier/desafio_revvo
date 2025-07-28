<?php
require '../includes/auth-check.php';
require '../../includes/db.php';

$pageTitle = "Gerenciar Slideshow";
include '../includes/header.php';

try {
    $stmt = $pdo->query("SELECT * FROM slideshow ORDER BY ordem ASC");
    $slides = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Erro ao carregar slides: " . $e->getMessage());
}
?>

<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-gray-800">Slideshow</h1>
        <a href="criar.php" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
            Novo Slide
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ordem</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($slides as $slide): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <?= $slide['ordem'] ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900"><?= htmlspecialchars($slide['titulo']) ?></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?= $slide['ativo'] ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' ?>">
                            <?= $slide['ativo'] ? 'Ativo' : 'Inativo' ?>
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="editar.php?id=<?= $slide['id'] ?>" class="text-blue-600 hover:text-blue-900 mr-3">Editar</a>
                        <a href="deletar.php?id=<?= $slide['id'] ?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Tem certeza?')">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include '../includes/footer.php'; ?>