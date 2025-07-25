<?php require_once('cabecalho.php'); ?>
<div id="modalSlideCadastro" class="fixed inset-0 bg-black/50 hidden justify-center items-center z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative">
    <button onclick="toggleModal('modalSlideCadastro')" class="absolute top-2 right-3 text-gray-600 text-xl">&times;</button>
    <h2 class="text-xl font-semibold mb-4">Cadastrar Slide</h2>
    <form id="formSlideCadastro" class="space-y-4">
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
      <div>
        <label class="block text-sm font-medium">Ordem</label>
        <input type="number" name="ordem" class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div>
        <label class="block text-sm font-medium">Caminho da Imagem</label>
        <input type="file" name="imagem_path" class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div class="flex items-center space-x-2">
        <input type="checkbox" name="ativo" id="ativo">
        <label for="ativo" class="text-sm">Ativo</label>
      </div>
      <div class="text-right">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Salvar</button>
      </div>
    </form>
  </div>
</div>

<div id="modalSlideEdicao" class="fixed inset-0 bg-black/50 hidden justify-center items-center z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative">
    <button onclick="toggleModal('modalSlideEdicao')" class="absolute top-2 right-3 text-gray-600 text-xl">&times;</button>
    <h2 class="text-xl font-semibold mb-4">Editar Slide</h2>
    <form id="formSlideEdicao" class="space-y-4">
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
      <div>
        <label class="block text-sm font-medium">Ordem</label>
        <input type="number" name="ordem" class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div>
        <label class="block text-sm font-medium">Caminho da Imagem</label>
        <input type="file" name="imagem_path" class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div class="flex items-center space-x-2">
        <input type="checkbox" name="ativo" id="ativo_edicao">
        <label for="ativo_edicao" class="text-sm">Ativo</label>
      </div>
      <div class="text-right">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Salvar</button>
      </div>
    </form>
  </div>
</div>

<div id="modalSlideVisualizacao" class="fixed inset-0 bg-black/50 hidden justify-center items-center z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative">
    <button onclick="toggleModal('modalSlideVisualizacao')" class="absolute top-2 right-3 text-gray-600 text-xl">&times;</button>
    <h2 class="text-xl font-semibold mb-4">Visualizar Slide</h2>
    <div id="detalhesSlide" class="space-y-2"></div>
  </div>
</div>

<div class="p-6">
  <div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Slides</h1>
    <button onclick="toggleModal('modalSlideCadastro')" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Novo Slide</button>
  </div>
  <input type="text" id="buscaSlide" placeholder="Buscar por título" class="mb-4 w-full border border-gray-300 rounded px-3 py-2">
  <div id="listaSlides"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="slideshow.js"></script>
<?php require_once('rodape.php'); ?>