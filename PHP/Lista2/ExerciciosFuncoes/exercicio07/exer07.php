<?php
require_once "../cabecalho.php";
?>
<form action="exer07resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe uma medida em metros</label>
            <input type="number" class="form-control" name="valor" id="valor">
        </div>

    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class=" btn btn-primary mt-2">
                Enviar
            </button>
        </div>
    </div>
</form>






<?php
require_once "../rodape.php";
