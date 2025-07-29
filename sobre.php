<?php
require_once 'includes/db.php';
require_once 'includes/header.php';
?>

<main class="sobre-page">
    <section class="banner-sobre">
        <div class="container">
            <h1>Sobre a LEO</h1>
            <p class="subtitulo">Conheça nossa história, missão e valores</p>
        </div>
    </section>

    <section class="nossa-historia">
        <div class="container">
            <div class="historia-content">
                <div class="historia-texto">
                    <h2>Nossa História</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
                    <p>Vestibulum auctor dapibus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt lorem enim, eget fringilla turpis congue vitae. Phasellus aliquam nisi ut dolor consectetur condimentum. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                </div>
                <div class="historia-imagem">
                    <img src="assets/images/sobre-historia.jpg" alt="Fundação da LEO">
                </div>
            </div>
        </div>
    </section>

    <section class="missao-valores">
        <div class="container">
            <div class="missao">
                <h2>Nossa Missão</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p>Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>

            <div class="valores">
                <h2>Nossos Valores</h2>
                <div class="valores-grid">
                    <div class="valor-item">
                        <div class="valor-icone">✓</div>
                        <h3>Excelência</h3>
                        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam.</p>
                    </div>
                    <div class="valor-item">
                        <div class="valor-icone">✓</div>
                        <h3>Inovação</h3>
                        <p>Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus.</p>
                    </div>
                    <div class="valor-item">
                        <div class="valor-icone">✓</div>
                        <h3>Integridade</h3>
                        <p>Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="equipe">
        <div class="container">
            <h2>Conheça Nossa Equipe</h2>
            <p class="equipe-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
            
            <div class="equipe-grid">
                <div class="membro">
                    <div class="membro-foto"></div>
                    <h3>Carlos Silva</h3>
                    <p class="cargo">Fundador & CEO</p>
                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
                </div>
                <div class="membro">
                    <div class="membro-foto"></div>
                    <h3>Ana Oliveira</h3>
                    <p class="cargo">Diretora Pedagógica</p>
                    <p class="bio">Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus.</p>
                </div>
                <div class="membro">
                    <div class="membro-foto"></div>
                    <h3>Roberto Santos</h3>
                    <p class="cargo">Coordenador de Cursos</p>
                    <p class="bio">Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-sobre">
        <div class="container">
            <h2>Pronto para começar?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
            <a href="cursos.php" class="btn">Conheça Nossos Cursos</a>
        </div>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?>