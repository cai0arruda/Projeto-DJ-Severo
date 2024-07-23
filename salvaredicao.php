<?php
// salvarevento.php

// Verifica se os dados do formulário foram enviados via POST
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclua o arquivo de configuração do banco de dados e estabeleça a conexão
    require_once 'pdoconfig.php';
    
    // Recupera os dados do formulário
    $id = $_POST['id'];
    $data_evento = $_POST['data_evento'];
    $local_evento = $_POST['local_evento'];
    
    // Atualiza os dados do evento no banco de dados
    $stmt = $conn->prepare("UPDATE eventos SET data_evento = ?, local_evento = ? WHERE id = ?");
    $stmt->execute([$data_evento, $local_evento, $id]);
    
    // Redireciona de volta para a página principal ou exibe uma mensagem de sucesso
    header("Location: dashboard.php");
    exit();
} else {
    // Se alguém tentar acessar esta página diretamente sem enviar dados do formulário, redirecione-os de volta
    header("Location: dashboard.php");
    exit();
}
?>