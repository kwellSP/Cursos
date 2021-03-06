create table dim_status_func(
id_status integer primary key identity(1,1) not null,
desc_status varchar(100) not null
)

go
insert into dim_status_func(desc_status) values(
'ativo'
)
insert into dim_status_func(desc_status) values(
'inativo'
)

go

create table dim_grupo(
id_grupo integer primary key identity(1,1) not null,
desc_grupo varchar(100) not null
)

go


create table dim_filial(
id_filial integer primary key identity(1,1) not null,
desc_filial varchar(100)
)
go
insert into dim_filial(desc_filial)values('FBT BHZ')
insert into dim_filial(desc_filial)values('FBT BSB')
insert into dim_filial(desc_filial)values('FBT CPQ')
insert into dim_filial(desc_filial)values('FBT POA')
insert into dim_filial(desc_filial)values('FBT RIO')
insert into dim_filial(desc_filial)values('FBT SAO')

go
create table dim_cargo(
id_cargo integer primary key identity(1,1) not null,
desc_cargo varchar(100)
)
go
insert into dim_cargo(desc_cargo) values('Lider')
insert into dim_cargo(desc_cargo) values('ADM')
insert into dim_cargo(desc_cargo) values('Gerente')
insert into dim_cargo(desc_cargo) values('Coordenador')
insert into dim_cargo(desc_cargo) values('Emissor')
insert into dim_cargo(desc_cargo) values('Analista de Relatórios')
insert into dim_cargo(desc_cargo) values('Analista de Settlement')
insert into dim_cargo(desc_cargo) values('Analista de Qualidade')
insert into dim_cargo(desc_cargo) values('RM')


go
create table dim_funcionario(
id_funcionario integer primary key  identity(1,1) not null,
nome varchar(100) not null,
email varchar(100) not null,
rg varchar(100),
cpf varchar(100),
id_apps varchar(100),
dt_nasc date not null,
dt_admissao date not null,
login_avaya varchar(50),
login_sabre varchar(50),
login_amadeus varchar(50),
login_galileo varchar(50),
login_maisfly varchar(50),
id_filial integer not null,
id_cargo integer not null,
id_grupo integer not null,
id_status integer not null,
id_coordenador integer not null,
id_gerente integer not null,
id_lider integer not null,


FOREIGN KEY (id_filial) REFERENCES dim_filial(id_filial),
FOREIGN KEY (id_cargo) REFERENCES dim_cargo(id_cargo),
FOREIGN KEY (id_grupo) REFERENCES dim_grupo(id_grupo),
FOREIGN KEY (id_status) REFERENCES dim_status_func(id_status),
FOREIGN KEY (id_coordenador) REFERENCES dim_funcionario(id_funcionario),
FOREIGN KEY (id_gerente) REFERENCES dim_funcionario(id_funcionario),
FOREIGN KEY (id_lider) REFERENCES dim_funcionario(id_funcionario),
)
