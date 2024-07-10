create database if not exists gestao_produtos;

use gestao_produtos;

create table produtos (
    id INT AUTO_INCREMENT primary key,
    nome VARCHAR(150) not null,
    sku VARCHAR(50) unique not null,
    descricao TEXT,
    categoria_id INT,
    preco DECIMAL(10, 2),
    unidade_medida_id INT,
    peso DECIMAL(10, 2),
    quantidade_estoque INT default 0,
    fabricante_id VARCHAR(100),
    fornecedor_id VARCHAR(150),
    deleted_at TIMESTAMP null default null,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at TIMESTAMP default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    foreign key(categoria_id) references categorias(id),
    foreign key(unidade_medida_id) references unidades_medida(id),
    foreign key(fabricante) references fabricantes(id),
    foreign key(fornecedor) references fornecedores(id)
);



create table categorias (
    id INT AUTO_INCREMENT primary key,
    nome_categoria VARCHAR(150) not null,
    deleted_at TIMESTAMP null default null,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at TIMESTAMP default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
);

create table unidades_medida (
    id INT AUTO_INCREMENT primary key,
    nome_unidades_medida VARCHAR(50) not null,
    deleted_at TIMESTAMP null default null,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at TIMESTAMP default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
);

create table fabricantes (
    id INT AUTO_INCREMENT primary key,
    nome_fabricantes VARCHAR(100) not null,
    deleted_at TIMESTAMP null default null,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at TIMESTAMP default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
);

create table fornecedores (
    id INT AUTO_INCREMENT primary key,
    nome_fornecedores VARCHAR(100) not null,
    deleted_at TIMESTAMP null default null,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at TIMESTAMP default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
);


select * from produtos;
select * from categorias;
select * from unidades_medida;
select * from fabricantes;
select * from fornecedores;
select * from produtos;
