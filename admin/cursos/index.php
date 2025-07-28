<?php
require '../includes/auth-check.php';
require '../../includes/db.php';

$pageTitle = "Administrar Cursos";
include '../includes/header.php';

try {
    $stmt = $pdo->query("SELECT * FROM cursos ORDER BY criado_em DESC");
    $cursos = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Erro ao carregar cursos: " . $e->getMessage());
}
?>

<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-gray-800">Gerenciar Cursos</h1>
        <a href="criar.php" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Novo Curso</a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Destaque</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($cursos as $curso): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900"><?= htmlspecialchars($curso['titulo']) ?></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?= $curso['destaque'] ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' ?>">
                            <?= $curso['destaque'] ? 'Sim' : 'Não' ?>
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <?= date('d/m/Y', strtotime($curso['criado_em'])) ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="editar.php?id=<?= $curso['id'] ?>" class="text-blue-600 hover:text-blue-900 mr-3">Editar</a>
                        <a href="deletar.php?id=<?= $curso['id'] ?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Tem certeza?')">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include '../includes/footer.php'; ?>