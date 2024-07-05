use gestao_produtos;

insert into produtos (nome, sku, descricao, categoria, preco, unidade_medida, peso, quantidade_estoque, fabricante, fornecedor)
values
('Produto 1', 'SKU001', 'Descrição do Produto 1', 'Categoria 1', 10.00, 'Unidade 1', 1.00, 100, 'Fabricante 1', 'Fornecedor 1'),
('Produto 2', 'SKU002', 'Descrição do Produto 2', 'Categoria 2', 20.00, 'Unidade 2', 2.00, 200, 'Fabricante 2', 'Fornecedor 2'),
('Produto 3', 'SKU003', 'Descrição do Produto 3', 'Categoria 3', 30.00, 'Unidade 3', 3.00, 300, 'Fabricante 3', 'Fornecedor 3'),
('Produto 4', 'SKU004', 'Descrição do Produto 4', 'Categoria 4', 40.00, 'Unidade 4', 4.00, 400, 'Fabricante 4', 'Fornecedor 4'),
('Produto 5', 'SKU005', 'Descrição do Produto 5', 'Categoria 5', 50.00, 'Unidade 5', 5.00, 500, 'Fabricante 5', 'Fornecedor 5'),
('Produto 6', 'SKU006', 'Descrição do Produto 6', 'Categoria 6', 60.00, 'Unidade 6', 6.00, 600, 'Fabricante 6', 'Fornecedor 6'),
('Produto 7', 'SKU007', 'Descrição do Produto 7', 'Categoria 7', 70.00, 'Unidade 7', 7.00, 700, 'Fabricante 7', 'Fornecedor 7'),
('Produto 8', 'SKU008', 'Descrição do Produto 8', 'Categoria 8', 80.00, 'Unidade 8', 8.00, 800, 'Fabricante 8', 'Fornecedor 8'),
('Produto 9', 'SKU009', 'Descrição do Produto 9', 'Categoria 9', 90.00, 'Unidade 9', 9.00, 900, 'Fabricante 9', 'Fornecedor 9'),
('Produto 10', 'SKU010', 'Descrição do Produto 10', 'Categoria 10', 100.00, 'Unidade 10', 10.00, 1000, 'Fabricante 10', 'Fornecedor 10');

insert into categorias (nome_categoria)
values
('Comida');