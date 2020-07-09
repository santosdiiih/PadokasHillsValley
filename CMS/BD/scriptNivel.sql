create table tblNivel(
	idNivel int(4) not null auto_increment primary key,    
    administrarUsuario boolean,
    administrarConteudo boolean,
    administrarFaleConosco boolean,
    administrarProduto boolean,
    tipo varchar(100)
);

select * from tblNivel;

create table tblUsuario(
	idUsuario int(4) not null primary key auto_increment,
    nome varchar(100) not null,
    login varchar(100) not null,
    senha varchar(50) not null,
    idNivel int(4) not null,
    constraint FK_tblNivel_usuario foreign key(idNivel) references tblNivel (idNivel)
);


create table tblCuriosidadeImagem(
	idImagem int(4) not null primary key auto_increment,
    imagem varchar(200),
    estado boolean
);
create table tblCuriosidade(
	idConteudo int(4) not null primary key auto_increment,
    texto text,
    titulo varchar(200),
    estado boolean,
    imagem varchar(150)
);
create table tblSobreConteudo(
	idConteudo int(4) not null primary key auto_increment,
    texto text,
    titulo varchar(200),
    estadoConteudo1 boolean
);

create table tblSobreConteudoSessao3(
	idsobreConteudoSessao3 int(4) not null primary key auto_increment,
    titulo1 varchar(200),
    titulo2 varchar(200),
    texto1 text,
    texto2 text,
    imagem varchar(200),
    estado boolean
);
create table tblLoja(
	idLoja int(4) not null primary key auto_increment,
    titulo varchar (200),
    imagem varchar(200),
    estado boolean
);

use dbpadokas;
drop table tblCuriosidadeImagem;
alter table tblUsuario add constraint FK_tblNivel_usuario foreign key(idNivel) references tblNivel (idNivel);



desc tblUsuario;



delete from tblNivel where idNivel > 0;

select tblUsuario.idUsuario, tblUsuario.nome, 
                                            tblUsuario.login, tblUsuario.senha, tblNivel.tipo
                                            from tblUsuario, tblNivel 
                                            where tblNivel.idNivel = tblUsuario.idNivel;
alter table tblUsuario add estado boolean;	
alter table tblcuriosidade add imagem varchar(150);

insert into tblUsuario (estado) values (1);								

select tblUsuario.idUsuario, tblUsuario.nome, 
                                        tblUsuario.login, tblUsuario.senha, tblUsuario.estado, tblNivel.tipo
                                        from tblUsuario, tblNivel 
                                        where tblNivel.idNivel = tblUsuario.idNivel;
select * from tblUsuario;


update tblUsuario set estado = 0 where idUsuario =6;


select tblUsuario.idUsuario, tblUsuario.nome, 
		tblUsuario.login, tblUsuario.senha, tblUsuario.estado, tblNivel.tipo, tblUsuario.estado
from tblUsuario, tblNivel 
where tblNivel.idNivel = tblUsuario.idNivel ;

select tblUsuario.idUsuario, tblUsuario.nome, 
                                        tblUsuario.login, tblUsuario.senha, tblUsuario.estado, tblNivel.tipo
                                        from tblUsuario, tblNivel 
                                        where tblNivel.idNivel = tblUsuario.idNivel 
                                        and tblUsuario.estado = 0;
                                        
                                        
update tblUsuario set nome = 'Ingrid', login = 'abc', senha = '6efee51694d5f9de785a7e61cd40b04e', idnivel = '' where idUsuario = 6