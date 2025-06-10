<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar com Modal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Barra superior vermelha -->
  <div class="w-full h-5 bg-red-900"></div>

  <!-- Navbar -->
  <nav class="flex items-center justify-between px-6 py-4 bg-white shadow">
    <div class="flex items-center space-x-2">
      <img src="../img/logo.svg" alt="Logo" class="h-8" />
      <span class="fs-5 fw-light">Amor Sem Fim</span>
    </div>

    <div class="flex space-x-8 text-black text-sm font-medium">
      <a href="#">Sobre nós</a>
      <a href="#">Nossa história</a>
      <a href="#">Nossa equipe</a>
      <a href="#">Eventos</a>
    </div>

    <div class="flex items-center space-x-4">
      <button id="openModal" class="flex items-center space-x-1 text-black text-sm hover:text-red-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5.121 17.804A11.954 11.954 0 0112 15c2.389 0 4.604.7 6.484 1.896M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        <span>Login</span>
      </button>

      <button class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded">
        Doar
      </button>
    </div>
  </nav>

  <!-- Modal -->
  <div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white p-6 rounded-xl shadow-lg w-full max-w-sm relative">
      <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-red-600">
        &times;
      </button>

      <h2 class="text-5xl font-bold text-gray-900 mb-6 text-center">Iniciar Sessão</h2>
      <form class="space-y-4">
        <div>
          <label class="block text-sm font-medium text-gray-700">E-mail</label>
          <input type="email" class="w-full border rounded px-3 py-2 mt-1 focus:outline-none focus:ring focus:ring-blue-300" required />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Senha</label>
          <input type="password" class="w-full border rounded px-3 py-2 mt-1 focus:outline-none focus:ring focus:ring-blue-300" required />
        </div>
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
          Entrar
        </button>
      </form>
    </div>
  </div>

  <!-- Scripts -->
  <script>
    const openModal = document.getElementById("openModal");
    const closeModal = document.getElementById("closeModal");
    const loginModal = document.getElementById("loginModal");

    openModal.addEventListener("click", () => {
      loginModal.classList.remove("hidden");
      loginModal.classList.add("flex");
    });

    closeModal.addEventListener("click", () => {
      loginModal.classList.remove("flex");
      loginModal.classList.add("hidden");
    });

    window.addEventListener("click", (e) => {
      if (e.target === loginModal) {
        loginModal.classList.remove("flex");
        loginModal.classList.add("hidden");
      }
    });
  </script>
</body>
</html>
