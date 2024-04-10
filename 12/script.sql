DROP DATABASE IF EXISTS ouvir_etc_db;

CREATE DATABASE ouvir_etc_db;

USE ouvir_etc_db;

CREATE TABLE ouvir_etc_db.usuario(
id int PRIMARY KEY not null,
nome varchar(150) not null,
email varchar(200) not null unique,
password varchar(80) not null,
tipousuario ENUM('ADMIN', 'USUARIO', 'ANALISTA') NOT NULL DEFAULT('USUARIO'),
statususuario boolean DEFAULT(true)
);
CREATE TABLE ouvir_etc_db.relato(
id int PRIMARY KEY not null,
    datarelato datetime not null,
    titulo varchar(100) not null,
    descricao text,
    tiporelato ENUM('SUGESTAO', 'ELOGIO', 'RECLAMACAO') NOT NULL DEFAULT('RECLAMACAO'),
usuarioid int null,
    FOREIGN KEY (usuarioid) REFERENCES ouvir_etc_db.usuario(id)
);

INSERT INTO ouvir_etc_db.usuario (id, nome, email, password, tipousuario)
VALUES
(100, 'admin', 'admin@email.com', 'secret', 'ADMIN' ),
(101, 'user01', 'user01@email.com', 'secret', 'USUARIO' ),

INSERT INTO ouvir_etc_db.relato (id, datarelato, titulo, descricao,  tiporelato, usuarioid)
VALUES
(10000, '2024-03-01 08:00:00', 'Aumentar número de catracas', 'Aumentar número de catracas na entrada da escola.', 'SUGESTAO', NULL),
(10001, '2024-03-02 09:00:00', 'Não fechar portão', 'Não fechar portão de entrada e saída na hora do intervalo.', 'SUGESTAO', NULL),
(10002, '2024-03-05 10:00:00', 'Biblioteca', 'Muito bom funcionamento da biblioteca', 'ELOGIO', NULL),
(10003, '2024-04-05 11:00:00', 'Ar Condicionado', 'O ar condicionado do laboratório 36 não está funcionando corretamente.', 'RECLAMACAO', NULL),
(10004, '2024-04-05 16:00:00', 'Teclado e mouse', 'Os equipamentos do laboratório 30 apresentam falhas', 'RECLAMACAO', 101),
(10005, '2024-04-05 19:20:00', 'Vazamento banheiro', 'Vazamento no banheiro masculino do último bloco.', 'RECLAMACAO', 101);