<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Evento - Sistema de Eventos de Caridade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<?php
session_start();
include("../includes/navbaradm.php");
?>
    <div class="container mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="list.php" class="link-secondary link-underline-opacity-0" >Administração</a></li>
                <li class="breadcrumb-item active" aria-current="page">Novo Evento</li>
            </ol>
            <a href="list.php" class="btn btn-voltar mb-3" style="background-color: #3B82F6; color: white; font-weight:bold;">Voltar</a>
        </nav>

        <h1 class="mb-4">Novo Evento</h1>

        <div class="card">
            <div class="card-body">
                <form method="POST" action="acoes.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="mb-3">Informações do Evento</h4>
                            
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome do Evento *</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="5" required></textarea>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="data_evento" class="form-label">Data do Evento *</label>
                                    <input type="date" class="form-control" id="data_evento" name="data_evento" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="hora_inicio" class="form-label">Hora de Início *</label>
                                    <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="hora_termino" class="form-label">Hora de Término *</label>
                                    <input type="time" class="form-control" id="hora_termino" name="hora_termino" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="imagem_capa" class="form-label">Imagem de Capa</label>
                                <input type="file" class="form-control" id="imagem_capa" name="imagem_capa" required>
                                <div class="form-text">Formatos aceitos: JPG, JPEG, PNG, GIF</div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <h4 class="mb-3">Endereço do Evento</h4>
                            
                            <div class="mb-3">
                                <label for="logradouro" class="form-label">Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" name="logradouro" required>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="numero" class="form-label">Número</label>
                                    <input type="text" class="form-control" id="numero" name="numero" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="complemento" class="form-label">Complemento</label>
                                    <input type="text" class="form-control" id="complemento" name="complemento" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="bairro" class="form-label">Bairro</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" required>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="estado" class="form-label">Estado</label>
                                    <input type="text" class="form-control" id="estado" name="estado" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cep" class="form-label">CEP</label>
                                    <input type="text" class="form-control" id="cep" name="cep" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                        <a href="list.php" class="btn btn-danger me-md-2">Voltar</a>
                        <button type="submit" name="creat_evento" class="btn btn-primary">Salvar Evento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>