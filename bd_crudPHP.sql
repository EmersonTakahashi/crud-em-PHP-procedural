create database bd_crudPHP;
use bd_crudPHP;

create table tbl_clientes(
	
    cod_clientes int not null primary key auto_increment,
    nome varchar(255),
    sobrenome varchar(255),
    email varchar(255),
    idade int(3)

); 
