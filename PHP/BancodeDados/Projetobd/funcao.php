<?php

    function conectarBanco(){
        $conexao = new PDO("mysql:host=localhost:3308; dbname=bancophp", "root", "");
        return $conexao;
    }

    function retornarCategorias(){
        try{
           $sql = "SELECT * FROM categoria";
           $conexao = conectarBanco();
           return $conexao->query($sql);
        } catch (Exception $e){
            return 0;
        }
    }
    function retornarProdutos(){
        try{
           $sql = "SELECT p.*, c.descricao as categoria FROM produto p INNER JOIN categoria c ON c.id = p.Categoria_id";
           $conexao = conectarBanco();
           return $conexao->query($sql);
        } catch (Exception $e){
            return 0;
        }
    }
    function inserirProduto($nome, $descricao, $valor, $categoria){
        try{
            $sql = "INSERT INTO  produto (nome, descricao, valor, categoria_id)
            VALUES (:nome, :descricao, :valor, :categoria)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":valor", $valor);
            $stmt->bindValue(":categoria", $categoria);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }
    