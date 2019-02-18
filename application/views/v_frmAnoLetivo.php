<?php 

$descricao = isset ($ano->descricao) ? $ano->descricao : '';
$qtde_turmas = isset ($ano->qtde_turmas) ? $ano->qtde_turmas : '';
$inicio_matricula = isset ($ano->inicio_matricula) ? $ano->inicio_matricula : '';
$fim_matricula = isset ($ano->fim_matricula) ? $ano->fim_matricula : '';
$inicio_ano_letivo = isset ($ano->inicio_ano_letivo) ? $ano->inicio_ano_letivo : '';
$fim_ano_letivo = isset ($ano->fim_ano_letivo) ? $ano->fim_ano_letivo : '';
$inicio_primeiro_bimestre = isset ($ano->inicio_primeiro_bimestre) ? $ano->inicio_primeiro_bimestre : '';
$fim_primeiro_bimestre = isset ($ano->fim_primeiro_bimestre) ? $ano->fim_primeiro_bimestre : '';
$inicio_segundo_bimestre = isset ($ano->inicio_segundo_bimestre) ? $ano->inicio_segundo_bimestre : '';
$fim_segundo_bimestre = isset ($ano->fim_segundo_bimestre) ? $ano->fim_segundo_bimestre : '';
$inicio_terceiro_bimestre = isset ($ano->inicio_terceiro_bimestre) ? $ano->inicio_terceiro_bimestre : '';
$fim_terceiro_bimestre = isset ($ano->fim_terceiro_bimestre) ? $ano->fim_terceiro_bimestre : '';
$inicio_quarto_bimestre = isset ($ano->inicio_quarto_bimestre) ? $ano->inicio_quarto_bimestre : '';
$fim_quarto_bimestre = isset ($ano->fim_quarto_bimestre) ? $ano->fim_quarto_bimestre : '';

include"menu.php";

?>
<div class="base-direito">
	<h1 class="titulo"><i class="icone cad"></i>CADASTRO DE ANO LETIVO</h1>
    <div class="base-form">
       <form action="<?php echo base_url() ?>ano/salvar" method="post">
          <label>
            <div class="col6">
                <span>Descrição</span>
                <input type="text" name="txt_descricao" id="txt_descricao" value="<?php echo $descricao ?>">
            </div>

            <div class="col6">
               <span>Qtde Turmas</span>
               <input type="text" name="txt_qtde_turmas" id="txt_qtde_turmas" value="<?php echo $qtde_turmas ?>">
           </div>
       </label>
       <label>
        <div class="col6">
            <span>Início Matrícula</span>
            <input type="date" name="txt_inicio_matricula" id="txt_inicio_matricula" value="<?php echo $inicio_matricula ?>">
        </div>

        <div class="col6">
            <span>Fim Matrícula</span>
            <input type="date" name="txt_fim_matricula" id="txt_fim_matricula" value="<?php echo $fim_matricula ?>">
        </div>
    </label>
    
    <label>		
        <div class="col6">
            <span>Início do Ano Letivo</span>
            <input type="date" name="txt_inicio_ano_letivo" id="txt_inicio_ano_letivo" value="<?php echo $inicio_ano_letivo ?>">
        </div>

        <div class="col6">
            <span>Fim do Ano Letivo</span>
            <input type="date" name="txt_fim_ano_letivo" id="txt_fim_ano_letivo" value="<?php echo $fim_ano_letivo ?>">
        </div>
    </label>
    <label>
        <div class="col6">
            <span>Início primeiro Semestre</span>
            <input type="date" name="txt_inicio_primeiro_bimestre" id="txt_inicio_primeiro_bimestre" value="<?php echo $inicio_primeiro_bimestre ?>">
        </div>

        <div class="col6">
            <span>Fim primeiro Semestre</span>
            <input type="date" name="txt_fim_primeiro_bimestre" id="txt_fim_primeiro_bimestre" value="<?php echo $fim_primeiro_bimestre ?>">
        </div>
    </label>
    
    <label>
        <div class="col6">
            <span>Início segundo Semestre</span>
            <input type="date" name="txt_inicio_segundo_bimestre" id="txt_inicio_segundo_bimestre" value="<?php echo $inicio_segundo_bimestre ?>">
        </div>

        <div class="col6">
            <span>Fim segundo Semestre</span>
            <input type="date" name="txt_fim_segundo_bimestre" id="txt_fim_segundo_bimestre" value="<?php echo $fim_segundo_bimestre ?>">
        </div>
    </label>
    
    <label>
        <div class="col6">
            <span>Início terceiro Semestre</span>
            <input type="date" name="txt_inicio_terceiro_bimestre" id="txt_inicio_terceiro_bimestre" value="<?php echo $inicio_terceiro_bimestre ?>">
        </div>

        <div class="col6">
            <span>Fim terceiro Semestre</span>
            <input type="date" name="txt_fim_terceiro_bimestre" id="txt_fim_terceiro_bimestre" value="<?php echo $fim_terceiro_bimestre ?>">
        </div>
    </label>
    <label>
        <div class="col6">
            <span>Início quarto Semestre</span>
            <input type="date" name="txt_inicio_quarto_bimestre" id="txt_inicio_quarto_bimestre" value="<?php echo $inicio_quarto_bimestre ?>">
        </div>

        <div class="col6">
            <span>Fim quarto Semestre</span>
            <input type="date" name="txt_fim_quarto_bimestre" id="txt_fim_quarto_bimestre" value="<?php echo $fim_quarto_bimestre ?>">
        </div>
    </label>
    
    <input type="hidden" name="txt_id_ano_letivo" value="">					

    <input type="submit" name="logar" id="logar" value="Salvar" class="but salvar">					
    
</form>
</div>
</div>