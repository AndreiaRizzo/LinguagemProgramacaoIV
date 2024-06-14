<?php
require_once "../cabecalho.php";
?>


<form action="exer10resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="peso" class="form-label">Digite o peso (Kg): </label>
            <input type="number" class="form-control" name="peso" id="peso" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="altura" class="form-label">Digite a altura (m): </label>
            <input type="number" class="form-control" name="altura" id="altura" step="0.01" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary mt-2">
                Enviar
            </button>
        </div>
    </div>
</form>


<?php
require_once "../rodape.php";
?>