<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefa extends CI_Controller {

	public function index()
	{
		$dados = array('titulo' => 'Listar Tarefas');
		$this->load->template("tarefas/lista", $dados);
	}
}
