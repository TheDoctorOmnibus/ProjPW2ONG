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
include("navbaradm.php");
?>
  <div class="m-5">
    <!-- Botão Voltar -->
    <a href="#" class="btn btn-voltar mb-3" style="background-color: #3B82F6; color: white; font-weight:bold;">Voltar</a>

    <!-- Conteúdo principal -->
    <div class="d-flex ">
      <!-- Imagem -->
      <div class="esquerda">

        <div class="col-md-10">
          <img src="../img/teste.png" alt="Mulher com cachorro" class="img-fluid rounded">
        </div>

        <!-- Criador -->
        <div class="criador">
          <p class="fw-bold mb-1">José criou esse evento</p>
          <p class="mb-1">Evento criado 20 de abril 2024 às 16:00</p>
          <p>Editado por último 29 de abril 2024 às 20:00</p>
        </div>

      </div>

      <!-- Informações do evento -->
      <div class="direita">
        <div class="col-md-7">
          <h1 class="fw-bold">Feira de Adoção<br>de Animais</h1>
          <p class="fs-5">Participe da nossa feira de adoção de animais e ajude a encontrar um lar para cães e gatos resgatados.</p>
        </div>

        <div class="event-info mb-3">
          <p><i class="bi bi-calendar-event"></i>10 de maio de 2024</p>
          <p><i class="bi bi-geo-alt"></i>Rua das Flores, 123, Centro, Cidade, 12345-678</p>
          <p><i class="bi bi-clock"></i>10:00 – 14:00</p>
        </div>

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
