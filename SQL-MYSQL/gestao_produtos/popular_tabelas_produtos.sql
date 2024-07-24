use gestao_produtos;



INSERT INTO fornecedores (nome_fornecedor) VALUES 
('Fornecedor 1'), ('Fornecedor 2'), ('Fornecedor 3'), ('Fornecedor 4'), ('Fornecedor 5');

INSERT INTO categorias (nome_categoria) VALUES 
('Categoria 1'), ('Categoria 2'), ('Categoria 3'), ('Categoria 4'), ('Categoria 5');

INSERT INTO unidades_medida (nome_unidade_medida) VALUES 
('Unidade 1'), ('Unidade 2'), ('Unidade 3'), ('Unidade 4'), ('Unidade 5');

INSERT INTO fabricantes (nome_fabricante) VALUES 
('Fabricante 1'), ('Fabricante 2'), ('Fabricante 3'), ('Fabricante 4'), ('Fabricante 5');

insert into produtos (nome, sku, descricao, categorias_id, preco, unidades_medida_id, peso, quantidade_estoque, fabricantes_id, fornecedores_id)
values
('Produto 1', 'SKU001', 'Descrição do Produto 1', 1, 10.00, 1, 1.00, 100, 1, 1),
('Produto 2', 'SKU002', 'Descrição do Produto 2', 2, 20.00, 2, 2.00, 200, 2, 2),
('Produto 3', 'SKU003', 'Descrição do Produto 3', 3, 30.00, 3, 3.00, 300, 3, 3),
('Produto 4', 'SKU004', 'Descrição do Produto 4', 4, 40.00, 4, 4.00, 400, 4, 4),
('Produto 5', 'SKU005', 'Descrição do Produto 5', 5, 50.00, 5, 5.00, 500, 5, 5),
('Produto 6', 'SKU006', 'Descrição do Produto 6', 6, 60.00, 6, 6.00, 600, 6, 6),
('Produto 7', 'SKU007', 'Descrição do Produto 7', 7, 70.00, 7, 7.00, 700, 7, 7),
('Produto 8', 'SKU008', 'Descrição do Produto 8', 8, 80.00, 8, 8.00, 800, 8, 8),
('Produto 9', 'SKU009', 'Descrição do Produto 9', 9, 90.00, 9, 9.00, 900, 9, 9),
('Produto 10', 'SKU010', 'Descrição do Produto 10', 10, 100.00, 10, 10.00, 1000, 10, 10);
