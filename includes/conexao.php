<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "banco_ong";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db) or die ("Não foi possivel conectar");
?>