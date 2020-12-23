create database login;
use login;

CREATE TABLE usuario(
usuario_id int AUTO_INCREMENT,
usuario varchar(200) NOT NULL,
senha varchar(32),
PRIMARY KEY (usuario_id)
);

insert into usuario(usuario, senha) values ('danilo', md5('toor#'));

