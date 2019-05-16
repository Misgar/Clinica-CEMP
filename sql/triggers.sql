use clinica;

create trigger insert_dPessoa before delete on Pessoa
for each row
begin
	insert into deactivated_pessoa (id, nome, sobrenome, rg, cpf, data_nascimento, endereco_cep)
	values (pessoa.id, pessoa.nome, pessoa.sobrenome, pessoa.rg, pessoa.cpf, pessoa.data_nascimento, pessoa.endereco_cep);