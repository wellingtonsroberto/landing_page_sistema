
CREATE TABLE usuarios (
	id_usuario SMALLINT ( 5 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR ( 45 ) NOT NULL,	
	email VARCHAR ( 64 ) NOT NULL UNIQUE,
	data_nascimento DATE NOT NULL,
	sexo ENUM ( 'M', 'F' ) NOT NULL,	 
	preferencias SET ( 'R', 'S', 'P', 'F' ) NOT NULL COMMENT 'R=Romance;S=Suspense;P=Policial;F=Ficção',
	salario DECIMAL ( 10,2 ) NOT NULL,
	endereco VARCHAR ( 30 ) NOT NULL,
	bairro VARCHAR ( 20 ) NOT NULL,
	cidade VARCHAR ( 45 ) NOT NULL,
	fk_estado SMALLINT ( 5 ) UNSIGNED NOT NULL,
	login VARCHAR ( 40 ) NOT NULL,
	senha CHAR ( 32 ) NOT NULL
);

CREATE TABLE estados (
	id_estado SMALLINT ( 5 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	uf CHAR ( 2 ) NOT NULL,
	estado VARCHAR ( 19 ) NOT NULL UNIQUE	
);

INSERT INTO estados VALUES ( NULL , "AC", "Acre");
INSERT INTO estados VALUES ( NULL , "AL", "Alagoas");
INSERT INTO estados VALUES ( NULL , "AP", "Amapá");						
INSERT INTO estados VALUES ( NULL , "AM", "Amazonas");
INSERT INTO estados VALUES ( NULL , "BA", "Bahia");
INSERT INTO estados VALUES ( NULL , "CE", "Ceará");
INSERT INTO estados VALUES ( NULL , "DF", "Distrito Federal");
INSERT INTO estados VALUES ( NULL , "ES", "Espirito Santo");
INSERT INTO estados VALUES ( NULL , "GO", "Goiás");
INSERT INTO estados VALUES ( NULL , "MA", "Maranhão");
INSERT INTO estados VALUES ( NULL , "MT", "Mato Grosso");
INSERT INTO estados VALUES ( NULL , "MS", "Mato Grosso do Sul");
INSERT INTO estados VALUES ( NULL , "MG", "Minas Gerais");
INSERT INTO estados VALUES ( NULL , "PA", "Pará");
INSERT INTO estados VALUES ( NULL , "PB", "Paraíba");
INSERT INTO estados VALUES ( NULL , "PR", "Paraná");
INSERT INTO estados VALUES ( NULL , "PE", "Pernambuco");
INSERT INTO estados VALUES ( NULL , "PI", "Piauí");
INSERT INTO estados VALUES ( NULL , "RN", "Rio Grande do Norte");
INSERT INTO estados VALUES ( NULL , "RS", "Rio Grande do Sul");
INSERT INTO estados VALUES ( NULL , "RJ", "Rio de Janeiro");
INSERT INTO estados VALUES ( NULL , "RO", "Rondônia");
INSERT INTO estados VALUES ( NULL , "RR", "Roraima");
INSERT INTO estados VALUES ( NULL , "SC", "Santa Catarina");
INSERT INTO estados VALUES ( NULL , "SP", "São Paulo");
INSERT INTO estados VALUES ( NULL , "SE", "Sergipe");
INSERT INTO estados VALUES ( NULL , "TO", "Tocantins");  

