<?php
// Query SQL para selecionar informações da tabela
$sql = "SELECT * FROM eventos ORDER BY data_evento ASC";
$stmt = $conn->prepare($sql);
$stmt->execute();

// Chama a função para gerar a tabela de eventos
gerarTabelaEventos($stmt);

// Fecha a conexão com o banco de dados
$conn = null;
function gerarTabelaEventos($stmt) {
    if ($stmt->rowCount() > 0) {
        echo 
        "<div>
        <table class='table table-striped table-responsive'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data do Evento</th>
                    <th>Local do Evento</th>
                    <th>Ações</th>
                </tr>
            </thead>";
        
        // Loop através dos resultados e exibe-os
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Formata a data no formato desejado (dia/mês/ano)
            $data_evento_formatada = date('d/m/Y', strtotime($row["data_evento"]));
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $data_evento_formatada . "</td>";
            echo "<td>" . $row["local_evento"] . "</td>";
            echo "<td>
                    <a class='btn1 btn-dark' href='editarevento.php?id=" . $row['id'] . "'>Editar</a>
                    <a class='btn2 btn-danger' href='excluirevento.php?id=" . $row['id'] . "' onclick='return confirm(\"Tem certeza que deseja excluir este evento?\")'>Excluir</a>
                </td>";
            echo "</tr>";
        }
        echo "</table>
            </div";
    } else {
        echo "Não há eventos cadastrados.";
    }
}
?>