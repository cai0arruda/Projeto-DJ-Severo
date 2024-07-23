    <!-- Formulário de inserção de eventos -->
    <?php

    include "pdoconfig.php";

    $mensagem = ""; // Inicializa a mensagem como vazia

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se os campos data_evento e local_evento foram enviados e não estão vazios
        if (!empty($_POST["data_evento"]) && !empty($_POST["local_evento"])) {
            // Prepara e executa a inserção no banco de dados
            $stmt = $conn->prepare("INSERT INTO eventos (data_evento, local_evento) VALUES (?, ?)");
            $stmt->execute([$_POST["data_evento"], $_POST["local_evento"]]);
            echo "<script>window.location.replace('dashboard.php');</script>";
        } else {
            $mensagem = "Por favor, preencha todos os campos do formulário";
        }
    }

    // Exibe a mensagem se estiver definida
    if (!empty($mensagem)) {
        echo "<p>$mensagem</p>";
    }
    ?>