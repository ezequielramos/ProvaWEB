create database prova;
use prova;

create table usuario (
  codigo int auto_increment primary key,
  usuario varchar(20),
  senha varchar(20)
);

create table cliente (
  codigo int auto_increment primary key,
	nome varchar(150),
	email varchar(50),
	cpf varchar(14),
	sexo boolean,
  estado varchar(2)
);
