<?php
// Verifica se foi fornecido um ID válido na URL
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Inclua o arquivo de configuração do banco de dados
    require_once 'pdoconfig.php';

    // Prepare a consulta para excluir o evento com base no ID fornecido
    $stmt = $conn->prepare("DELETE FROM eventos WHERE id = ?");
    $stmt->execute([$_GET['id']]);

    // Redireciona de volta para a página principal após a exclusão
    header("Location: dashboard.php");
    exit();
} else {
    // Se não foi fornecido um ID válido, redireciona de volta para a página principal
    header("Location: dashboard.php");
    exit();
}
?>
