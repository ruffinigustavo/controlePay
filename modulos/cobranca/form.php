<h2>Cobrança - Gerar Nova</h2><br>
<form action="#" method="post">

	<fieldset>

		<div class="grid-3">
			<label>* Nome</label>
			<input type="text" name="form[nome_razao_social]" value="">
		</div>

		<div class="grid-3">
			<label>* Tipo de cadastro</label>
			<select name="form[tipo_cadastro]">
				<option value=""></option>
			</select>
		</div>

		<div class="grid-3">
			<label>* E-mail</label>
			<input type="email" name="form[email]" value="">
		</div>

		<div class="grid-3">
			<label>* CPF/CNPJ</label>
			<input type="text" name="form[cpf_cnpj]" id="cpfcnpj" value="">
		</div>

		<div class="container"></div>

		<div class="grid-3">
			<label>* Sexo</label>
			<select name="form[sexo]">
				<option value=""></option>
			</select>
		</div>

		<div class="grid-3">
			<label>* Data de nascimento</label>
			<input type="date" name="form[nascimento]" value="">
		</div>

	</fieldset>

	<fieldset>

		<div class="grid-3">
			<label>E-mail secundario</label>
			<input type="email" name="form[email_secundario]" value="">
		</div>

		<div class="grid-3">
			<label>* Telefone (1)</label>
			<input type="tel" name="form[tel1]" maxlength="15" class="tel1" value="">
		</div>

		<div class="grid-3">
			<label>Telefone (2)</label>
			<input type="tel" name="form[tel2]" maxlength="15" class="tel2" value="">
		</div>

		<div class="grid-3">
			<label>Telefone (3)</label>
			<input type="tel" name="form[tel3]" maxlength="15" class="tel3" value="">
		</div>

	</fieldset>

	<fieldset>

		<div class="grid-3">
			<label>* CEP</label>
			<input type="text" name="form[cep]" maxlength="8" id="cep" value="">
		</div>

		<div class="grid-3">
			<label>* Endereço</label>
			<input type="text" name="form[endereco]" id="logradouro" value="">
		</div>

		<div class="grid-3">
			<label>* Número</label>
			<input type="text" name="form[numero]" id="numero" value="">
		</div>

		<div class="grid-3">
			<label>Complemento</label>
			<input type="text" name="form[complemento]" value="">
		</div>

		<div class="grid-3">
			<label>* Bairro</label>
			<input type="text" name="form[bairro]" id="bairro" value="">
		</div>

		<div class="grid-3">
			<label>* Estado</label>
			<input type="text" name="form[uf]" id="uf" maxlength="2" value="">
		</div>

		<div class="grid-3">
			<label>* Cidade</label>
			<input type="text" name="form[cidade]" id="cidade" value="">
		</div>

	</fieldset>

	<div class="grid-12">
		<input type="submit" name="submit" value="SALVAR INFORMAÇÕES">
	</div>

</form>