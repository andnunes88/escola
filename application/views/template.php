<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema escolar</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/estilo.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/grade.css"/>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/js.js"></script>
	
	<script>
		var base_url = "<?php echo base_url() ?>";
	</script>
</head>

<body>
	<div class="site">	
		<?php include"cabecalho.php"?>	
		<div class="conteudo">
			
			<?php 

			$this->load->view($nome_view);
			
			?>
			
			
		</div>	
		<div class="rodape"></div>	
	</div>		
</body>
</html>