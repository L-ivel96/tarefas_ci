<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?= $titulo; ?></title>
	<link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
	<script src="<?= base_url("js/jquery_3_4_1_min.js") ?>"></script>
	<script src="<?= base_url("js/bootstrap.min.js") ?>"></script>
	<link rel="stylesheet" href="<?= base_url("css/estilo.css") ?>">
	<script src="<?= base_url("js/funcoes.js") ?>"></script>
	
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-dark">
		<ul class="nav">
			<li class="nav-item"><?= anchor('tarefa/index','Listar Tarefas', array("class" => "nav-link text-white"))?></a></li>
			<li class="nav-item"><?= anchor('responsavel/cadastro','Cadastrar Responsável', array("class" => "nav-link text-white"))?></a></li>
			<li class="nav-item"><?= anchor('categoria/cadastro','Cadastrar Categoria', array("class" => "nav-link text-white"))?></a></li>
		</ul>
	</nav>

	<div class="container">
		<?php if($this->session->flashdata("success"))  : ?>
			<p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
		<?php endif ?>
		<?php if($this->session->flashdata("danger"))  : ?>
			<p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
		<?php endif ?>
