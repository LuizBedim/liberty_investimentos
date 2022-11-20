USE liberty;

SELECT * FROM clientes;

SELECT * FROM super_usuarios;

INSERT INTO super_usuarios (usuario, senha, codigo) VALUES ('Luiz', '123', '321');

INSERT INTO clientes (nome, sobrenome, email, senha, cpf, celular, cep, numero) VALUES ("Luiz", "Bedim", "teste4@gmail.com", "123", "999.999.999-00", "(11)99714-1247", "19013-240", "1000");