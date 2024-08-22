<DIV?php
session_start();

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listagem.css">
    <title>Listagem de produtos</title>
    <script src="https://kit.fontawesome.com/addd3116cc.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

        <div class="navegacao">
            <button class="novo-item">Novo Item</button>
            <input type="text" placeholder="Buscar item" class="buscar-item">
            <button class="botao-pesquisa">
            <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>

        <div class="items">
            <div class="item">
                <div class="identificacao">
                    <span class="item-id">#000001</span>
                    <span class="tag vestuario">VESTUÁRIO</span>
                    <span class="sku">SKU: 123456</span>
                </div>

                <div class="informacoes-item">
                    <div class="nome-item">Camisa Codifica+</div>
                    <span class="quantidade">Quantidade: 100</span>
                </div>

                <div class="modificar-item">
                    <button class="editar">Editar</button>
                    <button class="deletar">Deletar</button>
                </div>
            </div>

            <div class="item">
                <div class="identificacao">
                    <span class="item-id">#000002</span>
                    <span class="tag eletronico">ELETRÔNICO</span>
                    <span class="sku">SKU: 123456</span>
                </div>

                <div class="informacoes-item">
                    <div class="nome-item">Notebook</div>
                    <span class="quantidade">Quantidade: 45</span>
                </div>

                <div class="modificar-item">
                    <button class="editar">Editar</button>
                    <button class="deletar">Deletar</button>
                </div>
            </div>

            <div class="item">
                <div class="identificacao">
                    <span class="item-id">#000003</span>
                    <span class="tag escritorio">ESCRITÓRIO</span>
                    <span class="sku">SKU: 123456</span>
                </div>

                <div class="informacoes-item">
                    <div class="nome-item">Caderno Anotação</div>
                    <span class="quantidade">Quantidade: 15</span>
                </div>

                <div class="modificar-item">
                    <button class="editar">Editar</button>
                    <button class="deletar">Deletar</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>