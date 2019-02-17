<?php include"menu.php";?>
<div class="base-direito">
	<h1 class="titulo"><i class="icone cad"></i>CADASTRO DE professor</h1>
<div class="base-form">
	<form action="" method="post">
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
    <input type="text" name="txt_professor" id="txt_professor" value="ADILSON FERREIRA REIS" class="nome">
  </label>
  <label>
  <div class="col6">
		<span>Site</span>
		<input type="text" name="txt_site" id="txt_site" value="site" class="nome">
	</div>
	<div class="col6">
		<span>Email</span>
		<input type="text" name="txt_email" id="txt_email" value="email" class="nome">
	</div>
  </label>
  <label>
	<div class="col6">
		<span>Facebook</span>
		<input type="text" name="txt_facebook" id="txt_facebook" value="face" class="nome">
	</div>
	<div class="col6">
		<span>Twitter</span>
		<input type="text" name="txt_twitter" id="txt_twitter" value="twiter" class="nome">
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

<span> Sexo</span> 
 <label>	
	<div class="col2">
		<input type="radio" name="txt_sexo" value="Masculino" checked="">Masculino
	</div>
	<div class="col2">
		<input type="radio" name="txt_sexo" value="Feminino">Feminino
	</div>
  </label>
  
  <label>
	<span>Endereço</span>
    <input type="text" name="txt_endereco" id="txt_endereco" value="endereco">
  </label>
  
  <label>
	<span>Bairro</span>
    <input type="text" name="txt_bairro" id="txt_bairro" value="bairro">
  </label>
  <label>
	<div class="col6">
		<span>Cidade</span>
		<input type="text" name="txt_cidade" id="txt_cidade" value="cidade">
	</div>
	<div class="col6">
		<span>CEP</span>
		<input type="text" name="txt_cep" id="txt_cep" value="cep">
	</div>
	</label>
	
	<label>
	<div class="col6">
		<span class="spans">Estado</span>
		<input type="text" name="txt_uf" id="txt_uf" value="ma" class="fone">
	</div>
	<div class="col6">
		<span class="spans">Estado Civil</span>
		<input type="text" name="txt_estado_civil" id="txt_estado_civil" value="civil">
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
			<input type="hidden" name="id_professor" value="7">											
			<input type="submit" name="logar" id="logar" value="Salvar" class="but salvar">
	</label>
                                  

</ul>
	                    
		
</div>				
   
        </form>
	</div>
</div>