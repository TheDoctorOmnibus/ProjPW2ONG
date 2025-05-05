<?php
require("includes/conexao.php");
require("includes/config.php");

if (isset($_POST['creat_evento'])) {
    // Obter dados do formulário
    $nome = sanitizar($_POST['nome']);
    $descricao = sanitizar($_POST['descricao']);
    $dataEvento = sanitizar($_POST['data_evento']);
    $horaInicio = sanitizar($_POST['hora_inicio']);
    $horaTermino = sanitizar($_POST['hora_termino']);
    
    // Dados do endereço
    $logradouro = sanitizar($_POST['logradouro']);
    $numero = sanitizar($_POST['numero']);
    $complemento = sanitizar($_POST['complemento']);
    $bairro = sanitizar($_POST['bairro']);
    $cidade = sanitizar($_POST['cidade']);
    $estado = sanitizar($_POST['estado']);
    $cep = sanitizar($_POST['cep']);

    $imagemCapa = null;

// Verifica se foi enviada uma imagem sem erro
if (isset($_FILES['imagem_capa']) && $_FILES['imagem_capa']['error'] === UPLOAD_ERR_OK) {
    $nomeArquivo = $_FILES['imagem_capa']['name']; // Nome original do arquivo
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION)); // Pega a extensão do arquivo e converte para minúsculo
    $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif']; // Extensões permitidas

    // Verifica se a extensão é válida
    if (in_array($extensao, $extensoesPermitidas)) {
        $novoNome = uniqid() . '.' . $extensao; // Cria um novo nome único para o arquivo
        $caminhoDestino = UPLOAD_DIR . $novoNome; // Define o caminho de destino usando uma constante (UPLOAD_DIR)

        // Move o arquivo para o destino final
        if (move_uploaded_file($_FILES['imagem_capa']['tmp_name'], $caminhoDestino)) {
            $imagemCapa = $novoNome; // Guarda o nome final da imagem (para salvar no banco, por exemplo)
        } else {
            throw new Exception('Erro ao fazer upload da imagem.');
        }
    } else {
        throw new Exception('Formato de arquivo não permitido. Use apenas JPG, JPEG, PNG ou GIF.');
    }
}

// Inserir endereço se fornecido
if (!empty($logradouro) && !empty($bairro) && !empty($cidade) && !empty($estado) && !empty($cep)) {
    $sqlEndereco = "INSERT INTO enderecos (logradouro, numero, complemento, bairro, cidade, estado, cep) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmtEndereco = $conexao->prepare($sqlEndereco);
    $stmtEndereco->bind_param("sssssss", $logradouro, $numero, $complemento, $bairro, $cidade, $estado, $cep);
    $stmtEndereco->execute();
    $enderecoId = $conexao->insert_id;
}
    $sql = "INSERT INTO eventos (nome, descricao, data_evento, hora_inicio, hora_termino, imagem_capa, endereco_id) VALUES ('$nome', '$descricao', '$dataEvento', '$horaInicio', '$horaTermino', '$imagemCapa', '$enderecoId')";

    mysqli_query($conexao, $sql);
}

header('Location: index.php');

?>