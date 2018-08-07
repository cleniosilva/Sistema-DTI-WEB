<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paineladm extends CI_Controller {

    //função para verificar sessão
    public function verificar_sessao()
    {
        if($this->session->userdata('logado') == false){
            redirect('login');
        }//é necessario copiar essa função em todos metodos controles privados
    }
	
	public function index()
	{
            $this->verificar_sessao();
            $this->load->view('cabecalho');
            $this->load->view('painel');
            $this->load->view('rodape');
	}
}
