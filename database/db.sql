create database crud_patinha;
use crud_patinha;

create table clientes(
    id int auto_increment primary key, 
    nome varchar(100) not null,
    email varchar(100) not null
);

create table animais(
    id int auto_increment primary key,
    id_cliente int not null,
    nome varchar(100) not null,
    tipo varchar(100) not null,
    raca varchar(100) not null,
    idade int not null,

    foreign key (id_cliente) references clientes(id);

);