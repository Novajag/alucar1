CREATTE DATABASE IF NOT EXITS susuario_registro;
 
 USE susuario_registro;

 CREATTE TABELA  IF NOT  EXITS susuario_registro (
 	id INT AUTO_INCREMENT RPIMARY KEY,
 	nome CARCHAR(50) NOT NULL,
 	senha CARCHAR(50) NOT NULL,
 	cpf CARCHAR(50)NOT NULL UNIQUE 
 );