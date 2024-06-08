<?php

    function conectarBanco(){
        $conexao = new PDO("mysql:host=localhost:3308; dbname=mydb", "root", "");
        return $conexao;
    }

    function retornarAluno(){
        try{
           $sql = "SELECT * FROM aluno";
           $conexao = conectarBanco();
           return $conexao->query($sql);
        } catch (Exception $e){
            return 0;
        }
    }

    function inserirAluno($cpfAluno, $nome, $dtNasc, $idade, $sexo, $rua, $num, $cidade, $estado, $email, $nomeResp, $celResp, $celAluno){
        try{
            $sql = "INSERT INTO  Aluno (cpfAluno, nome, dtNasc, idade, sexo, rua, num, cidade, estado, email, nomeResp, celResp, celAluno)
            VALUES (:cpfAluno,:nome, :dtNasc, :idade, :sexo, :rua, :num, :cidade, :estado, :email, :nomeResp, :celResp, :celAluno)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":cpfAluno", $cpfAluno);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":dtNasc", $dtNasc);
            $stmt->bindValue(":idade", $idade);
            $stmt->bindValue(":sexo", $sexo);
            $stmt->bindValue(":rua", $rua);
            $stmt->bindValue(":num", $num);
            $stmt->bindValue(":cidade", $cidade);
            $stmt->bindValue(":estado", $estado);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":nomeResp", $nomeResp);
            $stmt->bindValue(":celResp", $celResp);
            $stmt->bindValue(":celAluno", $celAluno);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    function excluirAluno( $cpfAluno)
{
    try {
        $sql = "DELETE FROM aluno WHERE cpfAluno = :cpfAluno";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue("cpfAluno" , $cpfAluno);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}