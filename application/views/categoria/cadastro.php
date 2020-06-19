    	
    	<h2>Cadastrar Categoria</h2>
		<?php
		
		$url = site_url("categoria/novo");
		$configuracoes_form = array('class' => 'form-horizontal', 'id'=>'form_cad');
			echo form_open($url, $configuracoes_form);
		?>

		<div class="form-group">
		<?php

			echo form_label("Categoria", "categoria");
			echo form_input(array(
				"name" => "categoria",
				"class" => "form-control",
				"id" => "categoria",
				"maxlength" => "200",
				"placeholder" => "Nome da Categoria",
				"required" => "required"
			));
		?>
		</div>

		<div class="form-group">
		<?php

			echo form_label("Descrição", "descricao");
			echo form_input(array(
				"descricao" => "descricao",
				"class" => "form-control",
				"id" => "descricao",
				"maxlength" => "200",
				"placeholder" => "Descrição (Opcional)"
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
        