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
    <div class="flex items-center space-x-4">
      <div class="flex items-center space-x-1 text-black">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5.121 17.804A11.954 11.954 0 0112 15c2.389 0 4.604.7 6.484 1.896M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        <a href="#" class="text-sm">Login</a>
      </div>
    </div>
  </nav>
</body>
</html>