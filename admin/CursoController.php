<?php

require_once 'conexao.php';

$acao = $_GET['acao'] ?? '';

switch ($acao) {
    case 'listar':
        $termo = $_GET['busca'] ?? '';
        $sql = "SELECT * FROM cursos WHERE titulo LIKE ?";
        $stmt = $con->prepare($sql);
        $busca = '%' . $termo . '%';
        $stmt->bind_param("s", $busca);
        $stmt->execute();
        $result = $stmt->get_result();
        $cursos = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($cursos);
        break;

    case 'salvar':
        $id = $_POST['id'] ?? '';
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $link_botao = $_POST['link_botao'];

        if ($id == '') {
            $sql = "INSERT INTO cursos (titulo, descricao, link_botao) VALUES (?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("sss", $titulo, $descricao, $link_botao);
        } else {
            $sql = "UPDATE cursos SET titulo = ?, descricao = ?, link_botao = ? WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("sssi", $titulo, $descricao, $link_botao, $id);
        }

        if ($stmt->execute()) {
            echo json_encode(['status' => 'sucesso']);
        } else {
            echo json_encode(['status' => 'erro']);
        }
        break;

    case 'buscar':
        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM cursos WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $curso = $resultado->fetch_assoc();
        echo json_encode($curso);
        break;

    case 'excluir':
        $id = $_POST['id'] ?? '';
        $sql = "DELETE FROM cursos WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        echo json_encode(['status' => 'excluido']);
        break;

    default:
        echo json_encode(['status' => 'ação inválida']);
}
