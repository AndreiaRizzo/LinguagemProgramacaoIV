<?php
    require_once "../cabecalho.php";
?>

<form action="exer02resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe 7 valores</label>
            <input type="number" class="form-control" name="valor1" id="valor1"><br><br>
            <input type="number" class="form-control" name="valor2" id="valor2"><br><br>
            <input type="number" class="form-control" name="valor3" id="valor3"><br><br>
            <input type="number" class="form-control" name="valor4" id="valor4"><br><br>
            <input type="number" class="form-control" name="valor5" id="valor5"><br><br>
            <input type="number" class="form-control" name="valor6" id="valor6"><br><br>
            <input type="number" class="form-control" name="valor7" id="valor7"><br><br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">
                Enviar
            </button>
        </div>
    </div>
</form>

<?php
    require_once "../rodape.php";