create database dbIngridContato;

use dbIngridContato;

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

create table tblNivel(
	idNivel int(4) not null auto_increment primary key,    
    administrarUsuario boolean,
    administrarConteudo boolean,
    administrarFaleConosco boolean,
    administrarProduto boolean,
    tipo varchar(100),
    estado boolean
);

select * from tblNivel;

create table tblUsuario(
	idUsuario int(4) not null primary key auto_increment,
    nome varchar(100) not null,
    login varchar(100) not null,
    senha varchar(50) not null,
    idNivel int(4) not null,
    estado boolean,
    constraint FK_tblNivel_usuario foreign key(idNivel) references tblNivel (idNivel)
);

select * from tblusuario;


create table tblCuriosidade(
	idConteudo int(4) not null primary key auto_increment,
    texto text,
    titulo varchar(200),
    estado boolean,
    
);

select * from tblCuriosidade;

create table tblSobreConteudo(
	idConteudo int(4) not null primary key auto_increment,
    texto text,
    titulo varchar(200),
    imagem varchar(200),
    estado boolean
);

select * from tblSobreConteudo;

create table tblLoja(
	idLoja int(4) not null primary key auto_increment,
    titulo varchar (200),
    imagem varchar(200),
    estado boolean
);

select * from tblLoja;
use dbpadokas;



