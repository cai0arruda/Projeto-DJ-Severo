<?php
include "head2.php";

// Inclua o arquivo de configuração do banco de dados
require_once 'pdoconfig.php';

// Verifica se foi fornecido um ID válido na URL

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Prepare a consulta para obter os dados do evento com base no ID fornecido
    $stmt = $conn->prepare("SELECT * FROM eventos WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $evento = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($evento) {
        // O formulário de edição do evento
        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit();
}
?>
        <main>
            <div class="container pageeditar">
                <div class="tittleevento">
                    <div>Editar Evento ID - <?php echo $evento ['id']; ?></div>
                </div>
                <form class="form-label" action="salvaredicao.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $evento['id']; ?>">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div for="data_evento" class="datalocal">Data do Evento</div>
                            <input type="date" class="form-control" value="<?php echo $evento['data_evento']; ?>"
                                name="data_evento">
                        </div>
                        <div class="col-md-4">
                            <div for="local_evento" class="datalocal">Local do Evento</div>
                            <input type="text" class="form-control" value="<?php echo $evento['local_evento']; ?>"
                                name="local_evento">
                        </div>
                        <div class="botaosalvar">
                            <button type="submit" class="btn1 btn-success" value="Salvar">Salvar Edição</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
<?php
    } else {
        echo "Evento não encontrado.";
    }
} else {
    echo "ID de evento inválido.";
}
?>