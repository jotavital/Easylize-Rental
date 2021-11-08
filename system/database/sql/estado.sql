-- Create Table --

CREATE TABLE IF NOT EXISTS estado (
    id       INT          NOT NULL AUTO_INCREMENT,
    codigo_uf INT          NOT NULL,
    nome     VARCHAR (50) NOT NULL,
    uf       CHAR 	 (2)  NOT NULL,
    regiao   INT	      NOT NULL,
    PRIMARY KEY (id)
);

-- Insert Data --

INSERT INTO estado (codigo_uf, nome, uf, regiao) values (12, 'Acre', 'AC', 1);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (27, 'Alagoas', 'AL', 2);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (16, 'Amapá', 'AP', 1);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (13, 'Amazonas', 'AM', 1);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (29, 'Bahia', 'BA', 2);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (23, 'Ceará', 'CE', 2);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (53, 'Distrito Federal', 'DF', 5);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (32, 'Espírito Santo', 'ES', 3);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (52, 'Goiás', 'GO', 5);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (21, 'Maranhão', 'MA', 2);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (51, 'Mato Grosso', 'MT', 5);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (50, 'Mato Grosso do Sul', 'MS', 5);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (31, 'Minas Gerais', 'MG', 3);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (15, 'Pará', 'PA', 1);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (25, 'Paraíba', 'PB', 2);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (41, 'Paraná', 'PR', 4);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (26, 'Pernambuco', 'PE', 2);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (22, 'Piauí', 'PI', 2);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (33, 'Rio de Janeiro', 'RJ', 3);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (24, 'Rio Grande do Norte', 'RN', 2);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (43, 'Rio Grande do Sul', 'RS', 4);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (11, 'Rondônia', 'RO', 1);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (14, 'Roraima', 'RR', 1);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (42, 'Santa Catarina', 'SC', 4);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (35, 'São Paulo', 'SP', 3);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (28, 'Sergipe', 'SE', 2);
INSERT INTO estado (codigo_uf, nome, uf, regiao) values (17, 'Tocantins', 'TO', 1);
