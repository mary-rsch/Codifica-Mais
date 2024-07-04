create database if not exists gestao_produtos;

use gestao_produtos;

create table produtos (
    id INT AUTO_INCREMENT primary key,
    nome VARCHAR(255) not null,
    sku VARCHAR(50) unique not null,
    descricao TEXT,
    categoria VARCHAR(255),
    preco DECIMAL(10, 2),
    unidade_medida VARCHAR(50),
    peso DECIMAL(10, 2),
    quantidade_estoque INT default 0,
    fabricante VARCHAR(255),
    fornecedor VARCHAR(255),
    deleted_at TIMESTAMP null default null,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at TIMESTAMP default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
);

select * from produtos;
