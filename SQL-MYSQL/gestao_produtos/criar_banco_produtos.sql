create database if not exists gestao_produtos;

use gestao_produtos;

create table produtos (
    id INT AUTO_INCREMENT primary key,
    nome VARCHAR(255) not null,
    sku VARCHAR(255) not null,
    descricao TEXT,
    categoria VARCHAR(255),
    preco DECIMAL(10, 2),
    unidade_medida VARCHAR(50),
    peso DECIMAL(10, 2),
    quantidade_estoque INT,
    fabricante VARCHAR(255),
    fornecedor VARCHAR(255),
    deleted_at datetime,
    created_at datetime default CURRENT_TIMESTAMP,
    updated_at datetime default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
);

select * from produtos;
