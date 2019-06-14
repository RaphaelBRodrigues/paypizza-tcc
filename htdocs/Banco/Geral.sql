/*
drop database tcc;
*/
create database TCC;
use TCC;
create table Funcionario(
FuncionarioID int auto_increment,
Nivel int not null,
Nome varchar(40) not null,
Nascimento date,
Salario int(6),
Endereço varchar(50),
Senha text,
Usuario text,
primary key(FuncionarioID)
);
create table Categoria(
CategoriaID int primary key,
Nomee varchar(30)
);
#drop table produto;
create table Produto(
ProdutoID int primary key not null auto_increment,
Nome varchar(30) unique,
CategoriaID int(3),
Preco int(2),
imagem text,

foreign key(CategoriaID) references  Categoria(CategoriaID)
);
INSERT INTO `categoria` (`CategoriaID`, `Nomee`) VALUES ('1', 'Pizzas');
INSERT INTO `categoria` (`CategoriaID`, `Nomee`) VALUES ('2', 'Pizzas Doces');
INSERT INTO `categoria` (`CategoriaID`, `Nomee`) VALUES ('3', 'Bebidas');
INSERT INTO `categoria` (`CategoriaID`, `Nomee`) VALUES ('4', 'Outros');
INSERT INTO `funcionario` (`FuncionarioID`, `Nivel`, `Nome`, `Nascimento`, `Salario`, `Endereço`, `Senha`, `Usuario`) VALUES ('1', '4', 'PayPizza', '01012019', '0', 'UNASP', '123', 'paypizza');



 

create table Cliente(
ClienteID int auto_increment,
Nome varchar(40) not null,
Bairro varchar(50),
Rua varchar(50),
Ncasa int(8),
Senha text,
Usuario text,
primary key(ClienteID)
);
create table Compra(
Total float(4,2) default 0,
ProdutoID int,
ClienteID int,
foreign key(ProdutoID) references Produto(ProdutoID),
foreign key(ClienteID) references Cliente(ClienteID)
);

create table Estoque(
NomeProduto varchar(30),
Quantidade int,
Descrição varchar(300)
);

show tables;
desc cliente;
#insert into Cliente values(null,'Raphael','2001-11-05','Augusto Franco');


show tables;
desc Funcionario;

show tables;
desc Produto;
#insert into Produto values(null,'Pizza Calabresa',30.0);
alter table produto add column Categoria int(3);
insert into produto values();
use tcc;
show tables;

