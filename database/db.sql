create database crud_patinha;
use crud_patinha;

create table usuarios(
    id int auto_increment primary key, 
    nome varchar(100) not null,
    email varchar(100) not null;
);

create table animais(
    id int auto_increment primary key,
    id_usuario int not null,
    nome varchar(100) not null,
    tipo varchar(100) not null,
    raca varchar(100) not null,
    idade int not null;

    foreign key (id_usuario) references usuarios(id)
    
);