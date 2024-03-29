#drop database clinica;
create database clinica;
use clinica;

create table endereco(
id int not null,
cep int(8) not null,
logradouro varchar(100) not null,
bairro varchar(50) not null,
cidade varchar(50) not null,
estado char(2) not null,
constraint pk_cep primary key (cep)
);

create table telefone(
id int not null auto_increment,
telefone_residencial bigint(10),
telefone_comercial bigint(10),
celular bigint(11) not null,
constraint pk_telefone primary key (id)
);

create table pessoa(
id int not null auto_increment,
nome varchar(25) not null,
sobrenome varchar (255) not null,
rg varchar(9) not null,
cpf bigint(11) not null,
data_nascimento date not null,
cep int,
numero int(5),
constraint fk_endereco_pessoa foreign key(cep) references endereco(cep),
constraint pk_pessoa primary key (id)
);

create table pessoa_telefone(
id_pessoa int not null,
id_telefone int not null,
constraint fk_pessoa_telefone foreign key(id_pessoa) references pessoa(id),
constraint fk_telefone_pessoa foreign key(id_telefone) references telefone(id)
);

create table conta_login(
id int not null auto_increment,
email varchar(90) not null,
senha varchar(50) not null,
lembrete_senha varchar(60) not null,
id_pessoa int not null,
constraint pk_conta primary key (id),
constraint fk_pessoa_conta foreign key(id_pessoa) references pessoa(id)
);

create table paciente(
id int not null auto_increment,
id_pessoa int not null,
pendencia tinyint not null,
constraint pk_paciente primary key(id),
constraint fk_pessoa_is_paciente foreign key (id_pessoa) references pessoa(id)
);

create table atendente(
id int not null auto_increment,
id_pessoa int,
constraint pk_atendente primary key(id),
constraint fk_pessoa_is_atendente foreign key(id_pessoa) references pessoa(id)
);

create table doutor(
id int not null auto_increment,
id_pessoa int not null,
especialidade varchar(40) not null,
crm bigint not null,
constraint pk_doutor primary key (id),
constraint fk_doutor_is_pessoa foreign key (id_pessoa) references pessoa(id)
);

create table clinica(
id int not null auto_increment,
sigla varchar(6) not null,
nome varchar(50) not null,
cnpj bigint not null,
cep int,
constraint pk_clinica primary key(id),
constraint fk_clinica_has_cep foreign key (cep) references endereco(cep)
);

create table consulta(
id int not null auto_increment,
id_paciente int not null,
id_doutor int not null,
dia date not null,
horario time not null,
constraint pk_consulta primary key (id),
constraint fk_consulta_of_paciente foreign key(id_paciente) references paciente(id),
constraint fk_consulta_from_doutor foreign key(id_doutor) references doutor(id)
);

create table cancelamento(
id int not null auto_increment,
motivo varchar (255) not null,
data_cancelamento date not null,
hora_cancelamento time not null,
data_reagendamento date not null,
hora_reagendamento time not null,
id_consulta int,
id_paciente int,
id_doutor int,
constraint pk_cancelamento primary key(id),
constraint fk_cancelamento_paciente foreign key (id_paciente) references paciente(id),
constraint fk_cancelamento_doutor foreign key (id_doutor) references doutor(id)
);

create table pgto(
id int not null auto_increment,
valor decimal(5,2) not null,
data_pgto date not null,
status_pgto tinyint not null default 0,
forma_pgto enum('Dinheiro','Débito') not null default 'Dinheiro',
id_consulta int not null,
constraint pk_pgto primary key (id),
constraint fk_pagamento_from_consulta foreign key(id_consulta) references consulta(id)
);

#Tabelas de arquivo morto
create table deactivated_pessoa(
id int,
nome varchar(20),
sobrenome varchar(100),
rg char(9),
cpf bigint(11),
data_nascimento date,
endereco_cep int (8),
constraint fk_pessoa_desativada foreign key(id) references pessoa(id)
);

create table deactivated_contalogin(
id int,
email varchar(50),
senha varchar(50),
lembrete_senha varchar (45),
id_pessoa int,
constraint fk_login_desativado foreign key(id) references conta_login(id)
);

create table deactivated_paciente(
id int,
id_pessoa int,
pendencia tinyint,
constraint fk_paciente_desativado foreign key (id) references paciente(id)
);

create table deactivated_atendente(
id int,
id_pessoa int,
constraint fk_atendente_desativada foreign key(id) references atendente(id)
);

create table deactivated_doutor(
id int,
id_pessoa int,
crm bigint,
especialidade varchar(45),
constraint fk_doutor_desativado foreign key(id) references doutor(id)
);