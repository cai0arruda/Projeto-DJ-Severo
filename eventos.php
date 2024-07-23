<main>
    <div class="container">
        <div class="row">
            <div class="container mt-3 back bordatab">
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
                            <table class='table table-dark table-striped'>
                                <thead>
                                    <tr>
                                        <th class='tabela'>Data do Evento</th>
                                        <th class='tabela'>Local do Evento</th>
                                    </tr>
                                </thead>";
                            
                            // Loop através dos resultados e exibe-os
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                // Formata a data no formato desejado (dia/mês/ano)
                                $data_evento_formatada = date('d/m/Y', strtotime($row["data_evento"]));
                                echo "<tr>";
                                echo "<td class='tabela2'>" . $data_evento_formatada . "</td>";
                                echo "<td class='tabela2'>" . $row["local_evento"] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>
                                </div";
                        } else {
                            echo "Não há eventos cadastrados.";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</main>
