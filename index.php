<?php
// Set page title
$pageTitle = "LEO - Cursos Online";

// Include database connection
require_once 'includes/db.php';

// Get featured courses
try {
    $stmt = $pdo->query("SELECT * FROM cursos WHERE destaque = TRUE ORDER BY criado_em DESC LIMIT 3");
    $cursosDestaque = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $stmt = $pdo->query("SELECT * FROM slideshow WHERE ativo = TRUE ORDER BY ordem ASC");
    $slideshow = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao carregar dados: " . $e->getMessage());
}

// Include header
include 'includes/header.php';
?>

<main id="main-content">
    <!-- Hero Slider -->
<section class="relative">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <?php if (count($slideshow) > 0): ?>
                <?php foreach ($slideshow as $slide): ?>
                    <div class="swiper-slide">
                        <div class="relative h-[500px] bg-gray-900">
                            <div class="absolute inset-0 bg-black/30 z-10"></div>
                            <?php if ($slide['imagem']): ?>
                                <img src="assets/images/slideshow/<?= htmlspecialchars($slide['imagem']) ?>" 
                                     alt="<?= htmlspecialchars($slide['titulo']) ?>" 
                                     class="absolute inset-0 w-full h-full object-cover">
                            <?php endif; ?>
                            <div class="container mx-auto px-4 h-full flex items-center relative z-20">
                                <div class="max-w-2xl text-white">
                                    <h2 class="text-4xl md:text-5xl font-bold mb-4"><?= htmlspecialchars($slide['titulo']) ?></h2>
                                    <p class="text-lg mb-6"><?= htmlspecialchars($slide['descricao']) ?></p>
                                    <?php if ($slide['link_botao']): ?>
                                        <a href="<?= htmlspecialchars($slide['link_botao']) ?>" 
                                           class="inline-block bg-white text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                                            <?= htmlspecialchars($slide['texto_botao'] ?? 'VER CURSO') ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Slide padrão caso não exista nenhum -->
                <div class="swiper-slide">
                    <div class="relative h-[500px] bg-blue-600">
                        <div class="container mx-auto px-4 h-full flex items-center">
                            <div class="max-w-2xl text-white">
                                <h2 class="text-4xl md:text-5xl font-bold mb-4">Bem-vindo à LEO</h2>
                                <p class="text-lg mb-6">Aenean lacinia bibendum nulla sed consectetur.</p>
                                <a href="/cursos.php" class="inline-block bg-white text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                                    VER CURSOS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <!-- Paginação -->
        <div class="swiper-pagination"></div>
        
        <!-- Navegação (opcional) -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

    <!-- Featured Courses -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-slate-800 mb-2">Cursos em Destaque</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Aenean lacinia bibendum nulla sed consectetur. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php if (count($cursosDestaque) > 0): ?>
                    <?php foreach ($cursosDestaque as $curso): ?>
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="h-48 bg-gray-200 overflow-hidden">
                                <?php if ($curso['imagem']): ?>
                                    <img src="assets/images/cursos/<?= htmlspecialchars($curso['imagem']) ?>" 
                                         alt="<?= htmlspecialchars($curso['titulo']) ?>" 
                                         class="w-full h-full object-cover">
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
                            
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-slate-800 mb-2"><?= htmlspecialchars($curso['titulo']) ?></h3>
                                <p class="text-slate-600 mb-4 line-clamp-2"><?= htmlspecialchars($curso['descricao']) ?></p>
                                <a href="curso/<?= $curso['id'] ?>" class="text-blue-600 hover:text-blue-800 font-medium">Ver Curso</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="md:col-span-3 text-center py-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-gray-500">Nenhum curso em destaque no momento</p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="text-center mt-8">
                <a href="cursos.php" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    Ver Todos os Cursos
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Certificado Reconhecido</h3>
                    <p class="text-slate-600">Aenean lacinia bibendum nulla sed consectetur. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Acesso Seguro</h3>
                    <p class="text-slate-600">Aenean lacinia bibendum nulla sed consectetur. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Acesso Ilimitado</h3>
                    <p class="text-slate-600">Aenean lacinia bibendum nulla sed consectetur. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>

<!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const heroSwiper = new Swiper('.hero-swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
    });
</script>