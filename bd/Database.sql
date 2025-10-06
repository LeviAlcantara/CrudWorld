create database crud_world;
use crud_world;

create table continentes(
	continente int auto_increment primary key,
    nome varchar(20) not null
);
create table paises(
	pais int auto_increment primary key,
    nome varchar (75) not null,
    continente int not null,
    foreign key (continente) references continentes(continente)
);
create table cidades(
	cidade int auto_increment primary key,
    nome varchar(75) not null,
    pais int not null,
    foreign key (pais) references paises(pais)
);