create database jogo;
use jogo;

create table usuario
(
iduser int not null,
nome varchar(45),
pontos int,
primary key(iduser)
);