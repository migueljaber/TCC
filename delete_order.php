<?php
include_once("./conexao.php");

// Verifica se o pedido ID foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $pedido_id = intval($_POST['id']);

    // Prepara a query para excluir o pedido pelo ID
    $sql = "DELETE FROM pedidos WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $pedido_id);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Pedido excluído com sucesso!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao excluir o pedido.']);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'message' => 'ID do pedido não fornecido.']);
}
$conexao->close();
