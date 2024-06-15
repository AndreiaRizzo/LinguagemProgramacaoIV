<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Central de vagas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ">      
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/LinguagemProgramacaoIV/PHP/BancodeDados/CentralVagas/aluno/inserir_aluno.php">Cadastrar Aluno</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/LinguagemProgramacaoIV/PHP/BancodeDados/CentralVagas/aluno/alterar_dados.php">Alterar Aluno</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/LinguagemProgramacaoIV/PHP/BancodeDados/CentralVagas/aluno/excluir_aluno.php">Excluir Aluno</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/LinguagemProgramacaoIV/PHP/BancodeDados/CentralVagas/aluno/concluir_matricula.php">Concluir Matrícula</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/LinguagemProgramacaoIV/PHP/BancodeDados/CentralVagas/Cursos/cursos.php">Cadastrar curso</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/LinguagemProgramacaoIV/PHP/BancodeDados/CentralVagas/listaespera/cursos_oferecidos.php">Lista cursos oferecidos</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/LinguagemProgramacaoIV/PHP/BancodeDados/CentralVagas/listaespera/cursos_novos.php">Lista cursos novos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="container">
    <?php

    require_once('funcao.php');
    