/*
drop database tcc;
*/
#create database TCC;
#use TCC;
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


create table Cliente(
ClienteID int auto_increment,
Nome varchar(40) not null unique,
Bairro varchar(50) not null,
Rua varchar(50) not null,
Ncasa int(8) not null,
Senha text not null,
Usuario text not null,
primary key(ClienteID)
);
select * from cliente;

#drop table compra;
create table Carrinho(
Sessao int,
ProdutoID int,
ClienteID int,
foreign key(ProdutoID) references Produto(ProdutoID),
foreign key(ClienteID) references Cliente(ClienteID)
);
create table Compra(
CompraID int primary key auto_increment,
Sessao int unique,
Total int,
ClienteID int,
Statuss int default 1,
horario varchar(35),
foreign key(ClienteID) references Cliente(ClienteID)
);
#select * from carrinho inner join Produto where Carrinho.ProdutoID = Produto.ProdutoID;
create table Estoque(
NomeProduto varchar(30),
Quantidade int,
Descrição varchar(300)
);




#select * from Compra inner join Cliente where Compra.ClienteID = Cliente.ClienteID;

/*Categoria de Produtos pré determinada*/
INSERT INTO `Categoria` (`CategoriaID`, `Nomee`) VALUES ('1', 'Pizzas');
INSERT INTO `Categoria` (`CategoriaID`, `Nomee`) VALUES ('2', 'Pizzas Doces');
INSERT INTO `Categoria` (`CategoriaID`, `Nomee`) VALUES ('3', 'Bebidas');
INSERT INTO `Categoria` (`CategoriaID`, `Nomee`) VALUES ('4', 'Outros');
/*Conta Master*/
select * from compra  ;
insert into Produto values(1,'py',1,21,'fds');
INSERT INTO `Funcionario` (`FuncionarioID`, `Nivel`, `Nome`, `Nascimento`, `Salario`, `Endereço`, `Senha`, `Usuario`) VALUES ('1', '4', 'PayPizza', '2019-01-01', '0', 'UNASP', '123', 'paypizza');

