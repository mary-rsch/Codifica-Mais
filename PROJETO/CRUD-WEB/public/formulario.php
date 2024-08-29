<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Cadastro de produtos</title>
</head>
<body>
<div class="container">
        <h2>Adicionar Item #000001</h2>
        <form action="#" method="POST">

            <div class="info-item">
                <label for="nome-item">Nome do item</label>
                <input required type="text" id="nome-item">
            </div>

            <div class="info-item">
                <label for="sku">SKU</label>
                <input required type="text" id="sku">
            </div>

            <div class="info-item">
                <label for="unidade-medida">Unidade de Medida</label>
                <input required type="text" id="unidade-medida">
            </div>

            <div class="info-item">
                <label for="valor">Valor</label>
                <input required type="text" id="valor">
            </div>

            <div class="info-item">
                <label for="quantidade-estoque">Quantidade Estoque</label>
                <input required type="text" id="quantidade-estoque">
            </div>

            <div class="info-item">
                <label for="categoria">Categoria</label>
                <select id="categoria">
                    <option value="eletronicos">-</option>
                    <option value="eletronicos">Eletrônicos</option>
                    <option value="alimentos">Alimentos</option>
                    <option value="vestuario">Vestuário</option>
                    <option value="livros">Escritório</option>
                </select>
            </div>

            <button type="submit">Criar item</button>

        </form>
    </div>

</body>
</html>