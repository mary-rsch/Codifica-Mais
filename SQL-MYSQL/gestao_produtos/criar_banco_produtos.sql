create database if not exists gestao_produtos;

use gestao_produtos;


-- Criação da tabela categorias
CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_categoria VARCHAR(150) NOT NULL,
    deleted_at TIMESTAMP NULL DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Criação da tabela unidades_medida
CREATE TABLE unidades_medida (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_unidade_medida VARCHAR(50) NOT NULL,
    deleted_at TIMESTAMP NULL DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Criação da tabela fabricantes
CREATE TABLE fabricantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_fabricante VARCHAR(100) NOT NULL,
    deleted_at TIMESTAMP NULL DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Criação da tabela fornecedores
CREATE TABLE fornecedores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_fornecedor VARCHAR(100) NOT NULL,
    deleted_at TIMESTAMP NULL DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

create table produtos (
    id INT AUTO_INCREMENT primary key,
    nome VARCHAR(150) NOT NULL,
    sku VARCHAR(50) unique not null,
    descricao TEXT,
    categorias_id INT,
    preco DECIMAL(10, 2),
    unidades_medida_id INT,
    peso DECIMAL(10, 2),
    quantidade_estoque INT default 0,
    fabricantes_id INT,
    fornecedores_id INT,
    deleted_at TIMESTAMP NULL DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (categorias_id) REFERENCES categorias(id),
    FOREIGN KEY (unidades_medida_id) REFERENCES unidades_medida(id),
    FOREIGN KEY (fabricantes_id) REFERENCES fabricantes(id),
    FOREIGN KEY (fornecedores_id) REFERENCES fornecedores(id)
);

select * from produtos;
