<?php 

$id_professor = isset ($professor->id_professor) ? $professor->id_professor : '';
$nome = isset ($professor->nome_professor) ? $professor->nome_professor : '';
$email = isset ($professor->email_professor) ? $professor->email_professor : '';
$telefone = isset ($professor->fone_professor) ? $professor->fone_professor : '';
$celular = isset ($professor->celular_professor) ? $professor->celular_professor : '';
$sexo = isset ($professor->sexo_professor) ? $professor->sexo_professor : '';
$endereco = isset ($professor->endereco_professor) ? $professor->endereco_professor : '';
$bairro = isset ($professor->bairro_professor) ? $professor->bairro_professor : '';
$cidade = isset ($professor->cidade_professor) ? $professor->cidade_professor : '';
$cep = isset ($professor->cep_professor) ? $professor->cep_professor : '';
$estado = isset ($professor->uf_professor) ? $professor->uf_professor : '';
$estado_civil = isset ($professor->estado_civil_professor) ? $professor->estado_civil_professor : '';
$rg = isset ($professor->rg_professor) ? $professor->rg_professor : '';
$cpf = isset ($professor->cpf_professor) ? $professor->cpf_professor : '';

include"menu.php";

?>
<div class="base-direito">
	<h1 class="titulo"><i class="icone cad"></i>CADASTRO DE professor</h1>
	<div class="base-form">
		<form action="<?php echo base_url() ?>/professor/salvar" method="post">
			<div id="caixa">

				<!-- Abas -->

				<p id="abas">
					<a href="#aba1" class="selected">Contatos</a>
					<a href="#aba2" class="">Dados pessoais</a>
					<a href="#aba3">Documentação</a>
				</p>

				<!-- Conteúdo das abas -->

				<ul id="conteudos">
					<li id="aba1" style="display: inline-block;">						

						<form action="" method="post">

							<label>
								<div class="col3">
									<img src="img/img-foto.png" class="foto">
								</div>	
								<div class="col9">	
									<label>Escolha uma foto</label>
									<input name="txt_foto" type="file" class="tm">
									<small>Tamanho máximo 300KB</small>
								</div>
							</label>
							<label>
								<span>Nome</span>
								<input type="text" name="txt_professor" id="txt_professor" value="<?php echo $nome ?>" class="nome">
							</label>

							<label>

								<div class="col12">
									<span>Email</span>
									<input type="text" name="txt_email" id="txt_email" value="<?php echo $email ?>" class="nome">
								</div>
							</label>


							<label>
								<div class="col6">
									<span>Telefone</span>
									<input type="text" name="txt_fone" id="txt_fone" value="<?php echo $telefone ?>" class="br">
								</div>

								<div class="col6">
									<span>Celular</span>
									<input type="text" name="txt_celular" id="txt_celular" value="<?php echo $celular ?>" class="br">
								</div>	
							</label>

						</li>

						<!-- Aba 2 -->

						<li id="aba2" style="display: none;">

							<span> Sexo</span> 
							<label>	
								<div class="col2">
									<input type="radio" name="txt_sexo" value="Masculino" <?php if($sexo == 'Masculino') echo "checked" ?>>Masculino
								</div>
								<div class="col2">
									<input type="radio" name="txt_sexo" value="Feminino" <?php if($sexo == 'Feminino') echo "checked" ?>>Feminino
								</div>
							</label>

							<label>
								<span>Endereço</span>
								<input type="text" name="txt_endereco" id="txt_endereco" value="<?php echo $endereco ?>">
							</label>

							<label>
								<span>Bairro</span>
								<input type="text" name="txt_bairro" id="txt_bairro" value="<?php echo $bairro ?>">
							</label>
							<label>
								<div class="col6">
									<span>Cidade</span>
									<input type="text" name="txt_cidade" id="txt_cidade" value="<?php echo $cidade ?>">
								</div>
								<div class="col6">
									<span>CEP</span>
									<input type="text" name="txt_cep" id="txt_cep" value="<?php echo $cep ?>">
								</div>
							</label>

							<label>
								<div class="col6">
									<span class="spans">Estado</span>
									<input type="text" name="txt_uf" id="txt_uf" value="<?php echo $estado ?>" class="fone">
								</div>
								<div class="col6">
									<span class="spans">Estado Civil</span>
									<input type="text" name="txt_estado_civil" id="txt_estado_civil" value="<?php echo $estado_civil ?>">
								</div>
							</label>

						</li>

						<!-- Aba 3 -->

						<li id="aba3" style="display: none;">

							<p class="obrigatorio">(*)campos obrigatórios</p>

							<label>
								<div class="col6">
									<span>RG</span>
									<input type="text" name="txt_rg" id="txt_rg" value="rg">
								</div>

								<div class="col6">
									<span>CPF*</span>
									<input type="text" name="txt_cpf" id="txt_cpf" value="72120738300" class="br">
								</div>
							</label>

						</li>

						<label align="center">
							<input type="hidden" name="id_professor" value="<?php echo $id_professor ?>">											
							<input type="submit" name="logar" id="logar" value="Salvar" class="but salvar">
						</label>

					</ul>

				</div>				

			</form>
		</div>
	</div>