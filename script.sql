# entrada pelo shell
mysql -u root

#criar base
create database projetophp3;
# chamar a base
use projetophp3;

#criar tabela
create table usuario(
    idusuario int  auto_increment primary key,
    nome varchar(50),
    login varchar(20) unique,
    senha varchar(50),
    perfil enum('adm','user')
);
#inserir dado na tabela
insert into usuario values(null,'phil','admin',md5('123'),'adm'),
(null,'marcia','marcia',md5('123'),'adm'),
(null,'daniel','daniel',md5('123'),'user'),
(null,'ricciardo','ricciardo',md5('123'),'user'),
(null,'jabule bilu','jabule',md5('123'),'user');
select * from usuario;

create table produto(

    idproduto int auto_increment primary key,
    nome varchar(20),
    estoque int,
    valor double,
    categoria varchar(20),
    dificuldade varchar(30),
    comentario varchar(150)
);
desc produto;

insert into produto values(null,'Jabuti',15,250.00,'Tartaruga','Pouco Experiente','topzera');


select * from produto;
