<?php
session_start();
ini_set('display_errors', 0);
error_reporting(0);

require('../includes/conexao.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prototipo ONG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <style>
    .event-img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 8px;
    }
    .align-middle td {
      vertical-align: middle;
    }
  </style>
</head>
  <body>

<?php
include("../includes/navbarclie.php");

if ($_SESSION['tipo'] == 'clie') {
    header("Location: ../clie/index_login.php");
    exit;}
?>

    <div class="container mt-5">
        <h2 class="mb-4 text-center fw-bold">Eventos da ONG
        </h2>
            <table class="table table-hover align-middle">
                    <tbody>
                    <?php
                            $sql = "SELECT eventos.*, enderecos.logradouro, enderecos.numero 
        FROM eventos
        LEFT JOIN enderecos ON eventos.endereco_id = enderecos.id
        ORDER BY eventos.id";

                      $resultado = $conexao->query($sql);

                        if ($resultado->num_rows > 0) {
                          while ($evento = $resultado->fetch_assoc()) {
                                            $dataFormatada = date('d/m/Y', strtotime($evento['data_evento']));
                                            echo '<tr>';
                                            echo '<td> <small>' . $evento['id'] . '</small> </td>';
                                            echo '<td> <img src="../uploads/' . $evento['imagem_capa'] . '" class="event-img"></td>';
                                            echo '<td> <strong>' . $evento['nome'] . '</strong> </td>';
                                            echo '<td> <small>' . $dataFormatada . ' • ' . $evento['logradouro'] . ' ' . $evento['numero'] . '</small> </td>';
                                            echo '<td> <small>' . $evento['hora_inicio'] . ' - ' . $evento['hora_termino'] . '</small> </td>';
                                            echo '<td>';
                                            echo '<a href="../clie/eventoclie.php?id=' . $evento['id'] . '" class="btn btn-primary" title="Visualizar">Visualizar</a>';

                                            echo '</td>';
                                            echo '</tr>';
                                        }
                                    }
                                     else {
                                echo '<tr><td colspan="5" class="text-center">Nenhum evento encontrado.</td></tr>';
                            }
                    ?>
                    </tbody>
            </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>