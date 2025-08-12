<?php

session_start();

require ('conexao.php');

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Pega os dados do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Cria a consulta SQL
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

// Executa a consulta
$resultado = mysqli_query($conexao, $sql);

// Verifica se encontrou um usuário
if (mysqli_num_rows($resultado) === 1) {
    // Pega os dados do usuário
    $user = mysqli_fetch_assoc($resultado);

    // Salva na sessão
    $_SESSION['tipo'] = $user['tipo'];

    $_SESSION['usuario'] = $user['usuario'];

    session_start();
	$_SESSION['login']==true;

    // Redireciona de acordo com o tipo
    if ($user['tipo'] == 'adm') {
        header("Location: ../adm/list.php");
    } else {
        header("Location: ../clie/index_login.php");
    }
} else {
    echo "Usuário ou senha incorretos.";
}

?>
