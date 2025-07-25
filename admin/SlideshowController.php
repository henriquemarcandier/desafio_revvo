<?php
require_once('conexao.php');
header('Content-Type: application/json');

$action = $_GET['action'] ?? '';

switch ($action) {
  case 'listar':
    $filtro = $_GET['filtro'] ?? '';
    $sql = "SELECT * FROM slideshow WHERE titulo LIKE ? ORDER BY ordem, id DESC";
    $stmt = $conn->prepare($sql);
    $likeFiltro = "%$filtro%";
    $stmt->bind_param('s', $likeFiltro);
    $stmt->execute();
    $result = $stmt->get_result();
    $dados = [];
    while ($row = $result->fetch_assoc()) {
      $dados[] = $row;
    }
    echo json_encode(['success' => true, 'data' => $dados]);
    break;

  case 'criar':
    $titulo = $_POST['titulo'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $link_botao = $_POST['link_botao'] ?? '';
    $ordem = intval($_POST['ordem'] ?? 0);
    $ativo = isset($_POST['ativo']) ? 1 : 0;
    $imagem_path = $_POST['imagem_path'] ?? '';
    $stmt = $conn->prepare("INSERT INTO slideshow (titulo, descricao, link_botao, ordem, ativo, imagem_path) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssiss', $titulo, $descricao, $linkBotao, $ordem, $ativo, $imagem_path);
    $result = $stmt->execute();
    echo json_encode(['success' => $result]);
    break;

  case 'buscar':
    $id = intval($_GET['id'] ?? 0);
    $stmt = $conn->prepare("SELECT * FROM slideshow WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $res = $stmt->get_result()->fetch_assoc();
    echo json_encode(['success' => $res ? true : false, 'data' => $res]);
    break;

  case 'editar':
    $id = intval($_POST['id'] ?? 0);
    $titulo = $_POST['titulo'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $link_botao = $_POST['link_botao'] ?? '';
    $ordem = intval($_POST['ordem'] ?? 0);
    $ativo = isset($_POST['ativo']) ? 1 : 0;
    $imagem_path = $_POST['imagem_path'] ?? '';
    $stmt = $conn->prepare("UPDATE slideshow SET titulo = ?, descricao = ?, link_botao = ?, ordem = ?, ativo = ?, imagem_path = ? WHERE id = ?");
    $stmt->bind_param('sssissi', $titulo, $descricao, $link_botao, $ordem, $ativo, $imagem_path, $id);
    $res = $stmt->execute();
    echo json_encode(['success' => $res]);
    break;

  case 'excluir':
    $id = intval($_POST['id'] ?? 0);
    $stmt = $conn->prepare("DELETE FROM slideshow WHERE id = ?");
    $stmt->bind_param('i', $id);
    $res = $stmt->execute();
    echo json_encode(['success' => $res]);
    break;

  default:
    echo json_encode(['success' => false, 'msg' => 'Ação inválida']);
    break;
}