<?php 
    require_once "templates/header.php";
    require_once "controllers/NotaController.php";
    $notasCadastradas = ListarNotas($conn)
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
    
    <div class="list-group">
        <?php foreach ($notasCadastradas as $nota): ?>
            <div class="list-group-item">
                <h5 class="mb-1"><?= htmlspecialchars($nota['titulo']) ?></h5>
                <small>Data: <?= htmlspecialchars($nota['data_criacao']) ?></small>
                 <p class="mb-1"><?= nl2br(htmlspecialchars($nota['conteudo'])) ?></p>
            </div>
        <?php endforeach;?>
    </div>
</div>
<?php require_once"templates/footer.php"?>