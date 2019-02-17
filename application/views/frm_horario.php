<?php include"menu.php";?>
<div class="base-direito">
	<h1 class="titulo"><i class="icone cad"></i>CADASTRO DE HORÁRIO</h1>
<div class="base-form">
	<form action="" method="post">
		<label>      
			<div  class="col6">	
				<span>Horário</span>
				<input type="text" name="" id="" value="">
			</div>  
			<div class="col6">
				<span>Turno</span>
				<select name="txt_turno">
                     <option value="Matutino"> Matutino </option>
                     <option value="Vespertino"> Vespertino </option>
                     <option value="Noturno"> Noturno </option>                        
                </select>
			</div>
       </label>
	   
		<label>      
			<div  class="col6">	
				<span>Início</span>
				<input type="text" name="" id="" value="">
			</div>  
			<div class="col6">
				<span>Fim</span>
				<input type="text" name="" id="" value="">
			</div>
       </label>
	  	
           <input type="hidden" name="txt_id_ano_letivo" value="">					

           <input type="submit" name="logar" id="logar" value="Salvar" class="but salvar">					
   
        </form>
	</div>
</div>