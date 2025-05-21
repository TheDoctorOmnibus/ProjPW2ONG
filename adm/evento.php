<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Feira de Adoção</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    
    .btn-voltar:hover {
      background-color: #2563EB;
    }
    .btn-editar {
      background-color: #16A34A;
      color: white;
      font-weight: bold;
    }
    .btn-editar:hover {
      background-color: #15803D;
    }
    .btn-excluir {
      background-color: #B91C1C;
      color: white;
      font-weight: bold;
    }
    .btn-excluir:hover {
      background-color: #991B1B;
    }
    .event-info i {
      margin-right: 8px;
    }
  </style>
</head>
<body>

<?php
require("../includes/conexao.php");
include("navbaradm.php");
?>
  <div class="m-5">
    <!-- Botão Voltar -->
    <a href="#" class="btn btn-voltar mb-3" style="background-color: #3B82F6; color: white; font-weight:bold;">Voltar</a>

    <!-- Conteúdo principal -->
      <!-- Imagem -->
          <?php
            if (isset($_GET['id'])) {
              $usuario_id = mysqli_real_escape_string($conexao, $_GET['id']);
              $query = "SELECT * FROM EVENTOS WHERE id='$usuario_id'";
              $consulta_evento = mysqli_query($conexao, $query);
              
              if (mysqli_num_rows($consulta_evento) > 0) {
                while ($linha = mysqli_fetch_array($consulta_evento)) {
                  $endereco_id = $linha['endereco_id'];
                  $queryen = "SELECT * FROM ENDERECOS WHERE id='$endereco_id'";
                  $consulta_endereco = mysqli_query($conexao, $queryen);
                  if (mysqli_num_rows($consulta_endereco) > 0){
                    while ($endereco = mysqli_fetch_array($consulta_endereco)){
                      $dataFormatada = date('d/m/Y', strtotime($linha['data_evento']));
                      echo '<div class="d-flex ">';


                      echo '<div class="esquerda">';

                      echo '<div class="col-md-10">';
                      echo '<img src="../uploads/' . $linha['imagem_capa'] . '" class="img-fluid rounded">';
                      echo '</div>';

                      echo '<div style="display: inline-block;" class="criador">';
                      echo '<p class="mb-1"> Data da criação ' . $linha['data_criacao'] . '</p>';
                      echo '<p > Data da última atualização ' . $linha['data_atualizacao'] . '</p>';
                      echo '</div>';

                      echo '</div>';


                      echo '<div class="direita">';

                      echo '<div class="col-md-7">';
                      echo '<h1 class="fw-bold">' . $linha['nome'] . '</h1>';
                      echo '<p class="fs-5">' . $linha['descricao'] . '</p>';
                      echo '</div>';

                      echo '<div class="event-info mb-3">';
                      echo '<p><i class="bi bi-calendar-event"></i>' . $dataFormatada . '</p>';
                      echo '<p><i class="bi bi-geo-alt"></i>' . $endereco['logradouro'] . '</p>';
                      echo '<p><i class="bi bi-clock"></i>' . $linha['hora_inicio'] . '-' . $linha['hora_termino'] . '</p>';
                      echo '</div>';

                      echo '</div>';
                      echo '</div>';
                    }
                  } else {
                    echo '<h5>endereço não encontrado</h5>';
                  }
                }
              } else {
                echo "<h5>Usuário não encontrado</h5>";
              }
            } else {
              echo "<h5>Informação não encontrada</h5>";
            }
          ?>

          <!-- Botões -->
        <div class="d-flex gap-2 mt-3">
          <button class="btn btn-outline-danger">Excluir</button>
          <button class="btn btn-outline-success">Editar</button>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
