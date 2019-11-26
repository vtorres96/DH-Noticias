create database dh_noticias;

use dh_noticias;

create table mensagens (
	id int(11) primary key not null auto_increment,
    nome varchar(60),
    email varchar(60),
    mensagem varchar(200)
);

create table usuarios (
	id int(11) primary key not null auto_increment,
    nome varchar(60),
    email varchar(60),
    senha varchar(200),
    nivel_acesso boolean
);

create table noticias (
	id int(11) primary key not null auto_increment,
    titulo varchar(60),
    imagem varchar(60),
    descricao varchar(200),
    data_criacao date, 
    data_atualizacao date
);


/* create user admin with password: 123456 and access level: 1 */
insert into usuarios (nome, email, senha, nivel_acesso) values ('admin', 'admin@admin.com', '$2y$10$oEB6br9ll6Wp92r9I3FR3eheAnai5Tn9P0rJkBVqOZglGqUg4QYMq', '1');

/* create user copywriter with password: 123456 and access level: 0 */
insert into usuarios (nome, email, senha, nivel_acesso) values ('redator', 'redator@redator.com', '$2y$10$FxTM0b3RHVP3yssmK7bbJ.GU.tkaOewMKQOHNFsMVljZJC3s4/vX2', '0');