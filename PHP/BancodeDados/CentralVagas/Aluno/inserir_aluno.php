<?php
    require_once("../cabecalho.php");
?>
    <h3>Dados Pessoais</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="sexo" class="form-label">Sexo</label>
                <input type="radio" class="form-control" name="sexo">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="rua" class="form-label">Rua/Av</label>
                <input type="text" class="form-control" name="rua">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="num" class="form-label">Núm</label>
                <input type="text" class="form-control" name="num">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" name="cidade">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" name="estado">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="dt_nasc" class="form-label">Data Nascimento</label>
                <input type="date" class="form-control" name="dt_nasc">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="idade" class="form-label">Idade</label>
                <input type="text" class="form-control" name="idade">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="respon" class="form-label">Nome do responsável</label>
                <input type="text" class="form-control" name="respon">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="fone" class="form-label">Celular</label>
                <input type="text" class="form-control" name="fone">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success mt-3">Salvar</button>
            </div>
        </div>
    </form>



    require_once("../rodape.html");