<?php
require_once "../cabecalho.php";
?>

<form action="exer09resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="anoNasc" class="form-label">Digite o ano do seu nascimento:</label>
            <input type="number" class="form-control" name="anoNasc" id="anoNasc" required>
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