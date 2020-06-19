<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function cadastro()
	{
		$dados = array('titulo' => 'Cadastrar responsável');
		$this->load->template("categoria/cadastro", $dados);
	}

	public function novo()
	{
		$this->load->model("categoria_model");
		$categoria = $this->input->post("categoria");
		$descricao = $this->input->post("descricao");

		if(!empty($categoria))
		{
			//Organiza o array para insert (garantindo os valores do BD)
			$responsavel = array();
			$responsavel["categoria"] = $categoria;
			$responsavel['descricao'] = $descricao;

			$cadastro = $this->categoria_model->salva($responsavel);

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
		redirect("Categoria/cadastro");
	}
}
