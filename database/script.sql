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

insert tbprodutos values (1,'Ar Condicionado 8.000 BTU','Ar Condicionado com capacidade de refrigeração de 8.000 BTU',1000.00,'',1);
insert tbprodutos values (2,'Ar Condicionado 9.000 BTU','Ar Condicionado com capacidade de refrigeração de 9.000 BTU',1500.00,'',1);
insert tbprodutos values (3,'Ar Condicionado 10.000 BTU','Ar Condicionado com capacidade de refrigeração de 10.000 BTU',2000.00,'',1);
insert tbprodutos values (4,'Ar Condicionado 11.000 BTU','Ar Condicionado com capacidade de refrigeração de 11.000 BTU',2500.00,'',1);
insert tbprodutos values (5,'Ar Condicionado 12.000 BTU','Ar Condicionado com capacidade de refrigeração de 12.000 BTU',3000.00,'',1);

insert tbprodutos values (6,'Inverter 8.000 BTU','Inverter com capacidade de refrigeração de 8.000 BTU',1200.00,'',2);
insert tbprodutos values (7,'Inverter 9.000 BTU','Inverter com capacidade de refrigeração de 9.000 BTU',1700.00,'',2);
insert tbprodutos values (8,'Inverter 10.000 BTU','Inverter com capacidade de refrigeração de 10.000 BTU',2200.00,'',2);
insert tbprodutos values (9,'Inverter 11.000 BTU','Inverter com capacidade de refrigeração de 11.000 BTU',2700.00,'',2);
insert tbprodutos values (10,'Inverter 12.000 BTU','Inverter com capacidade de refrigeração de 12.000 BTU',3200.00,'',2);

insert tbprodutos values (11,'Multisplit 8.000 BTU','Multisplit com capacidade de refrigeração de 8.000 BTU',1100.00,'',3);
insert tbprodutos values (12,'Multisplit 9.000 BTU','Multisplit com capacidade de refrigeração de 9.000 BTU',1600.00,'',3);
insert tbprodutos values (13,'Multisplit 10.000 BTU','Multisplit com capacidade de refrigeração de 10.000 BTU',2100.00,'',3);
insert tbprodutos values (14,'Multisplit 11.000 BTU','Multisplit com capacidade de refrigeração de 11.000 BTU',2600.00,'',3);
insert tbprodutos values (15,'Multisplit 12.000 BTU','Multisplit com capacidade de refrigeração de 12.000 BTU',3100.00,'',3);

insert tbprodutos values (16,'Placa solar 300W','Placar solar com potência de 300W',700.00,'',4);
insert tbprodutos values (17,'Placa solar 400W','Placar solar com potência de 400W',800.00,'',4);
insert tbprodutos values (18,'Placa solar 500W','Placar solar com potência de 500W',900.00,'',4);
insert tbprodutos values (19,'Placa solar 600W','Placar solar com potência de 600W',979.99,'',4);
insert tbprodutos values (20,'Placa solar 700W','Placar solar com potência de 700W',1050.00,'',4);