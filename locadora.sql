create database locadora_db;

use locadora_db;

create table cadastro_tb(
id_cadastro int not null,
cpf int not null,
nome varchar(40) not null,
genero varchar(40) not null,
senha varchar(40) not null,
primary key (id_cadastro)
);

create table titulo_tb(
id_titulo int not null,
titulo varchar(40) not null,
genero varchar(40) not null,
diretor varchar(40) not null,
ano int not null,
primary key (id_titulo)
); 

create table emprestimos_tb(
id_emprestimos int not null,
titulo varchar(40),
genero varchar(40),
diretor varchar(40),
ano int not null,
emprestimo_dias int not null,
multa int not null,
primary key (id_emprestimos)
);


insert into cadastro_tb
(id_cadastro, cpf, nome, genero, senha)
values
('1', '1231', 'Adelaide', 'feminino', 'gatinhos77');

select * from cadastro_tb;

insert into titulo_tb
(id_titulo, titulo, genero, diretor, ano)
values
('1', 'Crepusculo', 'Romance/Sobrenatural', '2008');

select * from titulo_tb;


drop database locadora_db;
