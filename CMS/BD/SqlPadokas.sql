create database dbpadokas;

use dbpadokas;



create table tblContato(
	idContato  int not null auto_increment primary key,  
	nome varchar(150),
    telefone varchar(20) not null,
    celular varchar(20) not null,
    email varchar(50) not null,
    cep varchar (20),
    endereco varchar(50),
    cidade varchar(30),
    bairro varchar(50),
    homePage varchar(150),
    linkfacebook varchar (150),
    filtro varchar(10),
    mensagem text not null,
    sexo varchar(10),
    profissao varchar(50) not null
); 