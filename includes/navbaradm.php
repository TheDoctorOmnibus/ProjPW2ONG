<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar Exemplo</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <!-- Barra superior vermelha -->
  <div class="w-full h-5 bg-red-900"></div>

  <!-- Navbar principal -->
  <nav class="flex items-center justify-between px-6 py-4 bg-white shadow">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <img src="../img/logo.svg" alt="Logo" class="h-8" />
      <span class="fs-5 fw-light">Amor Sem Fim</span>
    </div>
    
    <!-- Login e botão Doar -->
    <?php 
    echo "Bem-vindo, administrador " . $_SESSION['usuario'];
    ?>
  </nav>
</body>
</html>