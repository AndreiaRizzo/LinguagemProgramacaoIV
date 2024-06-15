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
        $sql = "INSERT INTO aluno (cpfAluno, nome, dtNasc, idade, sexo, rua, num, cidade, estado, email, nomeResp, celResp, celAluno) VALUES (:cpfAluno, :nome, :dtNasc, :idade, :sexo, :rua, :num, :cidade, :estado, :email, :nomeResp, :celResp, :celAluno)";
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
        if ($stmt->execute()){
            /*if(inserirNaListaEspera($cpfAluno, $idCurso, date("Y-m-d")))
                return true;
            else
                return false;*/
                inserirNaListaEspera($cpfAluno, $idCurso, date("Y-m-d"));
        }
    } catch (PDOException $e) {
        echo "Erro ao inserir aluno: " . $e->getMessage();
        return false;
    }
}

function excluirAluno($cpfAluno)
{
    try {
        $resultado = 0;
        $sql = "DELETE FROM listaespera WHERE aluno_cpfAluno = :cpfAluno";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":cpfAluno", $cpfAluno);
        if ($stmt->execute()){
            $sql = "DELETE FROM aluno WHERE cpfAluno = :cpfAluno";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":cpfAluno", $cpfAluno);
            $resultado = $stmt->execute();
        }
        return $resultado;
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

function inserirNaListaEspera($cpfAluno, $curso, $dtCadastro)
{
    $conexao = conectarBanco();
    try {
        $sql = "INSERT INTO listaespera (aluno_cpfAluno, cursos_idCurso, dtCadastro) VALUES (:cpfAluno, :curso, :dtCadastro)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':cpfAluno', $cpfAluno);
        $stmt->bindValue(':curso', $curso);
        $stmt->bindValue(':dtCadastro', $dtCadastro);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo "Erro ao inserir na lista de espera: " . $e->getMessage();
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
