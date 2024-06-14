<?php
require_once "../cabecalho.php";
?>

<form action="exer02resp.php" method="post">
    <div class="row">
        <?php for ($i = 1; $i <= 7; $i++): ?>
            <div class="col">
                <label for="valor<?= $i ?>" class="form-label">Informe o valor <?= $i ?></label>
                <input type="number" class="form-control" name="valor[]" id="valor<?= $i ?>" required>
            </div>
        <?php endfor; ?>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary mt-2">Enviar</button>
        </div>
    </div>
</form>

<?php
require_once "../rodape.php";
?>

