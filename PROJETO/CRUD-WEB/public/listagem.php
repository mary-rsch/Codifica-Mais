<DIV?php
session_start();

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listagem.css">
    <title>Listagem de produtos</title>
</head>
<body>

    <div class="container">
        <nav id="navegacao">
        <button class="novo-item">Novo Item</button>
        <input type="text" placeholder="Buscar item" class="buscar-item">
        </nav>

        <div class="item">
            <div class="identificacao">
                <div class="espacamento-identificacao">
                    <span class="item-id">#000001</span>
                    <span class="tag vestuario">VESTUÁRIO</span>
                    <span class="sku">SKU: 123456</span>
                </div>
            </div>
            
            <div class="item-name">Camisa Codifica+</div>
            <span class="quantidade">Quantidade: 100</span>
            <button class="editar">Editar</button>
            <button class="deletar">Deletar</button>
        </div>

        <div class="item">
            <span class="item-id">#000002</span>
            <span class="tag eletronico">ELETRÔNICO</span>
            <div class="item-name">Notebook</div>
            <span class="sku">SKU: 123456</span>
            <span class="quantidade">Quantidade: 45</span>
            <button class="editar">Editar</button>
            <button class="deletar">Deletar</button>
        </div>

        <div class="item">
            <span class="item-id">#000003</span>
            <span class="tag escritorio">ESCRITÓRIO</span>
            <div class="item-name">Caderno Anotação</div>
            <span class="sku">SKU: 123456</span>
            <span class="quantidade">Quantidade: 15</span>
            <button class="editar">Editar</button>
            <button class="deletar">Deletar</button>
        </div>
    </div>
</body>
</html>