<?php
require_once 'includes/db.php';
require_once 'includes/header.php';
?>

<main class="contato-page">
    <section class="banner-contato">
        <div class="container">
            <h1>Fale Conosco</h1>
            <p class="subtitulo">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
    </section>

    <section class="contato-content">
        <div class="container">
            <div class="contato-grid">
                <div class="contato-form">
                    <h2>Envie sua Mensagem</h2>
                    <form action="processa-contato.php" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="tel" id="telefone" name="telefone">
                        </div>
                        <div class="form-group">
                            <label for="assunto">Assunto</label>
                            <select id="assunto" name="assunto" required>
                                <option value="">Selecione...</option>
                                <option value="duvida">Dúvida sobre cursos</option>
                                <option value="matricula">Matrícula</option>
                                <option value="sugestao">Sugestão</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn">Enviar Mensagem</button>
                    </form>
                </div>

                <div class="contato-info">
                    <h2>Nossos Contatos</h2>
                    <div class="info-item">
                        <div class="info-icone">📍</div>
                        <div class="info-texto">
                            <h3>Endereço</h3>
                            <p>Lorem ipsum dolor sit amet<br>Consectetur adipiscing elit, 123<br>Rio de Janeiro - RJ</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icone">📞</div>
                        <div class="info-texto">
                            <h3>Telefone</h3>
                            <p>(21) 97765-3434<br>(21) 2555-6789</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icone">✉️</div>
                        <div class="info-texto">
                            <h3>E-mail</h3>
                            <p>contato@leocursos.com<br>suporte@leocursos.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icone">⏱️</div>
                        <div class="info-texto">
                            <h3>Horário de Atendimento</h3>
                            <p>Segunda a Sexta: 9h às 18h<br>Sábado: 9h às 13h</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contato-mapa">
        <div class="container">
            <h2>Onde Estamos</h2>
            <div class="mapa-wrapper">
                <!-- Mapa do Google Maps incorporado -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.328662060345!2d-43.1794349246873!3d-22.9015395378807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5e6a1a8f7d%3A0x3a6b9f1a2a3b3b3b!2sPra%C3%A7a%20Mau%C3%A1%2C%201%20-%20Centro%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020091-070!5e0!3m2!1spt-BR!2sbr!4v1620000000000!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?>