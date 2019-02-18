<?php 

$id_calendario = isset ($calendario->id_calendario) ? $calendario->id_calendario : '';
$id_ano_letivo = isset ($calendario->id_ano_letivo) ? $calendario->id_ano_letivo : '';
$tem_aula   = isset ($calendario->tem_aula) ? $calendario->tem_aula : '';
$feriado = isset ($calendario->feriado) ? $calendario->feriado : '';
$data_calendario = isset ($calendario->data_calendario) ? $calendario->data_calendario : '';
$descricao_calendario  = isset ($calendario->descricao_calendario) ? $calendario->descricao_calendario : '';

include"menu.php";

?>

<div class="base-direito">
	<h1 class="titulo"><i class="icone cad"></i>Cadastro de Calendário</h1>
  <div class="base-form">
   <form action="<?php echo base_url() ?>calendario/salvar" method="post">

    <label>
      <div class="col6">
        <span>Ano Letivo</span>
          <select name="txt_id_ano_letivo">
            <?php 
              
              foreach ($anoLetivo as $ano) {
                $valor = $ano->id_ano_letivo;
                $selecionado = ($valor == $txt_ano_letivo) ? "selected" : "";             
                echo "<option value=$valor $selecionado> $ano->descricao</option>";               
             }

            ?>         
                      
          </select>
      </div>

      <div class="col6">
        <span>Descrição</span>
        <input type="text" name="txt_descricao" id="txt_descricao" value="<?php echo $descricao_calendario ?>">
      </div>
    </label>

     <label>
      <div class="col6">
        <span>Data</span>
        <input type="date" name="txt_data" id="txt_data" value="<?php echo $data_calendario ?>">
      </div>

      <div class="col6">
        <span>Tem Aula</span>
          <select name="txt_tem_aula">
            <option value="s">Sim</option>
            <option value="n">Não</option>
          </select>
      </div>
    </label>
    
    <label>
      <div class="col6">
        <span>Feriado</span>
          <select name="txt_feriado">
            <option value="s">Sim</option>
            <option value="n">Não</option>
          </select>
      </div>
    </label>

   <input type="hidden" name="txt_id_calendario" value="<?php echo $id_calendario ?>">					

   <input type="submit" value="Salvar" class="but salvar">					
   
 </form>
</div>
</div>