# Desafio Revvo - Plataforma de Cursos Online

![LEO Logo]

Plataforma de cursos online desenvolvida como parte do processo seletivo para a Revvo.

## 📌 Visão Geral

Este projeto consiste em uma plataforma de cursos online com:

- Páginas responsivas (home, cursos, sobre, contato, faq e política de privacidade)
- Sistema de CRUD para cursos e slideshow
- Modal de primeiro acesso
- Painel administrativo básico

## ✨ Funcionalidades

- **Frontend:**
  - Layout responsivo com Tailwind CSS
  - Componentes reutilizáveis (header, footer, modal)
  - Slider hero com Swiper.js
  - Cards de cursos dinâmicos

- **Backend:**
  - CRUD completo para cursos
  - CRUD para slideshow (banner principal)
  - Autenticação básica
  - Modal de primeiro acesso com cookie

## 🛠 Tecnologias Utilizadas

- **Frontend:**
  - HTML5 semântico
  - Tailwind CSS
  - JavaScript vanilla
  - Swiper.js (slider)

- **Backend:**
  - PHP 7.4+ (sem frameworks)
  - MySQL/MariaDB
  - PDO para conexão com banco

- **Ferramentas:**
  - Git para controle de versão
  - Gulp para automatização
  - Composer (para possíveis dependências)

## 🚀 Como Executar o Projeto

### Pré-requisitos

- PHP 7.4+
- MySQL/MariaDB
- Node.js (para Gulp)
- Composer (opcional)

### Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/henriquemarcandier/desafio_revvo.git
   cd desafio_revvo

   Configure o banco de dados:

    Importe o arquivo desafio_revvo.sql para seu MySQL

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
│   └── slideshow/    # CRUD do slideshow
├── index.php         # Página inicial
├── gulpfile.js       # Config do Gulp
├── database.sql      # Estrutura do banco
└── README.md         # Este arquivo

🔒 Credenciais de Acesso

Painel Administrativo:

    URL: /admin

    Usuário: admin@revvo.com

    Senha: admin123

📝 Licença

Este projeto foi desenvolvido como parte de um processo seletivo e não possui licença aberta.
✉️ Contato

Desenvolvedor: [Henrique Marcandier]
Email: [henrique.marcandier@gmail.com](henrique.marcandier@gmail.com)
LinkedIn: [[URL do LinkedIn](https://www.linkedin.com/in/henrique-marcandier-25492518/)]
GitHub: [[URL do GitHub](https://github.com/henriquemarcandier/)]
text


### Key Features:

1. **Visão Geral Clara**:
   - Explica o propósito do projeto
   - Mostra as principais funcionalidades

2. **Tecnologias Organizadas**:
   - Separa frontend, backend e ferramentas
   - Lista versões importantes

3. **Instruções Detalhadas**:
   - Passo a passo para configurar
   - Inclui comandos prontos para copiar

4. **Estrutura Visual**:
   - Diagrama de pastas fácil de entender
   - Ícones para melhorar a leitura

5. **Informações Úteis**:
   - Credenciais de teste
   - Dados de contato

6. **Formatação Consistente**:
   - Usa markdown corretamente
   - Seções bem organizadas

Este README fornece todas as informações necessárias para:
- Entender o projeto
- Configurar o ambiente
- Navegar na estrutura de arquivos
- Testar as funcionalidades
- Entrar em contato com o desenvolvedor