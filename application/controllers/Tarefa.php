<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefa extends CI_Controller {

	public function index($pagina = 1)
	{
		$this->load->library('pagination');

		$this->load->model("tarefas_model");;

		$dados_tarefas = $this->tarefas_model->listar_tarefas();

		/*
		$passo = 3;
		$numero_linhas = $this->tarefas_model->num_listar_tarefas($pagina, $passo);

		$url_atual = current_url();
		$vetor_url_atual = explode('/', $url_atual);
		if(is_numeric(end($vetor_url_atual))) {
			array_pop($vetor_url_atual);
			$url_atual = implode('/', $vetor_url_atual);
		}

		$config = array();
		$config['base_url'] = $url_atual;
		$config['total_rows'] = $numero_linhas;
		$config['first_link'] = FALSE;
		$config['prev_link'] = FALSE;
		$config['next_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['cur_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['per_page'] = 1;
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';


		$this->pagination->initialize($config);

		$paginacao_tarefa = $this->pagination->create_links();

		*/

		$dados = array(
			'titulo' => 'Listar Tarefas',
			'dados_tarefas' => $dados_tarefas
		);

		$this->output->enable_profiler(TRUE);
		$this->load->template("tarefas/lista", $dados);
	}
}
