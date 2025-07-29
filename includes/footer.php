<?php
/**
 * Footer Component
 * 
 * Responsive footer with contact info, navigation, and social links
 */
?>
    </main> <!-- Closing tag for main content from other files -->

    <footer class="bg-slate-800 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo and Description -->
                <div class="md:col-span-2">
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                        <span class="ml-2 text-xl font-bold">LEO</span>
                    </div>
                    <p class="text-slate-300 mb-4">
                        Mesorates laudum pretis interdum. Morbi leo risus, porta ac
                        consectetur nec vestibulum at eros.
                    </p>
                    <p class="text-slate-300">
                        <a href="tel:+5521977653434" class="hover:text-blue-400 transition-colors">(21) 97765-3434</a><br>
                        <a href="mailto:contato@leocursos.com" class="hover:text-blue-400 transition-colors">contato@leocursos.com</a>
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-blue-400">Links Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="<?=$url_site?>" class="text-slate-300 hover:text-white transition-colors">Início</a></li>
                        <li><a href="<?=$url_site?>cursos.php" class="text-slate-300 hover:text-white transition-colors">Cursos</a></li>
                        <li><a href="<?=$url_site?>sobre.php" class="text-slate-300 hover:text-white transition-colors">Sobre Nós</a></li>
                        <li><a href="<?=$url_site?>faq.php" class="text-slate-300 hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="<?=$url_site?>politica-de-privacidade.php" class="text-slate-300 hover:text-white transition-colors">Política de Privacidade</a></li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-blue-400">Redes Sociais</h3>
                    <div class="flex space-x-4">
                        <a href="#" aria-label="Facebook" class="bg-slate-700 hover:bg-blue-600 p-2 rounded-full transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram" class="bg-slate-700 hover:bg-pink-600 p-2 rounded-full transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" aria-label="Twitter" class="bg-slate-700 hover:bg-blue-400 p-2 rounded-full transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" aria-label="LinkedIn" class="bg-slate-700 hover:bg-blue-700 p-2 rounded-full transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-slate-700 mt-8 pt-6 text-center text-slate-400 text-sm">
                <p>&copy; <?php echo date('Y'); ?> LEO Cursos Online. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Inclua isso no seu index.php, preferencialmente antes do fechamento do body -->
<div id="welcomeModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black bg-opacity-75">
    <div class="bg-white rounded-xl max-w-2xl w-full overflow-hidden shadow-2xl">
        <img src="assets/images/slideshow/slide1.jpg">        
        <!-- Modal Content -->
        <div class="p-6 md:p-8">
            <div class="text-center mb-6">
                <p class="mb-2">Aenean lacinia bibendum socis natusque persitibus</p>
                <p class="mb-4">nascetur ridiculus musi lekar ac, vestibulum at et</p>
            </div>
            
            <div class="flex justify-center mb-8">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-bold transition-colors">
                    Inscreva-se
                </button>
            </div>
        </div>
    </div>
</div>

<script>
// Mostrar modal apenas no primeiro acesso
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('welcomeModal');
    const hasSeenModal = localStorage.getItem('hasSeenLeoModal');
    
    if (!hasSeenModal) {
        modal.classList.remove('hidden');
        localStorage.setItem('hasSeenLeoModal', 'true');
    }
    
    // Fechar modal ao clicar fora do conteúdo
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
    
    // Adicionar botão de fechar (opcional)
    const closeButton = document.createElement('button');
    closeButton.innerHTML = '&times;';
    closeButton.className = 'absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-3xl';
    closeButton.addEventListener('click', () => modal.classList.add('hidden'));
    modal.querySelector('.bg-white').prepend(closeButton);
});
</script>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 p-3 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-all opacity-0 invisible">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
        <span class="sr-only">Voltar ao topo</span>
    </button>

    <script>
        // Back to top button functionality
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>