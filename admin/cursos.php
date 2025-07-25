<?php require_once('cabecalho.php'); ?>
<div id="modalCursoCadastro" class="fixed inset-0 bg-black/50 hidden justify-center items-center z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative">
    <button onclick="toggleModal('modalCursoCadastro')" class="absolute top-2 right-3 text-gray-600 text-xl">&times;</button>
    <h2 class="text-xl font-semibold mb-4">Cadastrar Curso</h2>
    <form id="formCursoCadastro" class="space-y-4">
      <input type="hidden" name="id">
      <div>
        <label class="block text-sm font-medium">Título</label>
        <input type="text" name="titulo" required class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div>
        <label class="block text-sm font-medium">Descrição</label>
        <textarea name="descricao" required class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
      </div>
      <div>
        <label class="block text-sm font-medium">Link do Botão</label>
        <input type="text" name="link_botao" class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div class="text-right">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Salvar</button>
      </div>
    </form>
  </div>
</div>

<div id="modalCursoEdicao" class="fixed inset-0 bg-black/50 hidden justify-center items-center z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative">
    <button onclick="toggleModal('modalCursoEdicao')" class="absolute top-2 right-3 text-gray-600 text-xl">&times;</button>
    <h2 class="text-xl font-semibold mb-4">Editar Curso</h2>
    <form id="formCursoEdicao" class="space-y-4">
      <input type="hidden" name="id">
      <div>
        <label class="block text-sm font-medium">Título</label>
        <input type="text" name="titulo" required class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div>
        <label class="block text-sm font-medium">Descrição</label>
        <textarea name="descricao" required class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
      </div>
      <div>
        <label class="block text-sm font-medium">Link do Botão</label>
        <input type="text" name="link_botao" class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div class="text-right">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Salvar</button>
      </div>
    </form>
  </div>
</div>

<div id="modalCursoVisualizacao" class="fixed inset-0 bg-black/50 hidden justify-center items-center z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative">
    <button onclick="toggleModal('modalCursoVisualizacao')" class="absolute top-2 right-3 text-gray-600 text-xl">&times;</button>
    <h2 class="text-xl font-semibold mb-4">Visualizar Curso</h2>
    <div id="detalhesCurso" class="space-y-2"></div>
  </div>
</div>

<div class="p-6">
  <div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Cursos</h1>
    <button onclick="toggleModal('modalCursoCadastro')" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Novo Curso</button>
  </div>
  <div class="mb-4">
    <input type="text" id="buscaCurso" placeholder="Buscar por título" class="w-full border border-gray-300 rounded px-3 py-2">
  </div>
  <div id="listaCursos"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="cursos.js"></script>
<?php require_once('rodape.php'); ?>