 # FATEC_DES_WEB_2_2022_Avaliacao2

 AVALIAÇÃO DE DESENVOLVIMENTO DE SOFTWARE PHP

 META: ELABORAR UM SITE DE CADASTROS EM PHP E CONEXAO BANCO DE DADOS;

 1. - COMEÇANDO COM DESENVOLVIMENTO DO BANCO DE DADOS:

 #XAMPP E HEIDISQL

 CREATE DATABASE banco_web2

 CREATE TABLE cadastro
 (
  id INT(50) AUTO_INCREMENT,
  nome VARCHAR(50),
  sobrenome VARCHAR(50),
  curso VARCHAR(50),
  telefone VARCHAR(50),
  PRIMARY KEY (id)
 ) 

 CREATE TABLE usuario (
  id INT(50) AUTO_INCREMENT,
  user VARCHAR(50),
  senha VARCHAR(50),
  PRIMARY KEY (id)
 )

 INSERT INTO cadastro (nome, sobrenome, curso, telefone) 
 VALUES
 ('Daniel','Carolino', 'Desenvolvimento_de_software', '19996300297'),
 ('Vanessa','Silva', 'Gestão_empresarial', '19991294785'),
 ('Marcos','Morais', 'Matematica', '19992498546');

 INSERT INTO usuario (user,senha) 
 VALUES
 ('admin', 'admin'),
 ('suport','admin');
	
 SELECT * FROM cadastro;
 SELECT * FROM usuario;

 2. ESTRUTURANDO SITE:
 PÁGINAÇÃO: 1. INDEX.PHP;
	    2. WELCOME.PHP;
            3. CADASTRO.PHP;
            4. PROCESSOS.PHP;
 CONEXÃO AO BANCO: 1. CONEXAO.PHP;
                   2. LOGINBANCO.PHP;
                   3. LOGOUT.PHP;
 README.MD;

 3. SENHAS DE ACESSO:
 LOGIN: admin SENHA: admin
 LOGIN: suport SENHA: admin











