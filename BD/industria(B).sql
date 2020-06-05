create database dbIndustria;

use dbIndustria;

show databases;

create table tblSexo(
	idSexo int(4) auto_increment not null primary key,
    nome varchar(20),
    sigla varchar(1)
);

create table tblFornecedor(
	idFornecedor int(4) auto_increment not null primary key,
    nome varchar(100) not null,
    cpf varchar (18),
    cnpj varchar(18),
    dtNascimento date,
    idSexo int(4) not null,
    constraint FK_sexo_fornecedor foreign key (idSexo) references tblSexo (idSexo)
);

create table tblcidade (
	idCidade int(4) not null primary key auto_increment,
    nome varchar(100),
    taxaCriminal varchar(50)
);

create table tblEstado (
	idEstado int(4) not null auto_increment primary key,
    nome varchar(50) not null,
    sigla varchar(2)
);

create table tblEnderecoFornecedor (
	idEnderecoFornecedor int(4) not null primary key auto_increment,
    rua varchar(100),
    bairro varchar(100),
    cep varchar(9),
    numero varchar(10),
    complemento varchar(100),
	idCidade int(4) not null,
    idEstado int(4) not null,
    constraint FK_enderecoFornecedorCidade foreign key (idCidade) references tblCidade (idCidade),
    constraint FK_enderecoFornecedorEstado foreign key (idEstado) references tblEstado (idEstado)
);

create table tblFornecedorEndereco(
	idFornecedorEndereco int(4) not null primary key auto_increment,
    idEnderecoFornecedor int(4) not null,
    idFornecedor int(4) not null,
    constraint FK_enderecofornecedor_fornecedorEndereco foreign key (idEnderecoFornecedor) references tblEnderecoFornecedor (idEnderecoFornecedor),
    constraint FK_enderecoFornecedor_fornecedor foreign key (idFornecedor) references tblFornecedor (idFornecedor)
);

create table tblEmail(
	idEmail int(4) not null auto_increment primary key,
    email varchar(20),
    idFornecedor int(4) not null,
    constraint FK_email_cliente foreign key (idFornecedor) references tblFornecedor (idFornecedor)
);

create table tblTelefone(
	idTelefone int(4) auto_increment not null primary key, 
    telefone varchar(13),
    celular varchar (14),
    idFornecedor int(4),
    constraint FK_telefone_fornecedor foreign key (idFornecedor) references tblFornecedor (idFornecedor)
);

create table tblPeca(
	idPeca int(4) auto_increment not null primary key,
    nome varchar(50),
    valor varchar(5),
    quantidade int (10),
    descricao varchar(100),
    idFornecedor int(4) not null,
    constraint FK_peca_fornecedor foreign key (idFornecedor) references tblFornecedor (idFornecedor)
);

create table tblEnderecoDeposito(
	idEnderecoDeposito int(4) not null auto_increment primary key,
    bloco varchar(4),
    andar varchar(12),
    nrSala int(4)
);

create table tblDimensao(
	idDimensao int(4) not null auto_increment primary key,
    altura varchar(15),
    largura varchar(15),
    comprimento varchar(15),
    idPeca int(4) not null,
    constraint FK_peca_deposito foreign key (idPeca) references tblPeca (idPeca)
); 

create table tblDeposito(
	idDeposito int(4) not null auto_increment primary key,
    nome  varchar(50),
    idEnderecoDeposito int(4) not null,
    constraint FK_deposito_enderecoDeposito foreign key (idEnderecoDeposito) references tblEnderecoDeposito (idEnderecoDeposito)
);

create table tblPecaDeposito(
	idPecaDeposito int(4) not null primary key auto_increment,
    idPeca int(4) not null,
    idDeposito int(4) not null,
    constraint FK_pecaDeposito_peca foreign key (idPeca) references tblPeca(idPeca),
    constraint FK_pecaDeposito_deposito foreign key(idDeposito) references tblDeposito (idDeposito)
    
);

create table tblDataProjeto(
	idDataProjeto int(4) not null auto_increment primary key,
    dataInicio date,
    dataFim date
);

create table tblProjeto(
	idProjeto int(4) not null primary key auto_increment,
    nome varchar(50),
    valor varchar(15),
    descricao varchar(100),
    idDataProjeto int(4) not null,
    idPeca int(4) not null,
    idFornecedor int(4) not null,
    constraint FK_projeto_dataProjeto foreign key (idDataProjeto) references tblDataProjeto (idDataProjeto),
    constraint FK_projeto_peca foreign key (idpeca) references tblPeca (idPeca),
    constraint FK_projeto_Fornecedor foreign key (idFornecedor) references tblFornecedor (idFornecedor)
);

create table tblHoraDepartamento(
	idHoraDepartamento int(4) auto_increment primary key not null, 
    dataInicio date,
    dataFim date,
    horaInicio time,
    horaFim time 
);

create table tblEnderecoDepartamento(
	idDepartamentoEndereco int(4) auto_increment primary key not null,
    bloco varchar(4),
    andar varchar(12),
    nrSala int(4)    
);


 create table departamento (
	idDepartamento int(4) auto_increment primary key not null,
    nome varchar(50),
    qtdFuncionario int(5),
	idDepartamentoEndereco int(4) not null,
    idHoraDepartamento int(4) not null,
    constraint FK_departamento_enderecoDepartamento foreign key (idDepartamentoEndereco) references tblEnderecoDepartamento(idDepartamentoEndereco),
    constraint FK_departamento_horaDepartamento foreign key (idHoraDepartamento) references tblHoraDepartamento(idHoraDepartamento)
 );
 
 create table tblFuncionarioEndereco(
	idFuncionarioEndereco int(4) not null primary key auto_increment,
	rua varchar(100),
    bairro varchar(100),
    cep varchar(9),
    numero varchar(10),
    complemento varchar(100)
 );
 
 create table tblFuncionario(
	idFuncionario int(4) not null auto_increment primary key,
    nome varchar(100),
    cpf varchar(15),
    dtNascimento date,
    idEnderecoFuncionario int(4) not null,
    constraint FK_funcionario_enderecoFuncionario foreign key (idEnderecoFuncionario) references tblEnderecoFuncionario (idEnderecoFuncionario)
 );
 
  create table tblEnderecoFuncionario(
	idEnderecoFuncionario int(4) auto_increment primary key not null,
    idFuncionarioEndereco int(4) not null,
    constraint FK_EnderecoFuncionario_FuncionarioEndereco foreign key (idFuncionarioEndereco) references tblFuncionarioEndereco(idFuncionarioEndereco)
 );
 
 ## ta errado o relacionamento de endereco dentro da tabela de fucionario
