<?php 
    require_once "templates/header.php";
    require_once "controllers/NotaController.php";
?>

<div class="container mt-5">
    <h1 class="mb-4">Bloco de Notas</h1>
    <!-- Formulário para adicionar nota -->
    <form method="post" action="controllers/NotaController.php?acao=adicionar" class="mb-4">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="conteudo" class="form-label">Conteúdo</label>
            <textarea class="form-control" id="conteudo" name="conteudo" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Nota</button>
    </form>

    <!-- Lista de notas (exemplo estático, substitua pelo loop do banco de dados) -->
    <div class="list-group">
        <div class="list-group-item">
            <h5 class="mb-1">Título da Nota</h5>
            <p class="mb-1">Conteúdo da nota...</p>
            <small>Data: 15/05/2025</small>
        </div>
        <!-- Repita para cada nota -->
    </div>
</div>


<?php require_once"templates/footer.php"?>