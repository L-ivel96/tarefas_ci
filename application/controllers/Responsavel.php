<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Responsavel extends CI_Controller {

	public function cadastro()
	{
		$dados = array('titulo' => 'Cadastrar responsável');
		$this->load->template("responsavel/cadastro", $dados);
	}

	public function novo()
	{
		$this->load->model("responsavel_model");
		$nome = $this->input->post("nome");

		if(!empty($nome))
		{
			//Organiza o array para insert (garantindo os valores do BD)
			$responsavel = array();
			$responsavel["nome"] = $nome;
			$data = new \Datetime('now');
			$responsavel['criado_em'] = $data->format('Y-m-d H:i:s');

			$cadastro = $this->responsavel_model->salva($responsavel);

			if($cadastro)
			{
				$this->session->set_flashdata('success', "Os dados foram cadastrados com sucesso");
			}
			else
			{
				$this->session->set_flashdata("danger" ,"Erro ao cadastrar");
			}
		}
		else
		{
			$this->session->set_flashdata("danger" ,"Os dados enviados não foram preenchidos corretamente.");
		}		
		
		//redirecionar
		redirect("Responsavel/cadastro");
	}
}
