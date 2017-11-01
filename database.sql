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

insert into cliente values (1,"Ezequiel Marques Ramos", "ezequielmr94@gmail.com", "048.138.099-01", true, "SC" );
insert into cliente values (2,"Debora", "debora@udesc.com", "054.156.483-56", false, "SC" );
insert into cliente values (3,"Felipe", "felipe@udesc.com", "468.156.537-16", true, "SC" );
insert into cliente values (4,"Leticia", "leticia@udesc.com", "244.645.159-35", false, "SC" );
insert into cliente values (5,"Andre", "andre@udesc.com", "528.174.369-01", true, "SC" );
insert into cliente values (6,"Victor", "victor@udesc.com", "357.159.379-28", true, "SC" );
