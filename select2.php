<?php
session_start();
include_once("./conexao.php");

// Verifica se o usuário está logado
if (!isset($_SESSION['id']) || $_SESSION['nivel'] !== 'adm') {
    header('Location: login.php');
    exit();
}

// Aplicando filtros na consulta SQL
$searchQuery = "SELECT pedidos.id, pedidos.servico, pedidos.status, pedidos.data_solicitacao, 
                       usuarios.nome as cliente, usuarios.email as cliente_email 
                FROM pedidos 
                JOIN usuarios ON pedidos.cliente_id = usuarios.id";

$filters = [];
if (!empty($_GET['search_cliente'])) {
    $cliente = $_GET['search_cliente'];
    // Filtra por nome do cliente ou ID do pedido
    $filters[] = "(usuarios.nome LIKE '%$cliente%' OR pedidos.id LIKE '%$cliente%')";
}
if (!empty($_GET['status']) && $_GET['status'] !== 'Todos os Status') {
    $status = $_GET['status'];
    $filters[] = "pedidos.status = '$status'";
}
if (!empty($_GET['data'])) {
    $data = $_GET['data'];
    $filters[] = "DATE(pedidos.data_solicitacao) >= '$data'";
}

if (count($filters) > 0) {
    $searchQuery .= " WHERE " . implode(" AND ", $filters);
}
$searchQuery .= " ORDER BY pedidos.id ASC";

$result = $conexao->query($searchQuery);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Administração de Pedidos</title>
    <style>
        body {
            background-image: url(./img/fundo.png);
            color: white;
            text-align: center;
        }
        .table-bg {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }
        .status-dropdown {
            background-color: #2c2c2c;
            color: white;
            border: 1px solid #009ed3;
            border-radius: 5px;
            padding: 5px;
        }
        .status-dropdown option {
            background-color: #2c2c2c;
            color: white;
        }
        /* Estilo para o botão de voltar */
        .btn-voltar {
            position: absolute;
            top: 65px;
            left: 20px;
            display: flex;
            align-items: center;
            background: #02907d;
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: background 0.3s, transform 0.2s;
        }
        .btn-voltar:hover {
            background: #03453d;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #2c2c2c;">
        <div class="container-fluid">
            <a class="navbar-brand" href="select2.php" style="color: #009ed3;">Administração de Pedidos</a>
        </div>
        
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    
    <a href="./select.php" class="btn-voltar">
        <i class='bx bx-left-arrow-alt'></i> Voltar
    </a>

    <h1>PEDIDOS</h1>
    
    <!-- Filtros de busca -->
    <form method="GET" action="select2.php" class="d-flex justify-content-center mt-4 mb-4">
        <input type="text" name="search_cliente" class="form-control w-25 me-2" placeholder="Buscar Cliente ou ID do Pedido" value="<?php echo isset($_GET['search_cliente']) ? $_GET['search_cliente'] : ''; ?>">
        <select name="status" class="form-select w-25 me-2">
            <option>Todos os Status</option>
            <option value="Pendente" <?php echo (isset($_GET['status']) && $_GET['status'] == 'Pendente') ? 'selected' : ''; ?>>Pendente</option>
            <option value="Em Processo" <?php echo (isset($_GET['status']) && $_GET['status'] == 'Em Processo') ? 'selected' : ''; ?>>Em Processo</option>
            <option value="Concluído" <?php echo (isset($_GET['status']) && $_GET['status'] == 'Concluído') ? 'selected' : ''; ?>>Concluído</option>
        </select>
        <input type="date" name="data" class="form-control w-25 me-2" value="<?php echo isset($_GET['data']) ? $_GET['data'] : ''; ?>">
        <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>
    
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Email</th>
                    <th scope="col">Serviço</th>
                    <th scope="col">Status</th>
                    <th scope="col">Data Solicitação</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($pedido_data = mysqli_fetch_assoc($result)) {
                    echo "<tr data-id='".$pedido_data['id']."'>";
                    echo "<td>".$pedido_data['id']."</td>";
                    echo "<td>".$pedido_data['cliente']."</td>";
                    echo "<td>".$pedido_data['cliente_email']."</td>"; // Exibe o email do cliente
                    echo "<td>".$pedido_data['servico']."</td>";
                    echo "<td>";
                    echo "<select class='status-dropdown' onchange=\"updateStatus(".$pedido_data['id'].", this.value)\">";
                    echo "<option value='Pendente' ".($pedido_data['status'] == 'Pendente' ? "selected" : "").">Pendente</option>";
                    echo "<option value='Em Processo' ".($pedido_data['status'] == 'Em Processo' ? "selected" : "").">Em Processo</option>";
                    echo "<option value='Concluído' ".($pedido_data['status'] == 'Concluído' ? "selected" : "").">Concluído</option>";
                    echo "</select>";
                    echo "</td>";
                    echo "<td>".date("d/m/Y", strtotime($pedido_data['data_solicitacao']))."</td>";
                    echo "<td>
                        <button class='btn btn-sm btn-danger' onclick='deleteOrder(".$pedido_data['id'].")'>
                            Excluir
                        </button>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    async function updateStatus(pedidoId, newStatus) {
        try {
            const response = await fetch('update_status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `id=${pedidoId}&status=${newStatus}`
            });
            const data = await response.json();
            if (data.success) {
                alert('Status atualizado com sucesso!');
            } else {
                alert('Erro ao atualizar status: ' + data.message);
            }
        } catch (error) {
            console.error('Erro:', error);
        }
    }

    async function deleteOrder(pedidoId) {
        if (!confirm('Tem certeza de que deseja excluir este pedido?')) return;
        
        try {
            const response = await fetch('delete_order.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `id=${pedidoId}`
            });
            const data = await response.json();
            if (data.success) {
                document.querySelector(`tr[data-id="${pedidoId}"]`).remove();
                alert('Pedido excluído com sucesso!');
            } else {
                alert('Erro ao excluir pedido: ' + data.message);
            }
        } catch (error) {
            console.error('Erro:', error);
        }
    }
</script>
</html>
