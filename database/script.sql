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

insert tbprodutos values (1);
insert tbprodutos values (2);
insert tbprodutos values (3);
insert tbprodutos values (4);
insert tbprodutos values (5);

insert tbprodutos values (6);
insert tbprodutos values (7);
insert tbprodutos values (8);
insert tbprodutos values (9);
insert tbprodutos values (10);

insert tbprodutos values (11);
insert tbprodutos values (12);
insert tbprodutos values (13);
insert tbprodutos values (14);
insert tbprodutos values (15);

insert tbprodutos values (16);
insert tbprodutos values (17);
insert tbprodutos values (18);
insert tbprodutos values (19);
insert tbprodutos values (20);