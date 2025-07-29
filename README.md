Desafio Revvo - Plataforma de Cursos Online

![LEO Logo]

Plataforma de cursos online desenvolvida como parte do processo seletivo para a Revvo.
📌 Visão Geral

Este projeto consiste em uma plataforma de cursos online com:

    Páginas responsivas (home, cursos, sobre, contato, faq e política de privacidade)

    Sistema de CRUD para cursos e slideshow

    Modal de primeiro acesso

    Painel administrativo completo

✨ Funcionalidades

    Frontend:

        Layout responsivo com Tailwind CSS

        Componentes reutilizáveis (header, footer, modal)

        Slider hero com Swiper.js

        Cards de cursos dinâmicos

    Backend:

        CRUD completo para cursos

        CRUD para slideshow (banner principal)

        CRUD para páginas estáticas

        Autenticação básica

        Modal de primeiro acesso com cookie

🛠 Tecnologias Utilizadas

    Frontend:

        HTML5 semântico

        Tailwind CSS

        JavaScript vanilla

        Swiper.js (slider)

    Backend:

        PHP 7.4+ (sem frameworks)

        MySQL/MariaDB

        PDO para conexão com banco

    Ferramentas:

        Git para controle de versão

        Gulp para automatização

        Composer (para possíveis dependências)

🚀 Como Executar o Projeto
Pré-requisitos

    PHP 7.4+

    MySQL/MariaDB

    Node.js (para Gulp)

    Composer (opcional)

Instalação

    Clone o repositório:
    bash

git clone https://github.com/henriquemarcandier/desafio_revvo.git
cd desafio_revvo

Configure o banco de dados:
bash

mysql -u username -p database_name < revvo_desafio.sql

Configure as credenciais em includes/db.php

Instale as dependências frontend:
bash

npm install

Inicie o servidor de desenvolvimento:
bash

# Usando o servidor embutido do PHP
php -S localhost:8000

Acesse no navegador:
text

    http://localhost:8000

🌐 Ambiente de Testes Online

O projeto está disponível para testes em:
🔹 URL de Testes: https://desafiorevvo.bhcommerce.com.br

Credenciais do Painel Admin:

    URL: /admin

    Usuário: admin@revvo.com

    Senha: admin123

🗂 Estrutura de Arquivos
text

desafio_revvo/
├── assets/
│   ├── css/          # Estilos compilados
│   ├── js/           # JavaScript
│   └── images/       # Imagens do site
├── includes/
│   ├── db.php        # Conexão com banco
│   ├── header.php    # Cabeçalho
│   ├── footer.php    # Rodapé
│   └── modal.php     # Modal de primeiro acesso
├── admin/
│   ├── cursos/       # CRUD de cursos
│   ├── slideshow/    # CRUD do slideshow
│   └── paginas/      # CRUD de páginas estáticas
├── index.php         # Página inicial
├── cursos.php        # Listagem de cursos
├── sobre.php         # Página institucional
├── contato.php       # Formulário de contato
├── faq.php           # Perguntas frequentes
├── privacidade.php   # Política de privacidade
├── gulpfile.js       # Config do Gulp
├── database.sql      # Estrutura do banco
└── README.md         # Este arquivo

🔒 Segurança

    Todas as páginas administrativas exigem autenticação

    Proteção básica contra SQL injection

    Senhas armazenadas com hash (em ambiente de produção)

📝 Licença

Este projeto foi desenvolvido como parte de um processo seletivo e não possui licença aberta.

✉️ Contato

Desenvolvedor: Henrique Marcandier

Email: henrique.marcandier@gmail.com

LinkedIn: https://www.linkedin.com/in/henrique-marcandier-25492518/

GitHub: https://github.com/henriquemarcandier/

Principais Atualizações:

    Adicionada seção "Ambiente de Testes Online" com link para o subdomínio de testes

    Atualizada estrutura de arquivos com as novas páginas criadas

    Incluído CRUD de páginas estáticas na lista de funcionalidades

    Melhorada organização das seções

    Adicionadas informações de segurança básica

    Atualizadas as credenciais de acesso para o ambiente de testes