<?php include"menu.php";?>
<div class="base-direito">
	<h1 class="titulo"><i class="icone cad"></i>CADASTRO DE SÉRIE</h1>
<div class="base-form">
	<form action="<?php echo base_url() ?>/serie/salvar" method="post">
		<label>
        
        <span>Série</span>
            <input type="text" name="txt_serie" id="" value="">
       </label>
	  	
           <input type="hidden" name="txt_id_ano_letivo" value="">					

           <input type="submit" name="logar" id="logar" value="Salvar" class="but salvar">					
   
        </form>
	</div>
</div>