<?php

function conectarBanco()
{
    $conexao = new PDO("mysql:host=localhost:3308; dbname=mydb", "root", "");
    return $conexao;
}

function retornarAluno()
{
    try {
        $sql = "SELECT * FROM aluno";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch (Exception $e) {
        return 0;
    }
}

function inserirAluno($cpfAluno, $nome, $dtNasc, $idade, $sexo, $rua, $num, $cidade, $estado, $email, $nomeResp, $celResp, $celAluno, $idCurso)
{
    $conexao = conectarBanco();
    try {
        $sql = "INSERT INTO alunos (cpfAluno, nome, dtNasc, idade, sexo, rua, num, cidade, estado, email, nomeResp, celResp, celAluno, idCurso) VALUES (:cpfAluno, :nome, :dtNasc, :idade, :sexo, :rua, :num, :cidade, :estado, :email, :nomeResp, :celResp, :celAluno, :idCurso)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':cpfAluno', $cpfAluno);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':dtNasc', $dtNasc);
        $stmt->bindValue(':idade', $idade);
        $stmt->bindValue(':sexo', $sexo);
        $stmt->bindValue(':rua', $rua);
        $stmt->bindValue(':num', $num);
        $stmt->bindValue(':cidade', $cidade);
        $stmt->bindValue(':estado', $estado);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':nomeResp', $nomeResp);
        $stmt->bindValue(':celResp', $celResp);
        $stmt->bindValue(':celAluno', $celAluno);
        $stmt->bindValue(':idCurso', $idCurso);

        return $stmt->execute();
    } catch (PDOException $e) {
        error_log("Erro ao inserir aluno: " . $e->getMessage());
        return false;
    }
}

function excluirAluno($cpfAluno)
{
    try {
        $sql = "DELETE FROM aluno WHERE cpfAluno = :cpfAluno";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":cpfAluno", $cpfAluno);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}

function consultarAluno($cpfAluno)
{
    try {
        $sql = "SELECT * FROM aluno WHERE cpfAluno = :cpfAluno";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':cpfAluno', $cpfAluno);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erro ao consultar aluno: " . $e->getMessage();
        return false;
    }
}

function inserirMatricula($cpfAluno, $idCurso)
{
    $conexao = conectarBanco();
    try {
        $sql = "INSERT INTO matricula (cpfAluno, nome, idCurso) 
                SELECT cpfAluno, nome, :idCurso 
                FROM aluno 
                WHERE cpfAluno = :cpfAluno";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':cpfAluno', $cpfAluno);
        $stmt->bindValue(':idCurso', $idCurso);

        return $stmt->execute();
    } catch (PDOException $e) {
        error_log("Erro ao inserir matrícula: " . $e->getMessage());
        return false;
    }
}

function removerDaListaEspera($cpfAluno)
{
    $conexao = conectarBanco();
    try {
        $sql = "DELETE FROM listaespera WHERE cpfAluno = :cpfAluno";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':cpfAluno', $cpfAluno);
        return $stmt->execute();
    } catch (PDOException $e) {
        error_log("Erro ao remover da lista de espera: " . $e->getMessage());
        return false;
    }
}

function inserirNaListaEspera($cpfAluno, $nome, $curso, $dtCadastro)
{
    $conexao = conectarBanco();
    try {
        $sql = "INSERT INTO listaespera (cpfAluno, nome, curso, dtCadastro) VALUES (:cpfAluno, :nome, :curso, :dtCadastro)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':cpfAluno', $cpfAluno);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':curso', $curso);
        $stmt->bindValue(':dtCadastro', $dtCadastro);
        return $stmt->execute();
    } catch (PDOException $e) {
        error_log("Erro ao inserir na lista de espera: " . $e->getMessage());
        return false;
    }
}

function retornarAlunosListaEspera()
{
    $conexao = conectarBanco();
    try {
        $sql = "SELECT * FROM listaespera ORDER BY curso, nome";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Erro ao buscar alunos na lista de espera: " . $e->getMessage());
        return [];
    }
}
?>
