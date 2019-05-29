/*
drop database tcc;
*/
create database TCC;
use TCC;
create table Funcionario(
FuncionarioID int auto_increment,
Nome varchar(40) not null,
Nascimento date,
Salario int(6),
Endereço varchar(50),
primary key(FuncionarioID)
);

create table Produto(
ProdutoID int primary key not null,
Nome varchar(30),
Descricao varchar(200),
Preco float(3,2),
Sabor varchar(20),
Categoria int(3)
);
desc pizza;
select * from pizza;
insert into produto values('1','Pizza de Calabresa','Não sei','200.0','Calabresa','Pizza');

create table Cliente(
ClienteID int auto_increment,
Nome varchar(40) not null,
Nascimento date,
Endereço varchar(50),
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
insert into Cliente values(null,'Raphael','2001-11-05','Augusto Franco');


show tables;
desc Funcionario;
insert into Funcionario values(null,"Lucas","2001-01-05",20000,"Franco");
select * from funcionario;

show tables;
desc Produto;
insert into Produto values(null,'Pizza Calabresa',30.0);


