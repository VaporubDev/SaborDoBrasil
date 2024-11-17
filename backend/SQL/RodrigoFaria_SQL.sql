/*Criando BD se não existe*/
CREATE DATABASE IF NOT EXISTS sabor_brasil;
USE sabor_brasil;

/*Criando tabela empresa
id_empresa INT AUTO_INCREMENT PRIMARY KEY: Cria id com auto_increment e chave primária
createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP determina a data e a hora da criação por YYYY-MM-DD HH:MM:SS
updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP determina que na atualização tera mesma data e hora no momento em que for atualizado

*/

CREATE TABLE IF NOT EXISTS empresa(
	id_empresa INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    logo VARCHAR(255),
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS usuario(
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    nickname VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    foto VARCHAR(255),
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

CREATE TABLE IF NOT EXISTS publicacao(
 	id_publicacao INT AUTO_INCREMENT PRIMARY KEY, 
    foto VARCHAR(255) NOT NULL,
    titulo_prato VARCHAR(255) NOT NULL,
    localizacao VARCHAR(255) NOT NULL,
    cidade VARCHAR(255) NOT NULL,
    id_empresafk INT NOT NULL,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_empresafk) REFERENCES empresa(id_empresa)
)

-- -- Evita problemas com a importação dos dados;
-- SELECT @@sql_mode;



-- DROP TABLE empresa;
/* Carregando dados CSV */
-- LOAD DATA INFILE 'empresa.csv' 
-- INTO TABLE empresa 
-- FIELDS TERMINATED BY ',' 
-- OPTIONALLY ENCLOSED BY '"' 
-- LINES TERMINATED BY '\n' 
-- IGNORE 1 ROWS
-- ( id_empresa, nome, logo, createdAt, updatedAt );

LOAD DATA INFILE 'empresa.csv' 
INTO TABLE empresa 
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS
(id_empresa, nome, logo, createdAt, updatedAt);

LOAD DATA INFILE 'publicacao.csv' 
INTO TABLE publicacao 
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS
(id_publicacao, foto, titulo_prato, localizacao, cidade, id_empresafk createdAt, updatedAt);

LOAD DATA INFILE 'usuario.csv' 
INTO TABLE usuario 
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS
(id_usuario, nome, email, nickname, md5(senha), foto, createdAt, updatedAt);

