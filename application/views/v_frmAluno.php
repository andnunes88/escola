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
    <input type="text" name="txt_aluno" id="txt_aluno" value="ADILSON FERREIRA REIS" class="nome">
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
		<input type="text" name="txt_email" id="txt_email" value="data">
	</div>
  </label>
  <label>
	<div class="col6">
		<span>Email</span>
		<input type="text" name="txt_facebook" id="txt_facebook" value="pai">
	</div>
	<div class="col6">
		<span>Senha</span>
		<input type="text" name="txt_twitter" id="txt_twitter" value="mãe">
	</div>
   </label>
    
 
  <label>
	<div class="col6">
		<span>Fone</span>
		<input type="text" name="txt_fone" id="txt_fone" value="fone" class="br">
	</div>

	<div class="col6">
		<span>Celular</span>
		<input type="text" name="txt_celular" id="txt_celular" value="celular" class="br">
	</div>	
  </label>
 
	</li>
		
		<!-- Aba 2 -->
		
<li id="aba2" style="display: none;">

  <label>
	<span>Endereço</span>
    <input type="text" name="txt_endereco" id="txt_endereco" value="endereco">
  </label>
  
  <label>
	<span>Email responsavel</span>
    <input type="text" name="txt_endereco" id="txt_endereco" value="email responsavel">
  </label>
  
  <label>
	<span>Bairro</span>
    <input type="text" name="txt_bairro" id="txt_bairro" value="bairro">
  </label>
  
  <label>
	<div class="col6">
		<span class="spans">Cidade</span>
		<input type="text" name="txt_cidade" id="txt_cidade" value="cidade">
	</div>
	<div class="col6">
		<span class="spans">CEP</span>
		<input type="text" name="txt_cep" id="txt_cep" value="cep">
	</div>
	</label>
	
	<label>
	<div class="col6">
		<span class="spans">Estado</span>
		<input type="text" name="txt_uf" id="txt_uf" value="ma" >
	</div>
	<div class="col6">
		<span class="spans">Celular</span>
		<input type="text" name="txt_estado_civil" id="txt_estado_civil">
	</div>
  </label>
			
		</li>
	
		<!-- Aba 3 -->

		<li id="aba3" style="display: none;">
		
			<label>
				<div class="col6">
					<span>RG</span>
					<input type="text" name="txt_rg" id="txt_rg" value="rg">
				</div>
				
				<div class="col6">
					<span>CPF</span>
					<input type="text" name="txt_cpf" id="txt_cpf" value="72120738300" class="br">
				</div>
			</label>
				
	
		</li>
	
	
	
	
	<label align="center">
			<input type="hidden" name="id_professor" value="7">											
			<input type="submit" name="logar" id="logar" value="Salvar" class="but salvar">
	</label>
                                  

</ul>
	                    
		
</div>				
   
        </form>
	</div>
</div>