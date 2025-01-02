<?php
session_start();
include 'conexao.php'; // Inclui o arquivo de conexão ao banco de dados

// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cliente_id = $_POST['cliente_id'];
    $servico = $_POST['servico'];

    // Validação dos dados
    if (empty($cliente_id) || empty($servico)) {
        echo json_encode(['success' => false, 'message' => 'Dados incompletos']);
        exit;
    }

    // Verifica se o cliente já possui um pedido pendente ou em processo
    $sql = "SELECT status FROM pedidos WHERE cliente_id = ? ORDER BY data_solicitacao DESC LIMIT 1";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $cliente_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $status_atual = $row['status'];

        if ($status_atual == 'Pendente') {
            echo json_encode(['success' => false, 'message' => 'Você já possui um serviço pendente. Aguarde até que o status seja atualizado para "em processo" antes de solicitar um novo serviço.']);
            $stmt->close();
            $conexao->close();
            exit;
        }
    }

    // Insere o novo pedido na tabela "pedidos"
    $sql = "INSERT INTO pedidos (cliente_id, servico) VALUES (?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("is", $cliente_id, $servico);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Pedido realizado com sucesso!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao registrar pedido']);
    }

    $stmt->close();
    $conexao->close();
}
