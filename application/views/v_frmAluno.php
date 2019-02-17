<?php 
$id_aluno = isset ($aluno->id_aluno) ? $aluno->id_aluno : '';
$nome 	= isset ($aluno->nome_aluno) ? $aluno->nome_aluno : '';
$foto	= isset ($aluno->foto) ? $aluno->foto : '';
$sexo	= isset ($aluno->sexo) ? $aluno->sexo : '';
$pai	= isset ($aluno->nome_pai) ? $aluno->nome_pai : '';
$mae	= isset ($aluno->nome_mae) ? $aluno->nome_mae : '';

$data_nascimento	= isset ($aluno->nascimento) ? $aluno->nascimento : '';
$email	= isset ($aluno->email_aluno) ? $aluno->email_aluno : '';
$senha	= isset ($aluno->senha) ? $aluno->senha : '';
$endereco	= isset ($aluno->endereco_aluno) ? $aluno->endereco_aluno : '';
$bairro	= isset ($aluno->bairro_aluno) ? $aluno->bairro_aluno : '';
$cidade	= isset ($aluno->cidade_aluno) ? $aluno->cidade_aluno : '';
$uf	= isset ($aluno->uf) ? $aluno->uf : '';
$cep	= isset ($aluno->cep) ? $aluno->cep : '';
$celular	= isset ($aluno->celular_aluno) ? $aluno->celular_aluno : '';
$fone_responsavel	= isset ($aluno->fone_responsavel) ? $aluno->fone_responsavel : '';
$email_responsavel	= isset ($aluno->email_responsavel) ? $aluno->email_responsavel : '';
$rg	= isset ($aluno->rg_aluno) ? $aluno->rg_aluno : '';
$cpf	= isset ($aluno->cpf_aluno) ? $aluno->cpf_aluno : '';

?>

<?php include"menu.php";?>
<div class="base-direito">
	<h1 class="titulo"><i class="icone cad"></i>CADASTRO DE aluno</h1>
<div class="base-form">
	
	<div id="caixa">

	<!-- Abas -->

	<p id="abas">
		<a href="#aba1" class="selected">identificação</a>
		<a href="#aba2" class="">Endereço</a>
		<a href="#aba3">Documentação</a>
	</p>
	
	<!-- Conteúdo das abas -->
	
	<ul id="conteudos">
		<li id="aba1" style="display: inline-block;">
	
	
<form action="<?php echo base_url() ?>/aluno/salvar" method="post">
  
  <label>
	<div class="col3">
		<img src="<?php echo base_url() ?>/assets/img/img-
		foto.png" class="foto">
	</div>	
	<div class="col9">	
		<label>Escolha uma foto</label>
		<input name="txt_foto" type="file" class="tm">
		<small>Tamanho máximo 300KB</small>
	</div>
	</label>
  <label>
	<span>Nome</span>
    <input type="text" name="txt_aluno" id="txt_aluno" value="<?php echo $nome; ?>" class="nome">
  </label>
  <label>
	<div class="col6">
		
		<div class="col6">	<span> Sexo</span>
			<input type="radio" name="txt_sexo" value="Masculino" checked="">Masculino
		</div>
		<div class="col6">
			<span>&nbsp;</span>
			<input type="radio" name="txt_sexo" value="Feminino">Feminino
		</div>
	</div>
	<div class="col6">
		<span>Data</span>
		<input type="text" name="txt_nascimento" id="txt_nascimento" value="<?php echo $data_nascimento; ?>">
	</div>
  </label>
  <label>
	<div class="col6">
		<span>Email</span>
		<input type="text" name="txt_email" id="txt_email" value="<?php echo $email; ?>">
	</div>
	<div class="col6">
		<span>Senha</span>
		<input type="text" name="txt_senha" id="txt_senha" value="<?php echo $senha; ?>">
	</div>
   </label>
    
 
  <label>
	<div class="col6">
		<span>Fone</span>
		<input type="text" name="txt_fone" id="txt_fone" value="<?php echo $fone_responsavel; ?>" class="br">
	</div>

	<div class="col6">
		<span>Celular</span>
		<input type="text" name="txt_celular" id="txt_celular" value="<?php echo $celular; ?>" class="br">
	</div>	
  </label>
 
	</li>
		
		<!-- Aba 2 -->
		
<li id="aba2" style="display: none;">

  <label>
	<span>Endereço</span>
    <input type="text" name="txt_endereco" id="txt_endereco" value="<?php echo $endereco; ?>">
  </label>
  
  <label>
	<span>Email responsavel</span>
    <input type="text" name="txt_email_responsavel" id="txt_email_responsavel" value="<?php echo $email_responsavel; ?>">
  </label>
  
  <label>
	<span>Bairro</span>
    <input type="text" name="txt_bairro" id="txt_bairro" value="<?php echo $bairro; ?>">
  </label>
  
  <label>
	<div class="col6">
		<span class="spans">Cidade</span>
		<input type="text" name="txt_cidade" id="txt_cidade" value="<?php echo $cidade; ?>">
	</div>
	<div class="col6">
		<span class="spans">CEP</span>
		<input type="text" name="txt_cep" id="txt_cep" value="<?php echo $cep; ?>">
	</div>
	</label>
	
	<label>
	<div class="col6">
		<span class="spans">Estado</span>
		<input type="text" name="txt_uf" id="txt_uf" value="<?php echo $uf; ?>" >
	</div>
	<div class="col6">
		<span class="spans">Celular</span>
		<input type="text" name="txt_celular" id="txt_celular" value="<?php echo $celular; ?>">
	</div>
  </label>
			
		</li>
	
		<!-- Aba 3 -->

		<li id="aba3" style="display: none;">
		
			<label>
				<div class="col6">
					<span>RG</span>
					<input type="text" name="txt_rg" id="txt_rg" value="<?php echo $cep; ?>">
				</div>
				
				<div class="col6">
					<span>CPF</span>
					<input type="text" name="txt_cpf" id="txt_cpf" value="<?php echo $cep; ?>" class="br">
				</div>
			</label>
				
	
		</li>
	
	
	<label align="center">
			<input type="hidden" name="id_aluno" value="<?php echo $id_aluno; ?>">											
			<input type="submit" name="logar" id="logar" value="Salvar" class="but salvar">
	</label>
                                  

</ul>
	                    
		
</div>				
   
        </form>
	</div>
</div>