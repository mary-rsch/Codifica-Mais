
-- p->produtos
-- f->fabricantes ou fornecedores
-- u->unidades_medida
-- c->categorias

-- retornar todos os produtos de um Fabricante X
SELECT p.nome, p.sku, p.descricao, f.nome_fabricante, p.preco, p.quantidade_estoque
FROM produtos p
JOIN fabricantes f ON p.fabricantes_id = f.id
WHERE f.nome_fabricante = 'Fabricante 5';

-- retornar todos os produtos de uma Categoria X e unidade de medida Y
SELECT p.nome, p.sku, p.descricao, c.nome_categoria, p.preco, u.nome_unidade_medida, p.quantidade_estoque
FROM produtos p
JOIN categorias c ON p.categorias_id = c.id
JOIN unidades_medida u ON p.unidades_medida_id = u.id
WHERE c.nome_categoria = 'Categoria 2' AND u.nome_unidade_medida = 'Unidade 2';

-- quantos produtos existem de um Fornecedor X e a quantidade em estoque
SELECT f.nome_fornecedor, COUNT(p.id) AS total_produtos, SUM(p.quantidade_estoque) AS total_estoque
FROM produtos p
JOIN fornecedores f ON p.fornecedores_id = f.id
WHERE f.nome_fornecedor = 'Fornecedor 3'
GROUP BY f.nome_fornecedor;
