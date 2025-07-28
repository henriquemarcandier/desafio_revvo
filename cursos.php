<?php
// Set page title
$pageTitle = "Nossos Cursos";

// Include database connection
require_once 'includes/db.php';

// Get all courses from database
try {
    $stmt = $pdo->query("SELECT * FROM cursos ORDER BY criado_em DESC");
    $cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao carregar cursos: " . $e->getMessage());
}

// Include header
include 'includes/header.php';
?>

<main id="main-content" class="py-12">
    <div class="container mx-auto px-4">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Nossos Cursos</h1>
            <p class="text-slate-600 max-w-2xl mx-auto">
                Aenean lacinia bibendum nulla sed consectetur. Nullam quis risus eget urna mollis ornare vel eu leo.
            </p>
        </div>

        <!-- Course Filters -->
        <div class="mb-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="w-full md:w-auto">
                <div class="relative">
                    <input type="text" placeholder="Buscar cursos..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
            <div class="w-full md:w-auto">
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Todos os cursos</option>
                    <option value="destaque">Cursos em destaque</option>
                    <option value="novos">Mais recentes</option>
                    <option value="populares">Mais populares</option>
                </select>
            </div>
        </div>

        <!-- Courses Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (count($cursos) > 0): ?>
                <?php foreach ($cursos as $curso): ?>
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <!-- Course Image -->
                        <div class="h-48 bg-gray-200 overflow-hidden">
                            <?php if ($curso['imagem']): ?>
                                <img src="/assets/images/cursos/<?= htmlspecialchars($curso['imagem']) ?>" alt="<?= htmlspecialchars($curso['titulo']) ?>" class="w-full h-full object-cover">
                            <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center bg-blue-600 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Course Content -->
                        <div class="p-6">
                            <?php if ($curso['destaque']): ?>
                                <span class="inline-block bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded mb-2">Destaque</span>
                            <?php endif; ?>
                            
                            <h3 class="text-xl font-bold text-slate-800 mb-2"><?= htmlspecialchars($curso['titulo']) ?></h3>
                            <p class="text-slate-600 mb-4 line-clamp-2"><?= htmlspecialchars($curso['descricao']) ?></p>
                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-slate-500"><?= date('d/m/Y', strtotime($curso['criado_em'])) ?></span>
                                <a href="/curso/<?= $curso['id'] ?>" class="text-blue-600 hover:text-blue-800 font-medium">Ver Curso</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="md:col-span-3 text-center py-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="text-xl font-medium text-gray-700 mb-2">Nenhum curso disponível</h3>
                    <p class="text-gray-500">Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <?php if (count($cursos) > 0): ?>
        <div class="mt-12 flex justify-center">
            <nav class="inline-flex rounded-md shadow">
                <a href="#" class="px-3 py-1 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">Anterior</a>
                <a href="#" class="px-3 py-1 border-t border-b border-gray-300 bg-white text-blue-600 font-medium">1</a>
                <a href="#" class="px-3 py-1 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">2</a>
                <a href="#" class="px-3 py-1 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">3</a>
                <a href="#" class="px-3 py-1 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">Próxima</a>
            </nav>
        </div>
        <?php endif; ?>
    </div>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>