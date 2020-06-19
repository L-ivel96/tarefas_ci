<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefa extends CI_Controller {

	public function index($pagina = 1)
	{
		$this->load->library('pagination');

		$this->load->model("tarefas_model");;

		$dados_tarefas = $this->tarefas_model->listar_tarefas();
		
		$dados = array(
			'titulo' => 'Listar Tarefas',
			'dados_tarefas' => $dados_tarefas
		);

		//$this->output->enable_profiler(TRUE);
		$this->load->template("tarefas/lista", $dados);
	}

	public function excluir()
	{
		$this->load->model("tarefas_model");
		$id_tarefa = $this->input->post("id_tarefa");
		$resp = array();
		$resp["id_tarefa"] = $id_tarefa;
		$resp["post"] = $_POST;

		if($id_tarefa)
		{
			$resp["op"] = $this->tarefas_model->excluir_tarefa($id_tarefa);
			echo json_encode($resp);
		}
		else
		{
			$resp["op"] = false;
			echo json_encode($resp);
		}
	}

	public function editar($id = 0)
	{
		$dados = array();

		$this->load->model("tarefas_model");
		$this->load->model("responsavel_model");
		$this->load->model("categoria_model");

		$dados_responsaveis = $this->responsavel_model->listar();
		$dados_categorias = $this->categoria_model->listar();

		$dados['dados_responsaveis'] = $dados_responsaveis;
		$dados['dados_categorias'] = $dados_categorias;

		if($id === 0) {
			$dados['titulo'] = 'Cadastrar Tarefa';
			$dados['tipo'] = 'cadastrar';
		}
		else {
			$dados_tarefa = $this->tarefas_model->buscar($id);

			$dados['titulo'] = 'Editar Tarefa';
			$dados['dados_tarefa'] = $dados_tarefa;
			$dados['tipo'] = 'edicao';
		}

		$this->output->enable_profiler(TRUE);
		$this->load->template("tarefas/editar", $dados);

	}

	public function alterar()
	{
		$this->load->model("tarefas_model");
		$dados = array();

		$id_tarefa = $this->input->post("id_tarefa");
		$dados['descricao'] = $this->input->post("descricao");
		$dados['responsavel'] = $this->input->post("responsavel");
		$dados['finalizacao'] = $this->input->post("finalizacao");
		$dados['categoria'] = $this->input->post("categoria");
		$data = new \DateTime('now');

		$dados['atualizado_em'] = $data->format('Y-m-d H:s:i');

		//Valida dados
		if(
			empty($dados['descricao']) || empty($dados['responsavel'])
			|| empty($dados['finalizacao']) || empty($dados['categoria'])
			|| !is_numeric($dados['responsavel']) || !is_numeric($dados['categoria'])
		) {
			$this->session->set_flashdata("danger" ,"Os campos não foram preenchidos corretamente");
			redirect("Tarefa/editar/$id_tarefa");
			exit();
		}

		$op = false;

		if(!empty($id_tarefa) && is_numeric($id_tarefa)) {
			$op = $this->tarefas_model->atualizar($dados, $id_tarefa);
		}
		else {
			$dados['criado_em'] = $dados['atualizado_em'];
			$op = $this->tarefas_model->criar($dados);
			$id_tarefa = $op;
		}

		if($op) {
			$this->session->set_flashdata('success', "Operação realizada com sucesso");
		}
		else {
			$this->session->set_flashdata("danger" ,"Erro de Registro");
		}

		redirect("Tarefa/editar/$id_tarefa");

	}

}
