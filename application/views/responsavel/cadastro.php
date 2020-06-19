    	
    	<h2>Cadastrar Responsável</h2>
		<?php
		
		$url = site_url("responsavel/novo");
		$configuracoes_form = array('class' => 'form-horizontal', 'id'=>'form_cad');
			echo form_open($url, $configuracoes_form);
		?>

		<div class="form-group">
		<?php

			echo form_label("Nome", "nome");
			echo form_input(array(
				"name" => "nome",
				"class" => "form-control",
				"id" => "nome",
				"maxlength" => "200",
				"placeholder" => "Nome do Responsável",
				"required" => "required"
			));
		?>
		</div>

		<div class="form-group">
		<?php
			echo form_input(array(
				"class" => "btn btn-primary",
				"type" => "submit",
				"value" => "Cadastrar"
			));
		?>
		</div>
			
		<?	echo form_close();	?>
        