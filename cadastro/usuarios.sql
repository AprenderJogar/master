Create table usuarios (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
nome VARCHAR( 50 ) NOT NULL ,
email VARCHAR( 50 ),
login VARCHAR(40)NOT NULL ,
senha VARCHAR(40)NOT NULL ,
telefone VARCHAR(20),
cpf VARCHAR(30),
campo VARCHAR(30),
instituicao VARCHAR(40),
Primary Key (ID)) ENGINE = MyISAM;

Create table infojogo (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
jogo VARCHAR(50),
horas INTEGER(50) ,
minutos INTEGER(50),
segundos INTEGER(50),
centesimas INTEGER(40),
pontos INTEGER(40),
Primary Key (ID)) ENGINE = MyISAM;

Create table instituicao (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
nomeInstituicao VARCHAR(50) NOT NULL,
cidade VARCHAR(50) NOT NULL,
estado VARCHAR(50) NOT NULL,
pais VARCHAR(50) NOT NULL,
rua VARCHAR(50) NOT NULL,
jardim VARCHAR(50) NOT NULL,
Primary Key (ID)) ENGINE = MyISAM;