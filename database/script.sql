CREATE DATABASE dbbar;
USE dbbar;

create table tbtipos(
id int not null auto_increment,
rotulo varchar(30) not null,
sigla varchar(3) not null,
CONSTRAINT pk_tipos PRIMARY KEY (id));

create table tbprodutos(
id int not null auto_increment,
nome varchar(100) not null,
descricao text not null,
preco float(6,2) not null,
imagem varchar(70) not null,
id_tipo int not null,
CONSTRAINT pk_produtos PRIMARY KEY (id),
CONSTRAINT fk_tipos FOREIGN KEY (id_tipo) REFERENCES tbtipos(id));

desc tbtipos;
desc tbprodutos;

insert tbtipos values (1, 'arcondicionado', 'arc');
insert tbtipos values (2, 'inverter', 'inv');
insert tbtipos values (3, 'multisplit', 'mul');
insert tbtipos values (4, 'energiasolar', 'ens');

select * from tbtipos;

insert tbprodutos values ()