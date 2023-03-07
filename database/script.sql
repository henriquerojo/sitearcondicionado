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

insert tbprodutos values (1,'','','','',1);
insert tbprodutos values (2,'','','','',1);
insert tbprodutos values (3,'','','','',1);
insert tbprodutos values (4,'','','','',1);
insert tbprodutos values (5,'','','','',1);

insert tbprodutos values (6,'','','','',2);
insert tbprodutos values (7,'','','','',2);
insert tbprodutos values (8,'','','','',2);
insert tbprodutos values (9,'','','','',2);
insert tbprodutos values (10,'','','','',2);

insert tbprodutos values (11,'','','','',3);
insert tbprodutos values (12,'','','','',3);
insert tbprodutos values (13,'','','','',3);
insert tbprodutos values (14,'','','','',3);
insert tbprodutos values (15,'','','','',3);

insert tbprodutos values (16,'','','','',4);
insert tbprodutos values (17,'','','','',4);
insert tbprodutos values (18,'','','','',4);
insert tbprodutos values (19,'','','','',4);
insert tbprodutos values (20,'','','','',4);