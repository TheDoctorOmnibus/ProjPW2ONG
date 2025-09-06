<?php

require('../includes/conexao.php');

$idexcluir = $_GET['id'];

$query = "DELETE FROM EVENTOS WHERE id = $idexcluir";

mysqli_query($conexao, $query);

header('location:list.php');