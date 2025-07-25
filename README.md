📚 Sistema de Administração de Cursos

Este painel permite o gerenciamento completo de cursos via interface web responsiva e interativa, utilizando PHP puro, JavaScript e AJAX.
⚙️ Funcionalidades do Admin

    ✅ Listagem de cursos

    🔍 Busca por título (em tempo real)

    ➕ Cadastro de cursos via modal

    ✏️ Edição de cursos via modal

    👁️ Visualização detalhada dos cursos

    ❌ Exclusão de cursos com confirmação

    🔗 Campo opcional para link de botão (ex: página de inscrição)

🧱 Estrutura da Tabela de Cursos

A tabela cursos no banco de dados contém os seguintes campos:
Campo	Tipo	Descrição
id	INT (PK)	Identificador único do curso
titulo	VARCHAR	Título do curso
descricao	TEXT	Descrição do curso
link_botao	VARCHAR	Link para o botão (opcional)
📁 Estrutura de Arquivos

/admin
  ├── cursos.php               # Página principal do admin
  ├── CursoController.php      # Backend (AJAX)
  └── js/
      └── cursos.js            # Scripts JavaScript

🚀 Tecnologias Utilizadas

    PHP (sem frameworks)

    MySQL

    JavaScript puro (AJAX)

    HTML5 + Tailwind CSS

📦 Como Rodar Localmente

    Clone o projeto

    Configure o banco com a estrutura da tabela cursos

    Coloque os arquivos em seu servidor local (ex: XAMPP)

    Acesse /admin/cursos.php via navegador