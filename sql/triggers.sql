use clinica;

delimiter $
create trigger insert_dPessoa before delete on Pessoa
for each row
begin
	insert into deactivated_pessoa (id, nome, sobrenome, rg, cpf, data_nascimento, endereco_cep)
	values (pessoa.id, pessoa.nome, pessoa.sobrenome, pessoa.rg, pessoa.cpf, pessoa.data_nascimento, pessoa.endereco_cep);
end$

create trigger insert_dPaciente before delete on Paciente
for each row
begin
	insert into deactivated_paciente(id, id_pessoa, pendencia)
    values (paciente.id, paciente.id_pessoa, paciente.pendencia);
end$

create trigger insert_dDoutor before delete on Doutor
for each row
begin
	insert into deactivated_doutor (id,id_pessoa,crm,especialidade)
    values (doutor.id,doutor.id_pessoa,doutor.crm,doutor.especialidade);
end $

create trigger insert_dContaLogin before delete on conta_login
for each row
begin
	insert into deactivated_contalogin (id, email, senha, lembrete_senha, id_pessoa)
    values (conta_login.id, conta_login.email, conta_login.senha, conta_login.lembrete_senha, conta_login.id_pessoa);
end $

create trigger insert_dAtendente before delete on atendente
for each row
begin
	insert into deactivated_atendente(id,id_pessoa)
    values (atendente.id, atendente.id_pessoa);
end $
delimiter ;