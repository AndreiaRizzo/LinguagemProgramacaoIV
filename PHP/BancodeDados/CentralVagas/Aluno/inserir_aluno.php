<?php
require_once("../cabecalho.php");
require_once("../index.php");
?>
<h1>Dados Pessoais</h1>
<form action="" method="POST">


    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome aluno(a)">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="cpfAluno" id="cpfAluno" placeholder="CPF Aluno">
        </div>


    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="celAluno" id="celAluno" placeholder="Celular Aluno">
        </div>

        <div class="col">
            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <h3><label for="dt_nasc" class="form-label">Data Nascimento: </label></h3>
        </div>
        <div class="col">
            <input type="date" class="form-control" name="dt_nasc">
        </div>
        <div class="col">
            <select class="form-select" name="idade" id="idade">
                <option value="">Selecione a idade</option>
                <option value="6">6 anos</option>
                <option value="7">7 anos</option>
                <option value="8">8 anos</option>
                <option value="9">9 anos</option>
                <option value="10">10 anos</option>
                <option value="11">11 anos</option>
                <option value="12">12 anos</option>
                <option value="13">13 anos</option>
                <option value="14">14 anos</option>
                <option value="15">15 anos</option>
                <option value="16">16 anos</option>
                <option value="17">17 anos</option>
                <option value="18">18 anos</option>
            </select>
        </div>
        <div class="col">
            <div class="radio">
                <div class="col">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="M" name="optradio" value="Masculino">
                        <label class="form-check-label" for="M">M</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="F" name="optradio" value="Feminino">
                        <label class="form-check-label" for="F">F</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="rua" id="rua" placeholder="Rua/Av">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="num" id="num" placeholder="Número">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="nomeResp" id="nomeResp" placeholder="Nome do Responsável">
        </div>

        <div class="col">
            <input type="text" class="form-control" name="celResp" id="celResp" placeholder="Celular Responsável">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>
    </div>
</form>


<?php
require_once("../rodape.php");
