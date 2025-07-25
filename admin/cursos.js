document.addEventListener('DOMContentLoaded', function () {
  listarCursos();

  document.getElementById('buscaCurso').addEventListener('input', listarCursos);

  document.getElementById('formCursoCadastro').addEventListener('submit', function (e) {
    e.preventDefault();
    salvarCurso(this);
  });

  document.getElementById('formCursoEdicao').addEventListener('submit', function (e) {
    e.preventDefault();
    salvarCurso(this);
  });
});

function listarCursos() {
  const busca = document.getElementById('buscaCurso').value;

  fetch(`CursoController.php?acao=listar&busca=${encodeURIComponent(busca)}`)
    .then(res => res.json())
    .then(dados => {
      const lista = document.getElementById('listaCursos');
      lista.innerHTML = '';

      if (dados.length === 0) {
        lista.innerHTML = '<p class="text-gray-600">Nenhum curso encontrado.</p>';
        return;
      }

      dados.forEach(curso => {
        const div = document.createElement('div');
        div.className = 'bg-white border p-4 mb-2 rounded flex justify-between items-center';

        div.innerHTML = `
          <div>
            <h3 class="font-semibold text-lg">${curso.titulo}</h3>
            <p class="text-sm text-gray-700">${curso.descricao}</p>
            ${curso.link_botao ? `<a href="${curso.link_botao}" target="_blank" class="text-blue-600 underline text-sm">Ver Link</a>` : ''}
          </div>
          <div class="flex gap-2">
            <button onclick="verCurso(${curso.id})" class="text-blue-600 hover:underline text-sm">Visualizar</button>
            <button onclick="editarCurso(${curso.id})" class="text-yellow-600 hover:underline text-sm">Editar</button>
            <button onclick="excluirCurso(${curso.id})" class="text-red-600 hover:underline text-sm">Excluir</button>
          </div>
        `;

        lista.appendChild(div);
      });
    });
}

function salvarCurso(form) {
  const formData = new FormData(form);

  fetch('CursoController.php?acao=salvar', {
    method: 'POST',
    body: formData
  })
    .then(res => res.json())
    .then(resposta => {
      if (resposta.status === 'sucesso') {
        form.reset();
        toggleModal(form.id === 'formCursoCadastro' ? 'modalCursoCadastro' : 'modalCursoEdicao');
        listarCursos();
      } else {
        alert('Erro ao salvar curso');
      }
    });
}

function editarCurso(id) {
  fetch(`CursoController.php?acao=buscar&id=${id}`)
    .then(res => res.json())
    .then(curso => {
      const form = document.getElementById('formCursoEdicao');
      form.id.value = curso.id;
      form.titulo.value = curso.titulo;
      form.descricao.value = curso.descricao;
      form.link_botao.value = curso.link_botao;
      toggleModal('modalCursoEdicao');
    });
}

function verCurso(id) {
  fetch(`CursoController.php?acao=buscar&id=${id}`)
    .then(res => res.json())
    .then(curso => {
      const detalhes = document.getElementById('detalhesCurso');
      detalhes.innerHTML = `
        <p><strong>ID:</strong> ${curso.id}</p>
        <p><strong>Título:</strong> ${curso.titulo}</p>
        <p><strong>Descrição:</strong> ${curso.descricao}</p>
        <p><strong>Link:</strong> <a href="${curso.link_botao}" target="_blank" class="text-blue-600 underline">${curso.link_botao}</a></p>
      `;
      toggleModal('modalCursoVisualizacao');
    });
}

function excluirCurso(id) {
  if (!confirm('Tem certeza que deseja excluir este curso?')) return;

  const formData = new FormData();
  formData.append('id', id);

  fetch('CursoController.php?acao=excluir', {
    method: 'POST',
    body: formData
  })
    .then(res => res.json())
    .then(resp => {
      if (resp.status === 'excluido') {
        listarCursos();
      } else {
        alert('Erro ao excluir curso');
      }
    });
}

function toggleModal(id) {
  document.getElementById(id).classList.toggle('hidden');
}