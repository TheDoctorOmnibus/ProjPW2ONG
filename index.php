<?php
require('includes/conexao.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prototipo ONG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>

<?php
include("includes/navbar.php");
?>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Eventos
                    <a href="evento_creat.php" class="btn btn-primary float-end">Adcionar Evento</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>data</th>
                            <th>Horários</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            $sql = "SELECT * FROM eventos ORDER BY data_evento DESC";
                            $resultado = $conexao->query($sql);

                            if ($resultado->num_rows > 0) {
                                while ($evento = $resultado->fetch_assoc()) {
                                    $dataFormatada = date('d/m/Y', strtotime($evento['data_evento']));
                                    echo '<tr>';
                                    echo '<td>' . $evento['id'] . '</td>';
                                    echo '<td>' . $evento['nome'] . '</td>';
                                    echo '<td>' . $dataFormatada . '</td>';
                                    echo '<td>' . $evento['hora_inicio'] . ' às ' . $evento['hora_termino'] . '</td>';
                                    echo '<td>';
                                    echo '<a href="../evento.php?id=' . $evento['id'] . '" class="btn btn-secondary btn-sm" title="Visualizar">Visualizar</a>';
                                    echo '<a href="editar-evento.php?id=' . $evento['id'] . '" class="btn btn-success btn-sm" title="Editar">Editar</a>';
                                    echo '<button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal' . $evento['id'] . '" title="Excluir">Excluir</button>';
                                    echo '</td>';
                                    echo '</tr>';

                                    // Modal de confirmação de exclusão
                                    echo '<div class="modal fade" id="deleteModal' . $evento['id'] . '" tabindex="-1" aria-labelledby="deleteModalLabel' . $evento['id'] . '" aria-hidden="true">';
                                    echo '<div class="modal-dialog">';
                                    echo '<div class="modal-content">';
                                    echo '<div class="modal-header">';
                                    echo '<h5 class="modal-title" id="deleteModalLabel' . $evento['id'] . '">Confirmar Exclusão</h5>';
                                    echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                                    echo '</div>';
                                    echo '<div class="modal-body">';
                                    echo 'Tem certeza que deseja excluir o evento "' . $evento['nome'] . '"? Esta ação não pode ser desfeita.';
                                    echo '</div>';
                                    echo '<div class="modal-footer">';
                                    echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>';
                                    echo '<a href="excluir-evento.php?id=' . $evento['id'] . '" class="btn btn-danger">Excluir</a>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                echo '<tr><td colspan="5" class="text-center">Nenhum evento encontrado.</td></tr>';
                            }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>