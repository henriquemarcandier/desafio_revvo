<?php
require_once 'includes/db.php';
require_once 'includes/header.php';
?>

<main class="faq-page">
    <section class="banner-faq">
        <div class="container">
            <h1>Perguntas Frequentes</h1>
            <p class="subtitulo">Encontre respostas para as dúvidas mais comuns sobre nossos cursos e serviços</p>
        </div>
    </section>

    <section class="faq-content">
        <div class="container">
            <div class="faq-intro">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
            </div>

            <div class="faq-accordion">
                <div class="faq-categoria">
                    <h2><span>📚</span> Sobre os Cursos</h2>
                    
                    <div class="faq-item">
                        <button class="faq-pergunta">
                            Lorem ipsum dolor sit amet consectetur?
                            <span class="faq-icone">+</span>
                        </button>
                        <div class="faq-resposta">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <button class="faq-pergunta">
                            Vestibulum auctor dapibus neque?
                            <span class="faq-icone">+</span>
                        </button>
                        <div class="faq-resposta">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt lorem enim, eget fringilla turpis congue vitae. Phasellus aliquam nisi ut dolor consectetur condimentum. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                            <p>Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <button class="faq-pergunta">
                            Nullam quis risus eget urna mollis ornare?
                            <span class="faq-icone">+</span>
                        </button>
                        <div class="faq-resposta">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-categoria">
                    <h2><span>💳</span> Pagamentos e Matrículas</h2>
                    
                    <div class="faq-item">
                        <button class="faq-pergunta">
                            Integer posuere erat a ante venenatis?
                            <span class="faq-icone">+</span>
                        </button>
                        <div class="faq-resposta">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Nullam in dui mauris</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <button class="faq-pergunta">
                            Aenean eu leo quam pellentesque?
                            <span class="faq-icone">+</span>
                        </button>
                        <div class="faq-resposta">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-categoria">
                    <h2><span>❓</span> Dúvidas Gerais</h2>
                    
                    <div class="faq-item">
                        <button class="faq-pergunta">
                            Curabitur blandit tempus porttitor?
                            <span class="faq-icone">+</span>
                        </button>
                        <div class="faq-resposta">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <button class="faq-pergunta">
                            Nullam id dolor id nibh ultricies?
                            <span class="faq-icone">+</span>
                        </button>
                        <div class="faq-resposta">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <button class="faq-pergunta">
                            Vivamus sagittis lacus vel augue?
                            <span class="faq-icone">+</span>
                        </button>
                        <div class="faq-resposta">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-cta">
                <p>Não encontrou o que procurava? Entre em contato conosco!</p>
                <a href="contato.php" class="btn">Fale Conosco</a>
            </div>
        </div>
    </section>
</main>
<script>
// FAQ Accordion
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const pergunta = item.querySelector('.faq-pergunta');
        
        pergunta.addEventListener('click', () => {
            // Fecha todos os itens
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Abre/fecha o item clicado
            item.classList.toggle('active');
        });
    });
});
</script>
<?php
require_once 'includes/footer.php';
?>