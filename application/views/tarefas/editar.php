<?php
	$label = $tipo == 'edicao' ? "Editar" : "Cadastrar";
	$id_tarefa = isset($dados_tarefa['id_tarefa']) ? $dados_tarefa['id_tarefa'] : '';
	$descricao = isset($dados_tarefa['descricao']) ? $dados_tarefa['descricao'] : '';
	$responsavel = isset($dados_tarefa['responsavel']) ? $dados_tarefa['responsavel'] : '';
	$finalizacao = isset($dados_tarefa['finalizacao']) ? $dados_tarefa['finalizacao'] : '';
	$categoria = isset($dados_tarefa['categoria']) ? $dados_tarefa['categoria'] : '';

?>    	
    	<h2><?= $label; ?> Tarefa</h2>
		<?php
		
		$url = site_url("tarefa/alterar");
		$configuracoes_form = array('class' => 'form-horizontal', 'id'=>'form_cad');
			echo form_open($url, $configuracoes_form);
		?>

		<?= form_hidden('id_tarefa', $id_tarefa); ?>

		<div class="form-group">
		<?php
			echo form_label("Descrição", "descricao");
			echo form_input(array(
				"name" => "descricao",
				"class" => "form-control",
				"id" => "descricao",
				"maxlength" => "250",
				"placeholder" => "Descrição",
				"required" => "required",
				"value" => $descricao
			));
		?>
		</div>

		<div class="form-group">
			<?php
				echo form_label("Responsavel", "responsavel");
			?>
			<select class="form-control" name="responsavel" required>
				<option value="">Selecione um Responsável</option>
				<?php foreach ($dados_responsaveis as $linha) : ?>
					<?php $selected =  $linha['id_responsavel'] == $responsavel ? "selected" : ''; ?>
					<option value="<?= $linha['id_responsavel'] ?>" <?= $selected ?> ><?= $linha['nome'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group">
		<?php
			echo form_label("Finalização", "finalizacao");
			echo form_input(array(
				"name" => "finalizacao",
				"type" => "date",
				"class" => "form-control",
				"id" => "finalizacao",
				"placeholder" => "Descrição",
				"required" => "required",
				"value" => $finalizacao
			));
		?>
		</div>

		<div class="form-group">
			<?php
				echo form_label("categoria", "categoria");
			?>
			<select class="form-control" name="categoria" required="required">
				<option value="">Selecione uma Categoria</option>
				<?php foreach ($dados_categorias as $linha) : ?>
					<?php $selected =  $linha['id_categoria'] == $categoria ? "selected" : ''; ?>
					<option value="<?= $linha['id_categoria'] ?>" <?= $selected ?> ><?= $linha['categoria'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group">
		<?php
			echo form_input(array(
				"class" => "btn btn-primary",
				"type" => "submit",
				"value" => $label
			));
		?>
		</div>
			
		<?	echo form_close();	?>
        