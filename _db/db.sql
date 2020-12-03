create database login;
use login;
select * from usuario;

insert into usuario(usuario, senha) values ('COLOCAAQUIOUSUARIO', md5('COLOCAAQUIASENHA'));