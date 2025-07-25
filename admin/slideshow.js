function carregarSlides(filtro = '') {
  $.get('SlideshowController.php?action=listar', { filtro }, function (res) {
      let html = '<table class="w-full border"><thead><tr><th class="border p-2">Título</th><th class="border p-2">Ações</th></tr></thead><tbody>';
      if (res.data.length === 0) {
        html += '<tr><td colspan="2" class="p-2 text-center">Nenhum slide encontrado</td></tr>';
      } else {
        res.data.forEach(slide => {
          html += `<tr>
            <td class="border p-2">${slide.titulo}</td>
            <td class="border p-2">
              <button onclick="visualizarSlide(${slide.id})" class="bg-gray-300 px-2 rounded mr-2">Visualizar</button>
              <button onclick="editarSlide(${slide.id})" class="bg-blue-500 text-white px-2 rounded mr-2">Editar</button>
              <button onclick="excluirSlide(${slide.id})" class="bg-red-500 text-white px-2 rounded">Excluir</button>
            </td>
          </tr>`;
        });
      }
      html += '</tbody></table>';
      $('#listaSlides').html(html);
  });
}

function visualizarSlide(id) {
  $.get('SlideshowController.php?action=buscar&id=' + id, function (res) {
    if (res.success) {
      var html = `<p><strong>Título:</strong> ${res.data.titulo}</p><p><strong>Descrição:</strong><br>${res.data.descricao}</p><p><strong>Link do Botão:</strong> ${res.data.link_botao}</p><p><strong>Ordem:</strong> ${res.data.ordem}</p><p><strong>Status:</strong> `;
      if (res.data.ativo == 1){
            html += "ATIVO";
      }
      else{
        html += "Inativo";
      }
      html += `<p>`;
      $('#detalhesSlide').html(html);
      toggleModal('modalSlideVisualizacao');
    } else {
      alert('Slide não encontrado');
    }
  });
}

function editarSlide(id) {
  $.get('SlideshowController.php?action=buscar&id=' + id, function (res) {
    if (res.success) {
      const form = $('#formSlideEdicao')[0];
      form.id.value = res.data.id;
      form.titulo.value = res.data.titulo;
      form.descricao.value = res.data.descricao;
      form.link_botao.value = res.data.link_botao;
      form.ordem.value = res.data.ordem;
      form.ativo.checked = res.data.ativo;
      toggleModal('modalSlideEdicao');
    } else {
      alert('Slide não encontrado');
    }
  });
}

function excluirSlide(id) {
  if (!confirm('Deseja excluir este slide?')) return;
  $.post('SlideshowController.php?action=excluir', { id }, function (res) {
    if (res.success) {
      alert('Slide excluído');
      carregarSlides($('#buscaSlide').val());
    } else {
      alert('Erro ao excluir slide');
    }
  });
}

$(function () {
  carregarSlides();

  $('#buscaSlide').on('input', function () {
    carregarSlides($(this).val());
  });

  $('#formSlideCadastro').submit(function (e) {
    e.preventDefault();
    $.post('SlideshowController.php?action=criar', $(this).serialize(), function (res) {
      if (res.success) {
        alert('Slide cadastrado com sucesso');
        toggleModal('modalSlideCadastro');
        $('#formSlideCadastro')[0].reset();
        carregarSlides($('#buscaSlide').val());
      } else {
        alert('Erro ao cadastrar slide');
      }
    });
  });

  $('#formSlideEdicao').submit(function (e) {
    e.preventDefault();
    $.post('SlideshowController.php?action=editar', $(this).serialize(), function (res) {
      if (res.success) {
        alert('Slide atualizado com sucesso');
        toggleModal('modalSlideEdicao');
        carregarSlides($('#buscaSlide').val());
      } else {
        alert('Erro ao atualizar slide');
      }
    });
  });
});
