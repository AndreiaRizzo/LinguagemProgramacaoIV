<?php
require_once("../cabecalho.html");
?>

<h3>Gerenciamento de produtos</h3>

<a href="inserir_produto.php" class="btn btn-primary mt-3"> Adicionar produtos</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Nome do produto</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Persuasão</td>
            <td>Livro de Jane Austen</td>
            <td>R$10,00</td>
            <td>Livros</td>
            <td>
                <a href="alterar_produto.php" class="btn btn-warning">Alterar</a>
                <a href="excluir_produto.php" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <tr>
            <td>Espaguetti Liane</td>
            <td>Macarrão de Semolina</td>
            <td>R$3,00</td>
            <td>Perecíveis</td>
            <td>
                <a href="alterar_produto.php" class="btn btn-warning">Alterar</a>
                <a href="alterar_produto.php" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <tr>
            <td>Óculos de natação</td>
            <td>Infantil</td>
            <td>R$25,00</td>
            <td>Material esportivo</td>
            <td>
                <a href="alterar_produto.php" class="btn btn-warning">Alterar</a>
                <a href="alterar_produto.php" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
    </tbody>

</table>





<?php
require_once("../rodape.html");
