<?php
function gerarTabelaEventos($stmt) {
    if ($stmt->rowCount() > 0) {
        echo "<table>";
        echo "<tr><th>Data do Evento</th><th>Local do Evento</th></tr>";
        // Loop através dos resultados e exibe-os
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Formata a data no formato desejado (dia/mês/ano)
            $data_evento_formatada = date('d/m/Y', strtotime($row["data_evento"]));
            echo "<tr>";
            echo "<td>" . $data_evento_formatada . "</td>";
            echo "<td>" . $row["local_evento"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Não há eventos cadastrados.";
    }
}
?>